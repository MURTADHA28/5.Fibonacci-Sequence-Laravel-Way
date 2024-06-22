<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FibonacciController;

Route::get('/', [FibonacciController::class, 'showInputForm']);


Route::post('/fibonacci', [FibonacciController::class, 'generateFibonacci']);


