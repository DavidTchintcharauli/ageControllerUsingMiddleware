<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->has('age')) {
            $age = $request->input('age');
            
            if ($age >= 21) {
                return redirect('/adultPage');
            } else {
                return redirect('/childPage');
            }
        } else {
            return redirect('/');
        }
    }
}
