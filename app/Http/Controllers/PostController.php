<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function showPost(Post $post) {
        $users = User::query()->latest()->get()->take(5);
        return view('post.show', [
            'post' => $post,
            'users' => $users
        ]);
    }
    // untuk user bisa posting
    public function createPost(Request $request) {
        $validated = $request->validate([
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg'],
            'content' => ['required', 'string'],
        ]);

        // Pengecekan jika user mengunggah file gambar
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $imagePath = $file->store('images/posts', 'public');
        } else {
            $imagePath = null; // Jika tidak ada gambar, set null
        }


        // pengecekan postinga user menambah atau tidak menambahkan gambar
        $request->user()->posts()->create([
            'body' => $validated['content'],
            'image' => $imagePath
        ]);

        return redirect()->route('home');
    }

    // fitur like postingan
    public function like(Post $post) {
        $post->likedByUsers()->attach(Auth::user()->id);
        return redirect()->back();
    }

    // fitur unlike postingan
    public function unlike(Post $post) {
        $post->likedByUsers()->detach(Auth::user()->id);
        return redirect()->back();
    }

    // fitur komenan postingan
    public function createComment(Post $post, Request $request) {

        $request->validate([
            'comment' => ['required', 'string'],
        ]);

        $post->comments()->create([
            'body' => $request->comment,
            'user_id' => Auth::user()->id
        ]);
        return redirect()->back();
    }

}
