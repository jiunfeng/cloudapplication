<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//Kernel內有取別名叫做manager
class CheckManager
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {   //- 如果沒有登入拿到session會直接被跳轉到首頁
        //- 另外再app/Http/Middleware有寫一支CheckManager讓如果沒有session就不能進入會跳轉回首頁
        if (empty(session()->get("managerId"))) {
            return redirect("admin");
            exit;
        }
        return $next($request);
    }
}
