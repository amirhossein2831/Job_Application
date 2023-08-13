<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use JetBrains\PhpStorm\NoReturn;

class IsYourPost
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure(Request): (Response|RedirectResponse) $next
     * @return Response|RedirectResponse
     */
    #[NoReturn] public function handle(Request $request, Closure $next): Response|RedirectResponse
    {
        $post = $request->route('post');
        $user = Auth::user();
        if ($post->user_id !== $user->id) {
            return redirect('/dashboard')->with('warning','the job not found');
        }
        return $next($request);
    }
}
