<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UssdController;

// Route::post('/ussd', [UssdController::class, 'handle']);
Route::match(['get', 'post'], '/ussd', [UssdController::class, 'handle']);