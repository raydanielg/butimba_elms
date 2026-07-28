<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Notifications\ApplicationSubmitted;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Notification;

use Barryvdh\DomPDF\Facade\Pdf;

class ApplicationController extends Controller
{
    public function showForm()
    {
        return view('pages.apply');
    }

    public function preview(Request $request)
    {
        try {
            $app = (object) $request->all();
            $pdf = Pdf::loadView('pdf.application', compact('app'));
            return $pdf->stream('application_preview.pdf');
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'PDF Preview Error: ' . $e->getMessage()
            ], 500);
        }
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|in:Mke,Mme',
            'dob' => 'required|date',
            'region' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
            'address' => 'required|string',
            'phone' => 'required|string|max:20',
            'relative_phone' => 'required|string|max:20',
            'employment_status' => 'required|in:Nimeajiriwa,Sijaajiriwa',
            'previous_profession' => 'required|string|max:255',
            'college_name' => 'required|string|max:255',
            'graduation_year' => 'required|integer|min:1900|max:'.date('Y'),
            'certificate_number' => 'required|string|max:255',
            'applied_course' => 'required|string|max:255',
            'declaration' => 'required|accepted',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $request->all();
            $data['declaration_confirmed'] = $request->has('declaration');

            $application = Application::create($data);

            try {
                Notification::route('mail', $application->email)
                    ->notify(new ApplicationSubmitted($application));
            } catch (\Exception $e) {
                \Log::warning('Failed to send application email: ' . $e->getMessage());
            }

            return response()->json([
                'success' => true,
                'message' => 'Maombi yako yametumwa kwa mafanikio!',
                'tracking_code' => $application->tracking_code,
                'download_url' => route('apply.download', ['id' => $application->id]),
                'track_url' => route('track.result', ['code' => $application->tracking_code]),
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Kuna tatizo limetokea: ' . $e->getMessage()
            ], 500);
        }
    }

    public function download($id)
    {
        try {
            $app = Application::findOrFail($id);
            $pdf = Pdf::loadView('pdf.application', compact('app'));
            return $pdf->download('Butimba_Application_'.$app->full_name.'.pdf');
        } catch (\Exception $e) {
            return response('Error generating PDF: ' . $e->getMessage(), 500);
        }
    }

    public function trackForm()
    {
        return view('pages.track');
    }

    public function trackResult($code)
    {
        $application = Application::where('tracking_code', $code)->first();

        if (!$application) {
            return response()->json([
                'success' => false,
                'message' => 'Tracking code not found. Please check and try again.'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'application' => [
                'tracking_code' => $application->tracking_code,
                'full_name' => $application->full_name,
                'email' => $application->email,
                'applied_course' => $application->applied_course,
                'status' => $application->status,
                'submitted_at' => $application->created_at->format('d/m/Y H:i:s'),
            ]
        ]);
    }
}

