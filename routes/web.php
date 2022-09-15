<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::middleware('logged')->group(function () {
    Route::get('/login', [PagesController::class, 'login'])->name('pages.login');
    Route::post('/login', [AuthController::class, 'login'])->name('pages.login');
});
Route::middleware('authContact')->group(function () {
    Route::get('/adicionar', [PagesController::class, 'addContact'])->name('pages.add');
    Route::get('/actualizar/{id}', [PagesController::class, 'updateContact'])->name('pages.update');
    Route::get('/sair', [AuthController::class, 'logout'])->name('pages.logout');
});

Route::middleware('authContactApi')->group(function () {
    Route::post('/adicionar', [ContactController::class, 'store'])->name('api.add');
    Route::put('/actualizar/{id}', [ContactController::class, 'update'])->name('api.update');
    Route::delete('/remover/{id}', [ContactController::class, 'destroy'])->name('api.delete');
});
