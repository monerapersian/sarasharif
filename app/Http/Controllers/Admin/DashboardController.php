<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visit;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $days = (int) $request->get('days', 1);

        if (! in_array($days, [1, 7, 30, 90])) {
            $days = 1;
        }

        $from = Carbon::now()->subDays($days - 1)->startOfDay();

        // آمار کارت‌ها
        $totalVisits = Visit::where('created_at', '>=', $from)->count();

        $blogVisits = Visit::where('created_at', '>=', $from)
            ->whereIn('page_type', ['blog', 'post'])
            ->count();

        $calculatorVisits = Visit::where('created_at', '>=', $from)
            ->where('page_type', 'calculator')
            ->count();

        // اطلاعات نمودار
        $chart = Visit::selectRaw('DATE(created_at) as date, COUNT(*) as total')
            ->where('created_at', '>=', $from)
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        $chartLabels = $chart
            ->pluck('date')
            ->map(function ($date) {
                return jalali($date, '%d %B');
            })
            ->values();

        $chartValues = $chart->pluck('total');

        return view('admin.dashboard', compact(
            'days',
            'totalVisits',
            'blogVisits',
            'calculatorVisits',
            'chartLabels',
            'chartValues'
        ));
    }
}