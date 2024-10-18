<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// pencarian users
Route::get('/users/search', [HomeController::class, 'searchUsers']);

?>
