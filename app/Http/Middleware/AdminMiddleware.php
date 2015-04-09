<?php namespace app\Http\Middleware;

use Closure;

class AdminMiddleware
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
        if (!Auth::check() || !Auth::user()->admin) {
            return Redirect::to('/');
        }

        return $next($request);
    }
}
