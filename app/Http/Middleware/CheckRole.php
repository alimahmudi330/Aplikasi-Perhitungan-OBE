<?php 

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, ...$roles)
{
    if (Auth::check()) {
        $user = Auth::user();

        // Cek apakah role pengguna sesuai dengan salah satu dari yang diizinkan
        if (in_array($user->role, $roles)) {
            return $next($request);
        }
    }

    return redirect('/login')->withErrors(['access' => 'You do not have access to this resource.']);
}

}
