<?php


use App\Http\Controllers\{
    UserController,
    Admin\CommentController
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
//rotas dos comentários
Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{id}',              [CommentController::class, 'update'])->name('comments.update');
Route::post('/users/{id}/comments',       [CommentController::class, 'store' ])->name('comments.store');
Route::get('/users/{id}/comments',        [CommentController::class, 'index' ])->name('comments.index');

//rotas dos usuarios
Route::delete('users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/editar', [UserController::class, 'editar'])->name('users.editar');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create',[UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class,'grava'])->name('users.grava');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});
