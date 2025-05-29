<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
Route::get('/', function () {
    return view('welcome');
});

Route::post('/clientes', [ClienteController::class, 'store']);