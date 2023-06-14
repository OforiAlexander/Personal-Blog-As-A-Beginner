<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EditPostController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsDashboard;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show'])->name('posts.show');
Route::get('categories/{category:slug}', [CategoryController::class, 'index']);

Route::get('author/{author:username}', function (User $author) {
    return view('home', ['posts' =>  $author->posts]);
});

Route::get('/dashboard', [PostsDashboard::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('posts', PostController::class)->except('show');

    Route::get("users/post", [AdminPostController::class, 'index'])
        ->name('users.posts.index');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
