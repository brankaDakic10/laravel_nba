<?php

namespace App\Http\Middleware;

use Closure;

class CheckCommentWords
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

        $forbidden_words = [
            'hate',
            'stupid',
            'idiot'
        ];
        foreach ($forbidden_words as $word) {
            
            if(
                stristr($request->get('content') , $word)) {
                return response(view('teams.forbidden-comment'));
            }


        }

        return $next($request);
    }
}
