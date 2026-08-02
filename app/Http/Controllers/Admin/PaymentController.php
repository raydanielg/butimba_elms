<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\FeeStructure;
use App\Models\Programme;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $query = Payment::with('user');

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('student_name', 'like', "%{$search}%")
                  ->orWhere('reference', 'like', "%{$search}%");
            });
        }

        $payments = $query->latest()->paginate(15);

        $stats = [
            'total_verified' => Payment::where('status', 'verified')->sum('amount'),
            'total_pending' => Payment::where('status', 'pending')->count(),
            'total_rejected' => Payment::where('status', 'rejected')->count(),
        ];

        return view('admin.payments.index', compact('payments', 'stats'));
    }

    public function verify(Payment $payment)
    {
        $payment->update(['status' => 'verified']);
        return back()->with('success', 'Payment verified successfully.');
    }

    public function reject(Payment $payment)
    {
        $payment->update(['status' => 'rejected']);
        return back()->with('success', 'Payment rejected.');
    }

    public function feeStructures()
    {
        $feeStructures = FeeStructure::with('programme')->latest()->paginate(15);
        $programmes = Programme::all();
        return view('admin.payments.fees', compact('feeStructures', 'programmes'));
    }

    public function storeFee(Request $request)
    {
        $validated = $request->validate([
            'programme_id' => 'nullable|exists:programmes,id',
            'fee_type' => 'required|string|max:255',
            'fee_type_sw' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description_en' => 'nullable|string',
            'description_sw' => 'nullable|string',
        ]);

        FeeStructure::create($validated);

        return back()->with('success', 'Fee structure added successfully.');
    }

    public function destroyFee(FeeStructure $fee)
    {
        $fee->delete();
        return back()->with('success', 'Fee structure removed.');
    }
}
