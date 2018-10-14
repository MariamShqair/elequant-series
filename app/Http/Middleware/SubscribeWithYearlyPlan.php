<?php

namespace App\Http\Middleware;

use Closure;

class SubscribeWithYearlyPlan
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     *@param $plan
     * @return mixed
     */
    public function handle($request, Closure $next,$plan = null)
    {

        $user = $request->user();
        if($user && $user->isSubscribed($plan))
            {
                return $next($request);
            }
          return  redirect('/');
    }
}
