<?php

namespace App\Http\Middleware;

use Closure;

class MyauthMiddleware
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
        //使用中间件判断session是否有值 
        if(empty(session('adminuser'))){//没有登录跳转到登录页面
            return redirect("/admin/login");
        }
        //继续往下执行
        return $next($request);
    }

   
}
