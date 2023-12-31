<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next) : Response
    {
        if (Session::has('id') && Session::has('fullname')  ) {
            return $next($request);
        }

        // Người dùng chưa đăng nhập, bạn có thể chuyển hướng hoặc xử lý tùy ý.
        return redirect()->route('clients.homeClient')->with('err-check-login', 'Bạn chưa đăng nhập!');
    }
}
