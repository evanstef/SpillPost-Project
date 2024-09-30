<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

// menampilkan detail dari user masing masing
Route::get('/profile/{user:username}', [ProfileController::class, 'showUserProfile'])->name('profile.show');

// menampilkan detail dari postingan masing masing
Route::get('/post/{post}', [PostController::class, 'showPost'])->name('post.show');

// pencarian user
Route::get('api/users/search', [HomeController::class, 'searchUsers'])->name('search.users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // fitur bookmarks
    Route::post('/post/{post}/bookmark', [PostController::class, 'bookmark'])->name('post.bookmark');
    Route::post('/post/{post}/unbookmark', [PostController::class, 'unbookmark'])->name('post.unbookmark');

    // update user image
    Route::post('/profile/update-user-image', [ProfileController::class, 'updateUserImage'])->name('profile.update-user-image');

    // menampilkan halaman bookmarks yang berada di profile user
    Route::get('/profile/{user:username}/bookmarks', [ProfileController::class, 'showUserBookmarks'])->name('profile.bookmarks');

    // membuat postingan
    Route::post('/create-post', [PostController::class, 'createPost'])->name('post.create');

    // fitur like dan unlike postingan
    Route::post('/post/{post}/like', [PostController::class, 'like'])->name('post.like');
    Route::post('/post/{post}/unlike', [PostController::class, 'unlike'])->name('post.unlike');

    // fitur komen postingan
    Route::post('/post/{post}/comment', [PostController::class, 'createComment'])->name('post.comment');



});

require __DIR__.'/auth.php';
