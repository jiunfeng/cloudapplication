<?php

use App\Http\Controllers\Admin\Member\MemberController;
use App\Http\Controllers\FormControllerTest;
use App\Http\Controllers\Front\IndexController;
use Illuminate\Support\Facades\Route;

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
Route::get('/', [IndexController::class, "indexFirst"]);
Route::get('/table', [IndexController::class, "SQLindex"]);

//測試表單
Route::get('form', [FormControllerTest::class, "showform"])->name('showform');
Route::post('form', [FormControllerTest::class, "showform"])->name('submitform');

Route::get("/member/add", [MemberController::class, "add"]);
Route::post("/member/insert", [MemberController::class, "insert"]);
Route::get("/member/list", [MemberController::class, "list"]);

//創建laravel專案自動產生的內容
/* Route::get('/', function () {
    return view('welcome');
});
 */