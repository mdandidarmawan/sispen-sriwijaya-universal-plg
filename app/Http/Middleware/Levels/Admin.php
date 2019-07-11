<?php

namespace App\Http\Middleware\Levels;

use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->pengguna_level == 'admin')
            return $next($request);

        $url = $request->url();

        if (strpos($url, '/api/') !== false)
            return response()->json(['message'=>'No Access.']);
        else {
            if (Auth::user())
                return redirect(Auth::user()->pengguna_level);
            else
                return redirect(route('login'));
        }
    }
}