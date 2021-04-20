<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ParserController;

Route::get('/', [FrontController::class, 'index']);
Route::get('/admin', [DashboardController::class, 'index']);
Route::get('/admin/parser/categories', [ParserController::class, 'categories']);
