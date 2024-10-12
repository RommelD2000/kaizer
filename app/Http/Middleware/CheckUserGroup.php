<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckUserGroup
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  \Closure  $next
     * @param  string  $group
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $group): Response
    {



        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect('/login'); // Redirige vers la page de connexion si non authentifié
        }

        // Vérifie si l'utilisateur appartient au groupe requis
        if (Auth::user()->role !== $group) {
            return back(); // Redirige vers la page d'accueil ou une autre page appropriée
            // return redirect('/'); // Redirige vers la page d'accueil ou une autre page appropriée
        }
        return $next($request);
    }
}
