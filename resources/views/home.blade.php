<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}
    {{-- Postingan Content --}}
    <x-layout-content class="w-[75%] sm:w-[60%] rounded-lg ml-4 sm:ml-0">

        {{-- Postingan Orang Orang --}}
        @foreach ($posts as $post)
        <div class="p-3 sm:p-4 xl:p-6 space-y-4">
           <x-post-template :post="$post" />
        </div>
        @if (!$loop->last)
           <div class="bg-white h-[1px] w-full"></div>
        @endif
        @endforeach


    </x-layout-content>

    {{-- Suggesstion To Follow --}}
    <x-layout-content class="w-[25%] sm:w-[20%] p-3 xl:p-4 rounded-lg mr-4 sm:mr-0">
        {{-- User user yang baru daftar di web ini --}}
        <div class="space-y-4">
            <h1 class="text-[10px] sm:text-xs lg:text-base">Who To Follow</h1>
            {{-- user user yang baru daftar di web ini --}}
            @foreach ($users as $user)
                @if (Auth::check())
                    @if ($user->id !== Auth::user()->id)
                        <x-suggest-follow :user="$user" />
                    @endif
                @else
                    <x-suggest-follow :user="$user" />
                @endif
            @endforeach
        </div>
    </x-layout-content>
</x-app-layout>
