<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/entrar', [AuthController::class, 'login'])->name('api.login');
Route::middleware('authContactApi')->group(function () {
    Route::post('/adicionar', [ContactController::class, 'store'])->name('api.add');
    Route::put('/actualizar/{id}', [ContactController::class, 'update'])->name('api.update');
    Route::delete('/remover/{id}', [ContactController::class, 'destroy'])->name('api.update');
});
