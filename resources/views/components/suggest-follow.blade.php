@props(['user' => null])

<div class="flex flex-col sm:flex-row sm:justify-between sm:items-center">
    <div class="flex gap-1 sm:gap-2 items-center">
        {{-- foto dari user --}}
        <div class="w-6 h-6 lg:w-8 lg:h-8">
            <img class="w-full h-full rounded-full object-cover" src="{{ $user->image ? asset('storage/' . $user->image) : asset('storage/images/gambar-foto-profil-7.jpg') }}" alt="">
        </div>

        {{-- nama dan username --}}
        <div>
            <p class="text-[10px] sm:text-sm">{{ $user->name }}</p>
            <a href="{{ route('profile.show', $user ) }}" class="block text-[8px] sm:text-xs hover:underline hover:text-blue-600 duration-300 ease-in-out line-clamp-1">{{ $user->username }}</a>
        </div>
    </div>

    <div>
        <button class="bg-blue-600 hover:bg-blue-700 duration-300 md:text-sm font-bold px-5 sm:px-3 sm:py-1 rounded sm:rounded-lg text-xs sm:text-base">Follow</button>
    </div>
</div>
