<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if (!$user || !$user->profiles()->find(1)) {
            return redirect()->route('users-registering.index')->with('error', 'Você não está autorizado a acessar essa página.');
        }

        return $next($request);
    }
}