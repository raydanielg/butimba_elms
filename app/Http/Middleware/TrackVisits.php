<?php

namespace App\Http\Middleware;

use App\Models\Visitor;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class TrackVisits
{
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        try {
            if (Schema::hasTable('visitors') && $request->method() === 'GET') {
                $ip = $request->ip() ?? '0.0.0.0';
                $today = now()->toDateString();

                $existing = Visitor::where('ip_address', $ip)
                    ->where('visit_date', $today)
                    ->first();

                if (!$existing) {
                    Visitor::create([
                        'ip_address'    => $ip,
                        'user_agent'    => substr($request->userAgent() ?? '', 0, 500),
                        'page_visited'  => $request->path() === '/' ? '/' : '/' . $request->path(),
                        'referrer'      => substr($request->header('referer') ?? '', 0, 500),
                        'visit_date'    => $today,
                    ]);
                }
            }
        } catch (\Exception $e) {
        }

        return $response;
    }
}
