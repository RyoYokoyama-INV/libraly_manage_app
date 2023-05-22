<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// 商品一覧の表示
Route::get("item", "App\Http\Controllers\ItemController@index");

// 商品登録ページ
Route::get("item/toroku", "App\Http\Controllers\ItemController@torokuPage");

// 商品登録の実行
Route::post("item/toroku", "App\Http\Controllers\ItemController@toroku");

// 商品編集ページ
Route::get("item/henshu/{id}", "App\Http\Controllers\ItemController@henshuPage");

// 商品編集の実行
Route::post("item/henshu/{id}", "App\Http\Controllers\ItemController@henshu");

// 商品削除の実行
Route::post("item/sakujo/{id}", "App\Http\Controllers\ItemController@sakujo");
