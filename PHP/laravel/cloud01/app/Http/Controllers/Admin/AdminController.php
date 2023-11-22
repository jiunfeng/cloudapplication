<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Manager\Manager;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //驗證
    public function login()
    {
        //後台登入夜面
        return view("admin.login");
    }

    //後台登入檢查帳密
    public function doLogin(Request $req)
    {
        $managerId = $req->managerId;
        $pwd = $req->pwd;
        $manager = (new Manager())->getManager($managerId);
        if (empty($manager)) {
            //back():回到上一頁面
            //whitInput():保留原本在網頁上的輸入資料
            //withErrors:回傳錯誤訊息
            return back()->withInput()->withErrors(["account" => '帳號錯誤']);
        } else {
            if ($manager->pwd != $pwd) {
                return back()->withInput()->withErrors(["pwd" => '密碼錯誤']);
            } else {

                //帳號及密碼正確,轉址到後台首頁
                //將帳號存入session中，如果session中有managerId,即可操作後台所有功能，不用每次操作都要登入
                session()->put("managerId", $managerId);
                //跳轉後台頁面
                return redirect("/admin/home");
            }
        }
    }
    //跳回後台首頁
    public function home()
    {
        return view("admin.home");
    }
}
