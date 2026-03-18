<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RayaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/raya', [RayaController::class, 'index']);
Route::post('/raya', [RayaController::class, 'store']);
Route::get('/raya/admin/{secret}', [RayaController::class, 'adminLogin']);
Route::delete('/raya/comments/{id}', [RayaController::class, 'destroy']);
