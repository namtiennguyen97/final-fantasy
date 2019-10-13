<?php

namespace App\Http\Middleware;

use Closure;

class Admin
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
        $username = $request->inputUsername;
        $password = $request->inputPassword;
        if ($username == 'nam' && $password == '123456') {
            $request->session()->push('login', true);
            return $next($request);

        }
        $message = 'Đăng nhập thất bại, hãy cấp quyền Admin để truy cập';
        $request->session()->flash('login-fail', $message);
        return view('login');

    }
}
