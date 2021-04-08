<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;

Route::get('/', [FrontController::class, 'index']);