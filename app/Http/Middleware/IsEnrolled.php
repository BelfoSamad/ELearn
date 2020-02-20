<?php

namespace App\Http\Middleware;
use Closure;
use \App;

class IsEnrolled
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
        if($request->user()->my_courses->contains(App\Course::where('slug', $request->route('slug'))->get()->first()))
            return $next($request);
        else
            return redirect()->back();
    }
}
