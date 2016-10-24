<?php

namespace App\Http\Middleware;

use Closure;
use Menu;
use Caffeinated\Menus\Builder;


class MenuMiddleware
{
    /**
     * Run the request filter.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure                  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('example', function(Builder $menu) {
            $menu->add('Home', 'home');
            $menu->add('Recipes', 'recipes');
        });

        return $next($request);
    }
}