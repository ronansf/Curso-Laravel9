<?php


use App\Http\Controllers\{
    MenuController,
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
//rotas dos menus
Route::get('/menus/{id}/view',      [MenuController::class, 'view'])->name('menus.view');
Route::delete('menus/{id}',         [MenuController::class, 'destroy'])->name('menus.destroy');
Route::put('/menus/{id}',           [MenuController::class, 'update'])->name('menus.update');
Route::get('/menus/{id}/edit',      [MenuController::class, 'edit'])->name('menus.edit');
Route::get('/menus/create',         [MenuController::class, 'create'])->name('menus.create');
Route::post('/menus',               [MenuController::class, 'store'])->name('menus.store');
Route::get('/menus',                [MenuController::class, 'index'])->name('menus.index');
Route::get('/menus/{id}',           [MenuController::class, 'show'])->name('menus.show');

//rotas dos comentários
Route::get('/users/{id}/comments/create', [CommentController::class, 'create'])->name('comments.create');
Route::get('/users/{user}/comments/{id}', [CommentController::class, 'edit'])->name('comments.edit');
Route::put('/comments/{id}',              [CommentController::class, 'update'])->name('comments.update');
Route::post('/users/{id}/comments',       [CommentController::class, 'store' ])->name('comments.store');
Route::get('/users/{id}/comments',        [CommentController::class, 'index' ])->name('comments.index');

//rotas dos usuarios
Route::delete('users/{id}',         [UserController::class, 'destroy'])->name('users.destroy');
Route::put('/users/{id}',           [UserController::class, 'update'])->name('users.update');
Route::get('/users/{id}/edit',      [UserController::class, 'edit'])->name('users.edit');
Route::get('/users',                [UserController::class, 'index'])->name('users.index');
Route::get('/users/create',         [UserController::class, 'create'])->name('users.create');
Route::post('/users',               [UserController::class,'store'])->name('users.store');
Route::get('/users/{id}',           [UserController::class, 'show'])->name('users.show');


Route::get('/', function () {
    return view('welcome');
});
