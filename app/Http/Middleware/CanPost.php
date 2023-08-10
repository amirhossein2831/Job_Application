<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CanPost
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
        $trial = $user->user_trial;
        $billingEnd = $user->billing_ends;
        if ($trial < now()->format('Y-m-d') && is_null($billingEnd)) {
            return redirect('/pay/subscription')->with('warning', 'you need to make your account premium');
        }else if ($trial < now()->format('Y-m-d') && $billingEnd < now()->format('Y-m-d')) {
            return redirect('/pay/subscription')->with('warning', 'your premium account time has finish perches new one');
        }
        return $next($request);
    }
}
