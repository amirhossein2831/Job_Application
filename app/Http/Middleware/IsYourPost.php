<?php

namespace App\Http\Middleware;

use App\Models\Post;
use Auth;
use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class IsYourPost
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
        $post = Post::find($request->input('delete'));
        $user = Auth::user();
        if ($post->user_id !== $user->id) {
            return redirect('/dashboard')->with('warning','the job not found');
        }
        return $next($request);
    }
}
