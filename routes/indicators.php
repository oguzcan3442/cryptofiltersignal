<?php

use App\Http\Controllers\IndicatorController;
use Illuminate\Support\Facades\Route;

Route::prefix("/indicator")->group(function(){
    Route::get('/supertrend', [IndicatorController::class, 'superTrendView']);
    Route::post('/supertrend', [IndicatorController::class, 'superTrendView']);

    Route::get('/fibonacci', [IndicatorController::class, 'fibonacciView']);
    Route::post('/fibonacci', [IndicatorController::class, 'fibonacciView']);
});
