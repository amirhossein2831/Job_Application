<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CanPerches
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $user = Auth::user();
        $billingEnd = $user->billing_ends;
        if ($billingEnd > now()->format('Y-m-d')) {
            return redirect('/')->with('warning','you already perches a Box');
        }
        return $next($request);
    }
}
