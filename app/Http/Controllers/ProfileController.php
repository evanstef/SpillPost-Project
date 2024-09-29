<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    // menampilkan halaman profile user masing masing
    public function showUserProfile(User $user) {
        return view('profile.show', [
            'user' => $user
        ]);
    }

    // menampilkan halama bookmarks yang berada di profile user
    public function showUserBookmarks(User $user) {
        return view('profile.show', [
            'user' => $user
        ]);
    }

    // ganti image profile
    public function updateUserImage(Request $request)
    {
        // Validasi file yang diunggah
        $validated = $request->validate([
            'image' => ['required', 'image' ,'mimes:png,jpg,jpeg'],
        ]);

        // Ambil file dari request
        $file = $request->file('image');

        // Simpan file di direktori 'images/users' dalam disk publik
        $imagePath = $file->store('images/users', 'public');

        // Update kolom 'image' dari user yang terautentikasi
        User::where('id', Auth::id())->update([
            'image' => $imagePath,
        ]);

        // Bisa menambahkan response atau redirect setelah update
        return redirect()->back()->with('success', 'Image updated successfully.');

    }
}
