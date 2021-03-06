<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\laundrycontroller;
use App\Http\Controllers\maincontroller;
use App\Http\Controllers\servicescontroller;
use App\Http\Controllers\orderscontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\editcontroller;

Route::get('/admin',[admincontroller::class,'create'])->name('adminlogin');
route::group(['middleware'=>['AuthCheck']],function()
{
     Route::get('/admin/dashboard',[maincontroller::class,'dashboard']);
     Route::get('/adminreg',[admincontroller::class,'register'])->name('adminregister');
     Route::get('delete/{id}',[admincontroller::class,'delete']);
Route::get('deletebooking/{id}',[admincontroller::class,'deletebooking']);
Route::get('edit/{id}',[editcontroller::class,'showdata']);
Route::get('/viewbookeditem',[laundrycontroller::class,'bookeditem']);
Route::get('/addservice',[servicescontroller::class,'show']);
Route::get('admin/orders',[orderscontroller::class,'create']);
Route::get('/viewfeedback',[laundrycontroller::class,'feedback']);



});
Route::get("/",[laundrycontroller::class,'create']);
Route::post('/index',[laundrycontroller::class,'store']);
Route::get('/about',[laundrycontroller::class,'about']);
Route::post("/booking",[servicescontroller::class,'Booking']);
Route::post('/viewfeedbackread',[laundrycontroller::class,'store']);
Route::post('/mybookings',[laundrycontroller::class,'mybookings']);
Route::post('edit',[editcontroller::class,'edit']);
//Route::get('/viewform',[orderscontroller::class,'index']);

Route::get('/contact',[laundrycontroller::class,'show']);
Route::post('/booknow',[laundrycontroller::class,'booknow']);
Route::post('/addservice/add',[servicescontroller::class,'addservice']);
Route::post('/auth/save',[maincontroller::class,'save'])->name('auth.save');
Route::post('/auth/check',[maincontroller::class,'check'])->name('auth.check');
Route::get('/auth/logout',[maincontroller::class,'logout'])->name('auth.logout');


Route::get('/auth/login',[maincontroller::class,'login'])->name('auth.login');
Route::get('/auth/register',[maincontroller::class,'register'])->name('auth.register');

route::group(['middleware'=>['AuthCheck']],function(){

Route::get("/allservices",[admincontroller::class,'allservices']);
Route::get('/viewservices',[servicescontroller::class,'index']);
Route::get("/orderplace",[laundrycontroller::class,'orderplace']);
Route::get("detail/{id}",[servicescontroller::class,'detail']);
Route::get('/detailslist',[orderscontroller::class,'show']);
});


Route::post('/save',[admincontroller::class,'save'])->name('adminlogin');
Route::post('/check',[admincontroller::class,'check'])->name('adminregister');

