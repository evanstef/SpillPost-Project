<x-app-layout>
    <x-layout-content class="w-full sm:w-[80%] rounded-lg p-4 xl:p-6 mx-4 sm:mx-0">
        <div class="flex justify-between gap-5 sm:gap-10">
            {{-- foto user --}}
            <div class="w-[30%]">
                <img class="w-20 h-20 sm:w-24 sm:h-24 md:w-32 md:h-32 xl:w-40 xl:h-40 rounded-full object-cover" src="{{ $user->image ? asset('storage/' . $user->image) : asset('storage/images/gambar-foto-profil-7.jpg') }}" alt="">
                <div class="mt-1 sm:hidden w-full">
                    <p class="font-bold text-sm">{{ $user->username }}</p>
                    <p class="text-xs">{{ $user->description }}</p>
                </div>
            </div>

            {{-- user, follow, follower, berapa postingan --}}
            <div class="w-[70%]">
                {{-- informasi follow follwers dan jumlah postingan --}}
                <div class="flex justify-between items-center mb-5">
                    <!-- Follower -->
                    <div class="text-center">
                        <p class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Follower</p>
                        <p class="text-xs sm:text-sm lg:text-base xl:text-lg">10000</p>
                    </div>

                    <!-- Following -->
                    <div class="text-center">
                        <p class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">Following</p>
                        <p class="text-xs sm:text-sm lg:text-base xl:text-lg">1000</p>
                    </div>

                    <!-- SpillPost -->
                    <div class="text-center">
                        <p class="font-bold text-sm sm:text-base md:text-lg lg:text-xl xl:text-2xl">SpillPost</p>
                        <p class="text-xs sm:text-sm lg:text-base xl:text-lg">{{ $user->posts->count() }}</p>
                    </div>
                </div>

                {{-- di cek jika user login tampilkan menu edit profile --}}
                @if(Auth::check() && Auth::user()->id === $user->id)
                <div class="flex justify-center">
                    <a class="bg-gray-600 hover:bg-gray-700 duration-300 ease-in-out  text-white px-3 py-1 rounded-lg text-base md:text-lg xl:text-xl" href="{{ route('profile.edit') }}">Edit Profile</a>
                </div>

                @else
                <div class="flex gap-5 sm:gap-10 justify-center">
                    <button class="bg-blue-600 hover:bg-blue-700 duration-300 ease-in-out text-white px-3 py-1 rounded-lg md:text-lg xl:text-xl">Follow</button>
                    <button class="bg-gray-600 hover:bg-gray-700 duration-300 ease-in-out text-white px-3 py-1 rounded-lg md:text-lg xl:text-xl">Unfollow</button>
                </div>
                @endif

                {{-- deskripsi user --}}
                <div class="sm:mt-5 xl:mt-10 hidden sm:block">
                    <p class="sm:text-sm md:text-base lg:text-xl">{{ $user->username }}</p>
                    <p class="sm:text-xs md:text-sm sm:w-3/4 lg:w-8/12">{{ $user->description }}</p>
                </div>
            </div>
        </div>

        {{-- postingan user dan bookmarks --}}
        <div class="mt-5">
            <div class="flex justify-center gap-5 sm:gap-10">
                <x-nav-link class="rounded-lg" href="{{ route('profile.show', $user) }}" :active="request()->is('profile/' . $user->username)">SpillPost</x-nav-link>
                @auth
                    @if ($user->id === Auth::user()->id)
                        <x-nav-link class="rounded-lg" href="{{ route('profile.bookmarks', $user) }}" :active="request()->is('profile/' . Auth::user()->username . '/bookmarks')" class="rounded-lg">Bookmarks</x-nav-link>
                    @endif
                @endauth
            </div>
            <div class="bg-white h-[1px] w-full"></div>

            <div class="space-y-6 mt-10">
                @if (request()->is('profile/' . $user->username))
                    @if ($user->posts->count() === 0)
                        <p class="text-center text-lg">No SpillPost yet</p>
                    @else
                            @foreach ($user->posts()->orderBy('created_at', 'desc')->get() as $post)
                                <x-post-template :post="$post" />
                                @if (!$loop->last)
                                <div class="bg-white h-[1px] w-full"></div>
                                @endif
                            @endforeach
                    @endif

                @elseif (request()->is('profile/' . Auth::user()->username . '/bookmarks'))
                    @if ($user->bookmarksByUsers->count() === 0)
                        <p class="text-center text-lg">No Bookmarks yet</p>
                    @else
                        @foreach ($user->bookmarksByUsers()->orderBy('created_at', 'desc')->get() as $bookmark)
                            <x-bookmark-template :bookmark="$bookmark" />
                            @if (!$loop->last)
                            <div class="bg-white h-[1px] w-full"></div>
                                @endif
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </x-layout-content>
</x-app-layout>
