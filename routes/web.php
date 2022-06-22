<?php


use App\Http\Controllers\{
    UserController
};

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

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/editar', [UserController::class, 'editar'])->name('users.editar');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');
Route::post('/users', [UserController::class,'grava'])->name('users.grava');


Route::get('/', function () {
    return view('welcome');
});
