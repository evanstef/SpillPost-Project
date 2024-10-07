<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body x-data="{ open: false, openReply: false, commentId: null, username: '' }" :class="{ 'overflow-hidden': open || openReply }" class="font-sans antialiased dark:text-white">
                {{-- Form untuk reply comment --}}
                <div x-show="openReply"
                class="fixed inset-0 flex bg-gray-900 bg-opacity-75 items-center justify-center z-50"
                @keydown.escape.window="openReply = false"
                style="display: none;">

                    {{-- Modal Content --}}
                    <div class="bg-white dark:bg-gray-800 w-11/12 sm:w-3/4 lg:w-[70%] xl:w-[40%] rounded-lg relative p-6 sm:p-4 lg:p-6">
                        {{-- Form Content --}}
                        <h2 class="lg:text-xl font-bold mb-4">Reply Comment from <span x-text="username"></span></h2>
                        <form :action="`/comment/${commentId}/reply`" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-4">
                                <x-text-input name="reply_comment" class="w-full block" type="text" placeholder="Reply a comment..." autocomplete="off"></x-text-input>
                                <x-input-error :messages="$errors->get('reply_comment')" class="mt-2" />
                            </div>

                            <div class="flex justify-end">
                                <button @click="openReply = false" type="button" class="mr-2 px-4 py-2 bg-gray-500 text-white rounded-lg">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Reply</button>
                            </div>
                        </form>
                    </div>
                </div>
                {{-- akhir dari reply comment form --}}

        {{-- main content semua --}}
        <div class="min-h-screen bg-gray-100  dark:bg-gray-900">

            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main class="max-w-7xl mx-auto sm:px-6 lg:px-7 flex items-start justify-between mt-10 gap-5 lg:gap-6 xl:gap-10 pb-28 sm:pb-10">
                @include('layouts.sidebar')
                {{ $slot }}

            </main>
        </div>
    </body>
</html>
