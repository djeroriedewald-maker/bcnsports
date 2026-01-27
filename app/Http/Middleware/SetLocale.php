<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        // Admin routes always Dutch
        if ($request->is('admin') || $request->is('admin/*')) {
            app()->setLocale('nl');
            return $next($request);
        }

        // Detect /en/ prefix
        if ($request->is('en') || $request->is('en/*')) {
            app()->setLocale('en');
        } else {
            app()->setLocale('nl');
        }

        return $next($request);
    }
}
