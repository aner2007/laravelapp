<?php

namespace App\Http\Middleware;

use Closure;

class Admin
{
    public function handle($request, Closure $next)
    {
        // Logika za provjeru i obradu zahtjeva

        return $next($request);
    }
}
