<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\Admin\Qa\AdminQaController;
use App\Http\Controllers\FormControllerTest;
use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//如果是表格要用post '/' 表示根目錄 然後要執行IndexController這支程式的 indexFirst這個方法 /是可以改的變成你想要的url
//Route::get('/', [IndexController::class, "indexFirst"]); 連到這個站台的時候/ 直接對應到的方法
Route::get('/', [IndexController::class, "index"]);

/* Route::get('/form.css', function () {
    $path = resource_path("../resources/views/front/form.css");

    return response()->file($path);
}); */

//測試表單
Route::get('form', [FormControllerTest::class, "showform"])->name('showform');
Route::post('form', [FormControllerTest::class, "showform"])->name('submitform');


//後台管理系統
Route::get("/admin", [AdminController::class, "login"]);
Route::post("doLogin", [AdminController::class, "doLogin"]);

Route::group(["middleware" => "manager"], function () {
    Route::get('/table', [IndexController::class, "SQLindex"]);
    Route::get("/member/add", [MemberController::class, "add"]);
    Route::get("/member/delete/{userid}", [MemberController::class, "delete"])->name('memberDelete');
    Route::get("/member/list", [MemberController::class, "list"]);
    Route::get("/admin/home", [AdminController::class, "home"]);
    //此POST是view.admin.member.add表單用的action
    Route::post("/member/insert", [MemberController::class, "insert"]);
    Route::get("/member/edit/{userid}", [MemberController::class, "edit"]);
    Route::post("/member/update", [MemberController::class, "update"]);
});

Route::get("/testweb", [IndexController::class, "testweb"]);

Route::get("sectionindex", [IndexController::class, "sectionindex"]);
Route::get("/listqa", [IndexController::class, "listtest"]);
//Route::group(["middleware"=>"manager","prefix"=>"member"],function(){XXXXXXX}) 群組起來就都要有session才可以動作
//創建laravel專案自動產生的內容
/* Route::get('/', function () {
    return view('welcome');
});
 */


//後台QA管理 middleware為 manager 需登入後台才可操作
//middlewate(manager)需再 app/Http/Kernel.php中註冊
//prefix:前置詞 可以放在["middleware" => "manager",prefix => admi/qa] 這個group 就會自動有前綴例如 admi/qa/listqasql
Route::group(["middleware" => "manager"], function () {
    //列表
    Route::get("/listqasql", [AdminQaController::class, "qaList"]);
    //新增
    Route::get("/listqasql_add", [AdminQaController::class, "add"]);
    //儲存新增
    Route::post("/listqasql_insert", [AdminQaController::class, "insert"]);
    //修改編輯參數為id
    Route::get("/listqasql_edit/{id}", [AdminQaController::class, "edit"]);
    //儲存變更
    Route::post("/listqasql_update", [AdminQaController::class, "update"]);
    //刪除
    Route::post("/listqasql_delete", [AdminQaController::class, "delete"]);
});
