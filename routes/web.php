<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\PostsController;
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

Route::resource('/posts', PostsController::class)->middleware(["auth"]);
Route::delete('/posts/images/{id}', [PostsController::class, "deleteImage"])->middleware(["auth"]);

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/search', [PostsController::class, "search"]);

Route::post("/like/{post}", [LikesController::class, "store"])->middleware(["auth"])->name("like.store");

Route::post("/comments/{postId}", [CommentsController::class, "store"])->middleware(['auth']);
Route::get('/comments/{postId}', [CommentsController::class, "index"])->middleware(['auth']);
Route::delete("/comments/{commentId}", [CommentsController::class, "destroy"])->middleware(['auth']);
Route::patch("/comments/{commentId}", [CommentsController::class, "update"])->middleware(['auth']);

require __DIR__ . '/auth.php';
