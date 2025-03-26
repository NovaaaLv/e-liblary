<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AuthenticatedMiddleware
{
  /**
   * Handle an incoming request.
   *
   * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
   */
  public function handle(Request $request, Closure $next, $role): Response
  {
    // Role agar admin dapat mengecek seluruh sistem
    if ($request->user()->role === 'admin') {
      return $next($request);
    }

    if ($request->user()->role !== $role) {
      abort(403, "Unauthorized  Access");
    } else {
      return $next($request);
    }
  }
}
