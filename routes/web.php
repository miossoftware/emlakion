<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContarctsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/sales-contract', [ContarctsController::class, 'index2'])->name('sales.contract');
Route::get('/rent-contracts', [ContarctsController::class, 'index'])->name('rent.contract');
