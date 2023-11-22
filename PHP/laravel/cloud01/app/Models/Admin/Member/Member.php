<?php

namespace App\Models\Admin\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB; //config/app 內有完整路徑這邊是取別名

class Member extends Model
{
    use HasFactory;
    //Laravel 會自動檢查(或增加)資料表兩個時間欄位create_at及updated_at
    //$timestamps=false;表示不要使用這兩個欄位
    public $timestamps = false;
    protected $primaryKey = 'userid';

    //資料表名稱
    protected $table = "member";

    //資料表主key,若key是由兩個欄位以上組成，要用中括號例如["aaa","bbb"]
    protected $primarykey = "useid";

    //資料表中的欄位名稱
    protected $fillable = [
        "useid", "username", "mobile", "email", "city", "createTime"
    ];

    public function getList()
    {
        //self:member資料表自己本身
        //self::get=Member::all();
        //get():取得資料表所有資料
        //first():取第一筆資料
        //paginate:分頁 paginate(5) 表示每5筆資料表示一頁

        //$list = self::paginate(10);
        $list = DB::table('member AS a')->selectRaw('a.*,b.categoryName')->leftjoin('category AS b', 'a.category', 'b.categoryId')->paginate(10);
        // $list = DB::table("member AS a")->selectRaw("a.*,b.city")->leftjoin("city AS b", "a.city", "b.id")->paginate(10);
        // 若有別的表單要組合要這樣使用
        return $list;
    }



    //取個人資料範例
    public function getMember($userID)
    {
        /* 
    簡單方式
    需要先引入 use DB
    $member = DB::table("member")->where("userId",$userId)->first()
    
    也可以
    $member = DB::select("SELECT * FROM member WHERE userID=?,[$userID]);
    
    */

        $member = self::where("userID", $userID)->first();
        return $member;
    }
}
