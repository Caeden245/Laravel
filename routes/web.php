<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BossController;

Route::get('/', function () {
    return "welcome";
});

Route::get('/bosses', [BossController::class, 'index']);
Route::get('/bosses/create', [BossController::class, 'create']);

Route::get('/about', function () {
    return "About the amazing film app";
});
