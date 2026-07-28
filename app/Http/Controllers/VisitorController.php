<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\JsonResponse;

class VisitorController extends Controller
{
    public function stats(): JsonResponse
    {
        $today = now()->toDateString();
        $yesterday = now()->subDay()->toDateString();
        $weekStart = now()->startOfWeek()->toDateString();
        $monthStart = now()->startOfMonth()->toDateString();
        $yearStart = now()->startOfYear()->toDateString();

        $stats = [
            'today'     => Visitor::where('visit_date', $today)->count(),
            'yesterday' => Visitor::where('visit_date', $yesterday)->count(),
            'this_week' => Visitor::where('visit_date', '>=', $weekStart)->count(),
            'this_month'=> Visitor::where('visit_date', '>=', $monthStart)->count(),
            'this_year' => Visitor::where('visit_date', '>=', $yearStart)->count(),
            'total'     => Visitor::count(),
        ];

        $recentPages = Visitor::select('page_visited')
            ->selectRaw('COUNT(*) as visits')
            ->where('visit_date', $today)
            ->groupBy('page_visited')
            ->orderByDesc('visits')
            ->limit(5)
            ->get();

        $dailyTrend = Visitor::selectRaw('visit_date, COUNT(*) as visits')
            ->where('visit_date', '>=', now()->subDays(7)->toDateString())
            ->groupBy('visit_date')
            ->orderBy('visit_date')
            ->get();

        return response()->json([
            'stats'        => $stats,
            'recent_pages' => $recentPages,
            'daily_trend'  => $dailyTrend,
        ]);
    }
}
