<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;


Route::get('/login', function () {
    if (Session::has('user')) {
        return redirect('/'); // If already logged in, redirect to home
    }
    return view('login'); // Otherwise, show login page
});




Route::get('/logout', function () {
    Session::forget('user'); // Clear the session
    Session::save(); // Ensure session changes are saved
    return redirect('/login'); // Redirect to login
});


Route::post('/login', [UserController::class, 'login']);

Route::get("/",[ProductController::class,'index']);

Route::get("/detail/{id}",[ProductController::class,'detail']);

Route::post("/add_to_cart",[ProductController::class,'addToCart']);

Route::get("/cartlist",[ProductController::class,'cartlist']);

Route::get("/removecart/{id}",[ProductController::class,'removeCart']);

Route::get("/ordernow",[ProductController::class,'orderNow']);

Route::post("/orderplace",[ProductController::class,'orderPlace']);

Route::get("/myorders",[ProductController::class,'myOrders']);

Route::get("/myorders",[ProductController::class,'myOrders']);

Route::view("/register",'register');

Route::post('/register', [UserController::class, 'register']);

 