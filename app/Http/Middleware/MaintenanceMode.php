<?php

namespace App\Http\Middleware;

use App\Models\Setting;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class MaintenanceMode
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Skip maintenance check for admin routes
        if ($request->is('admin') || $request->is('admin/*')) {
            return $next($request);
        }

        // Check if maintenance mode is enabled
        if (Setting::isMaintenanceMode()) {
            // Allow authenticated admins to view the site
            if (Auth::check()) {
                return $next($request);
            }

            // Show maintenance page to everyone else
            return response()->view('pages.maintenance', [], 503);
        }

        return $next($request);
    }
}
