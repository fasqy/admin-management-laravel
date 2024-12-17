<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SesiController;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function(){
    Route::get('/',[SesiController::class,'index'])->name('login');
    Route::post('/',[SesiController::class,'login']);    
});
Route::get('/home', function(){
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/operator',[AdminController::class,'operator'])->middleware('userakses:operator');
    Route::get('/admin/keuangan',[AdminController::class,'keuangan'])->middleware('userakses:keuangan');
    Route::get('/admin/marketing',[AdminController::class,'marketing'])->middleware('userakses:marketing');
    Route::get('/logout',[SesiController::class,'logout']);
});