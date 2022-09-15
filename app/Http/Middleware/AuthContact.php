<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AuthContact
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     *
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            return $next($request);
        }

        return redirect()->route('pages.index')->with('message', 'Não tens permissão de aceder esta página!');
    }
}
