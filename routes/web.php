<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Middleware\Authenticate;


Route::group(['middleware' => [Authenticate::class]], function () {
    Route::get('/withdrawal', function () {
        return view('withdrawal');
    });

    Route::get('/recharge', function () {
        return view('recharge');
    });
    Route::get('/order', function () {
        return view('order');
    });

    Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

});

Route::get('/', function () {
    return view('home');
});
Route::get('/mine', function () {
    return view('mine');
});
Route::get('/share', function () {
    return view('share');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/dashboard', function () {
    return view('dashboard');
});
Route::get('/crd-funding', function () {
    return view('crowdfunding');
});

Route::get('/trade', function () {
    return view('trade');
});

Route::get('/records', function () {
    return view('records');
});
Route::get('/info', function () {
    return view('info');
});
Route::get('/intro', function () {
    return view('intro');
});

Route::get('/register', [AuthController::class, 'create'])->name('auth.register');
Route::post('/register', [AuthController::class, 'store']);

Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


