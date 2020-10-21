<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $rqUser = Auth::id();
        $user = User::find($rqUser);
        if ($user->is_active == 0){
            Auth::logout();
            return redirect()->route('login.index')->with('msg', 'Tài khoản của bạn đã bị khóa');
        }
        return $next($request);
    }
}
