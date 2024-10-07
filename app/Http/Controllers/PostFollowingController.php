<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PostFollowingController extends Controller
{
    // menampilkan postingan yang diikuti user
    public function showPostFollowing(Request $request) {
        $userLogin = $request->user();
        // mengambil semua user yang ada di database secara random
        $allUsers = User::inRandomOrder()->latest()->paginate(6);

        // mengambil 5 user acak
        $usersLimit = User::inRandomOrder()->limit(5)->get();

        // untuk menampilkan semua postingan dari user yang diikuti
        $posts = collect();

        // mencari user yang diikuti dan mengambil postingan dari user yang diikuti
        $usersFollowing = $userLogin->following()->with('posts')->latest()->get();

        foreach ($usersFollowing as $user) {
            $posts = $posts->merge($user->posts()->latest()->get());
        }


        return view('post.following', [
            'allUsers' => $allUsers,
            'usersLimit' => $usersLimit,
            'usersFollowing' => $usersFollowing,
            'posts' => $posts
        ]);
    }
}
