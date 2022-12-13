<?php

use App\Http\Controllers\ContactFormsController;

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
//最初のぺーじを下記に追加
Route::get('/',[ContactFormsController::class,'index'])->name('index');
//confirm Method を取得。
Route::get('/confirm',[CotactFormsController::class,'confirm']);
Route::post('/confirm',[CotactFormsController::class,'confirm'])->name('confirm');

//メールの送信を行うため、sendを取得
Route::get('/thanks',[CotactFormsController::class,'send']);
Route::post('/thanks',[CotactFormsController::class,'send'])->name('send');
//Storeの処理を追加した
//Route::post('/','store')->name('store');

//Route::resource('contacts', 'App\Http\Controllers\ContactFormsController')->only([
//    'index','show'
//]);

