<?php
namespace App\Http\Middleware;
use Illuminate\Support\Facades\App;
use Closure;
class Idioma {
    /**
     * Handle an incoming request.
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next) {
        if (session()->has('idioma')) {
            App::setlocale(session()->get('idioma'));
        } 

        return $next($request);
    }
}