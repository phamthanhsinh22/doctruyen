<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\TruyenController;
use App\Http\Controllers\ChapterController;
use App\Http\Controllers\TheloaiController;
use App\Http\Controllers\AccountController;
use App\Notifications\ResetPasswordController;
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

//Login
Route::get('dangnhap','App\Http\Controllers\loginController@getLogin');
Route::post('dangnhap','App\Http\Controllers\loginController@postLogin');
Route::get('logout','App\Http\Controllers\loginController@getLogout');
Route::get('dangki','App\Http\Controllers\loginController@getRegister');
Route::post('dangki','App\Http\Controllers\loginController@postRegister');
//Admin
Route::get('admin','App\Http\Controllers\adminController@getAdmin');
Route::group(['prefix'=>'/admin', 'middleware'=>'auth'], function(){
	Route::resource('danhmuc',App\Http\Controllers\DanhmucController::class);
	Route::resource('truyen',App\Http\Controllers\TruyenController::class);
	Route::resource('chapter',App\Http\Controllers\ChapterController::class);
	Route::resource('theloai',App\Http\Controllers\TheloaiController::class);
	Route::resource('account',App\Http\Controllers\AccountController::class);
	Route::get('logout', [App\Http\Controllers\loginController::class,'getLogout']);
});

//Trang chủ
Route::get('danh-muc/{slug}','App\Http\Controllers\pageController@danhmuc');

Route::get('trangchu','App\Http\Controllers\pageController@getIndex');

Route::get('xem-truyen/{slug}','App\Http\Controllers\pageController@xemtruyen');

Route::get('xem-chapter/{slug}','App\Http\Controllers\pageController@xemchapter');

Route::get('the-loai/{slug}','App\Http\Controllers\pageController@theloai');

Route::get('tim-kiem','App\Http\Controllers\pageController@timkiem');
Route::get('truyennoibat','App\Http\Controllers\pageController@getTruyennoibat');

Route::post('/reset-password', [App\Http\Controllers\ResetPasswordController::class,'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/reset-password/{token}', [App\Http\Controllers\ResetPasswordController::class,'showResetPasswordForm'])->name('reset.password.get');
Route::get('/forget-password', [App\Http\Controllers\ResetPasswordController::class,'showForgetPasswordForm'])->name('forget.password.get');
Route::post('/forget-password', [App\Http\Controllers\ResetPasswordController::class,'submitForgetPasswordForm'])->name('forget.password.post');