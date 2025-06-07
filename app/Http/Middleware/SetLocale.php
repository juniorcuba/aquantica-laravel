<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  string|null  $locale  From the route alias, e.g. "en" or "es".
     */
    public function handle(Request $request, Closure $next, string $locale = null)
    {
        // 1️⃣  If the route passed a locale, use it.
        if ($locale) {
            App::setLocale($locale);
            Session::put('locale', $locale);     // remember choice
        }
        // 2️⃣  Otherwise fall back to anything saved in the session.
        elseif (Session::has('locale')) {
            App::setLocale(Session::get('locale'));
        }

        return $next($request);
    }
}
