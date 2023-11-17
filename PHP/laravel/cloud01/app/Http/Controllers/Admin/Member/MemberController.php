<?php

namespace App\Http\Controllers\Admin\Member;

use App\Http\Controllers\Controller;
use App\Models\Admin\Member\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function list()
    {
        $member = new Member();
        $list = $member->getList();

        return view("admin.member.list", compact("list"));
    }

    //新增資料
    public function add()
    {
        return view("admin.member.add");
    }
    public function insert(Request $req)
    { //-在route有post路由可以將web的表單傳入$req接著在這邊操作，admin.member.add表單用
        $member = new Member();
        $member->userid = $req->id;
        $member->username = $req->name;
        $member->mobile = $req->mobile;
        $member->email = $req->email;
        $member->city = $req->city;
        $member->address = $req->address;
        $member->save();

        Session::flash("message", "已新增");
        return redirect("/table");
        //dd($req->all()); //laravel用來測試收到的資料有哪些
        //dd($req->all('name')); dd($req->input('name'));
    }

    //刪除資料
    public function delete($userid)
    {
        $member = Member::where('userid', $userid)->first();
        $member->delete();
        echo $member;
        //return view("admin.member.delete");
    }
}
