<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RandomController;

Route::get('/{path?}', [RandomController::class, 'index']);