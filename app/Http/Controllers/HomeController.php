<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // data user user yang baru daftar di web ini
        $users = User::query()->latest()->get()->take(5);

        // untuk menampikan semua postingan
        $posts = Post::query()->latest()->get();
        return view('home',
            [
                'users' => $users,
                'posts' => $posts
            ]);
    }
}
