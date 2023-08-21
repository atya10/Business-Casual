<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class,'index']) ->name('index');
Route::get('/about',[MainController::class,'about']) ->name('about');
Route::get('/products',[MainController::class,'products']) ->name('products');
Route::get('/store',[MainController::class,'store']) ->name('store');





//

