<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        if (!auth()->check()) {
            return redirect()->route('login');
        }

        $user = auth()->user();

        $roleMap = [
            'admin' => 'admin',
            'teacher' => 'teacher',
            'student' => 'user',
        ];

        $userRole = $user->role;

        foreach ($roles as $role) {
            $allowedRole = $roleMap[$role] ?? $role;
            if ($userRole === $allowedRole) {
                return $next($request);
            }
        }

        abort(403, 'Unauthorized action.');
    }
}
