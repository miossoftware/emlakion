<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContarctsController;
use App\Http\Controllers\ConditionController;

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


/**
 * CONDİTİONS
 */
Route::get('/general-conditions', [ConditionController::class, 'generalConditions'])->name('general.conditions');
Route::get('/general-conditions/{id}', [ConditionController::class, 'generalConditionsById'])->name('general_conditions.show');
Route::post('/generalConditionsAdd', [ConditionController::class, 'generalConditionsAdd'])->name('general_conditions.add');
Route::post('/generalConditionsUpdateById/{id}', [ConditionController::class, 'generalConditionsUpdateById'])->name('general_conditions.update');
Route::get('/generalConditionsDeleteById/{id}', [ConditionController::class, 'generalConditionsDeleteById'])->name('general_conditions.delete');
