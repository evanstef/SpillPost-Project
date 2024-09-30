<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // data user user di acak namun ambil 5 user saja di web ini
        $users = User::inRandomOrder()->limit(5)->get();

        // untuk menampikan semua postingan
        $posts = Post::query()->latest()->get();
        return view('home',
            [
                'users' => $users,
                'posts' => $posts
            ]);
    }

    // pencarian semua user
    public function searchUsers(Request $request) {
        $searchUser = $request->input('search');

        if (strlen($searchUser) < 3) {
            return response()->json([]);
        }

        $users = User::query()->where('username', 'like', '%' . $searchUser . '%')
                              ->orWhere('name', 'like', '%' . $searchUser . '%')
                              ->get();
        return response()->json($users);
    }
}
