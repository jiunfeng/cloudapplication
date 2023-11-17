<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member\Member;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function SQLindex()
    {
        //Member::all()取得member資料表中所有資料
        $list = Member::all();

        //compact:將資料傳送到view網頁
        //compact("list"):要注意是list不是$list
        //list 這邊$list是宣告了list這個變數並將 member中的資料全部丟進去，再用compact將他傳到網頁
        return view("front.SQLindex", compact("list"));
    }
    public function indexFirst()
    {
        //echo ("laravel index");
        return view("welcome");
    }
}
