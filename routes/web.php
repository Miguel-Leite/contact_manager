<?php

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
Route::get('/login', [PagesController::class, 'login'])->name('pages.login');
Route::get('/', [PagesController::class, 'index'])->name('pages.index');
Route::middleware('authContact')->group(function () {
    Route::get('/adicionar', [PagesController::class, 'addContact'])->name('pages.add');
    Route::get('/actualizar/{id}', [PagesController::class, 'updateContact'])->name('pages.update');
});
