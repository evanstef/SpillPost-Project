@props(['comment' => null ])

<div>
    <div class="flex items-center justify-between">
        {{-- foto user dan username --}}
        <div class="flex items-center gap-2">
            <img class="w-6 h-6 sm:w-8 sm:h-8 object-cover rounded-full" src="{{ $comment->user->image ? asset('storage/' . $comment->user->image) : asset('storage/images/gambar-foto-profil-7.jpg') }}" alt="">
            <a href="{{ route('profile.show', $comment->user) }}" class="text-[10px] sm:text-base hover:underline hover:text-blue-600 duration-300 ease-in-out">{{ $comment->user->username }}</a>
        </div>

        {{-- waktu komentar --}}
        <div>
            <p class="text-[10px] sm:text-base">{{ $comment->created_at->diffForHumans() }}</p>
        </div>
    </div>

    {{-- isi komentar --}}
    <p class="text-[9px] sm:text-base">{{ $comment->body }}</p>
</div>
