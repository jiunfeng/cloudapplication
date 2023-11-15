<?php

namespace App\Models\Admin\Member;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    //Laravel 會自動檢查(或增加)資料表兩個時間欄位create_at及updated_at
    //$timestamps=false;表示不要使用這兩個欄位
    public $timestamps = false;

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

        $list = self::paginate(10);
        return $list;
    }
}
