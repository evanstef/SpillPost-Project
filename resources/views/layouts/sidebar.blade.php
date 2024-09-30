<x-layout-content class="w-full flex justify-around items-center fixed z-20 sm:z-0 sm:static sm:block bottom-0 sm:w-[20%] overflow-hidden h-20 sm:rounded-lg sm:h-auto">
    {{-- Beranda --}}
    <x-nav-link class="flex items-center sm:justify-center lg:justify-normal gap-2" href="{{ route('home') }}" :active="request()->routeIs('home')">
            <svg class="w-10 h-10 sm:hidden lg:block lg:w-8 lg:h-8" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.875 24H7.1875V15H15.8125V24H20.125V10.5L11.5 3.75L2.875 10.5V24ZM0 27V9L11.5 0L23 9V27H12.9375V18H10.0625V27H0Z" fill="#FFFBFB"/>
            </svg>
            <p class="hidden sm:block">Home</p>
    </x-nav-link>

    {{-- Following --}}
    <x-nav-link class="flex items-center sm:justify-center lg:justify-normal gap-2">
            <svg class="w-10 h-10 sm:hidden lg:block lg:w-8 lg:h-8" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.9125 12.8025C16.6462 12.1674 17.2346 11.382 17.638 10.4994C18.0413 9.61685 18.25 8.65785 18.25 7.6875C18.25 5.86414 17.5257 4.11545 16.2364 2.82614C14.947 1.53683 13.1984 0.8125 11.375 0.8125C9.55164 0.8125 7.80295 1.53683 6.51364 2.82614C5.22433 4.11545 4.5 5.86414 4.5 7.6875C4.49999 8.65785 4.70873 9.61685 5.11205 10.4994C5.51537 11.382 6.10383 12.1674 6.8375 12.8025C4.91269 13.6741 3.27964 15.0816 2.1336 16.8567C0.987556 18.6319 0.377024 20.6996 0.375 22.8125C0.375 23.1772 0.519866 23.5269 0.777728 23.7848C1.03559 24.0426 1.38533 24.1875 1.75 24.1875C2.11467 24.1875 2.46441 24.0426 2.72227 23.7848C2.98013 23.5269 3.125 23.1772 3.125 22.8125C3.125 20.6245 3.99419 18.526 5.54137 16.9789C7.08854 15.4317 9.18696 14.5625 11.375 14.5625C13.563 14.5625 15.6615 15.4317 17.2086 16.9789C18.7558 18.526 19.625 20.6245 19.625 22.8125C19.625 23.1772 19.7699 23.5269 20.0277 23.7848C20.2856 24.0426 20.6353 24.1875 21 24.1875C21.3647 24.1875 21.7144 24.0426 21.9723 23.7848C22.2301 23.5269 22.375 23.1772 22.375 22.8125C22.373 20.6996 21.7624 18.6319 20.6164 16.8567C19.4704 15.0816 17.8373 13.6741 15.9125 12.8025V12.8025ZM11.375 11.8125C10.5592 11.8125 9.76163 11.5706 9.08327 11.1173C8.40492 10.6641 7.87621 10.0198 7.564 9.26607C7.25179 8.51232 7.1701 7.68292 7.32926 6.88275C7.48843 6.08258 7.88129 5.34758 8.45818 4.77068C9.03508 4.19379 9.77008 3.80093 10.5703 3.64176C11.3704 3.4826 12.1998 3.56429 12.9536 3.8765C13.7073 4.18871 14.3516 4.71742 14.8048 5.39577C15.2581 6.07413 15.5 6.87165 15.5 7.6875C15.5 8.78152 15.0654 9.83073 14.2918 10.6043C13.5182 11.3779 12.469 11.8125 11.375 11.8125ZM24.7675 12.2525C25.6475 11.2616 26.2223 10.0375 26.4227 8.72747C26.6232 7.41748 26.4408 6.07748 25.8974 4.86875C25.3541 3.66002 24.473 2.63409 23.3601 1.91446C22.2473 1.19482 20.9502 0.812146 19.625 0.8125C19.2603 0.8125 18.9106 0.957366 18.6527 1.21523C18.3949 1.47309 18.25 1.82283 18.25 2.1875C18.25 2.55217 18.3949 2.90191 18.6527 3.15977C18.9106 3.41763 19.2603 3.5625 19.625 3.5625C20.719 3.5625 21.7682 3.9971 22.5418 4.77068C23.3154 5.54427 23.75 6.59348 23.75 7.6875C23.7481 8.4097 23.5565 9.11874 23.1946 9.7437C22.8326 10.3687 22.313 10.8876 21.6875 11.2488C21.4836 11.3663 21.3134 11.5343 21.193 11.7365C21.0726 11.9387 21.0062 12.1685 21 12.4038C20.9942 12.6372 21.048 12.8682 21.1563 13.0751C21.2645 13.282 21.4237 13.4579 21.6188 13.5862L22.155 13.9438L22.3337 14.04C23.9912 14.8261 25.3894 16.0695 26.3638 17.6237C27.3383 19.1779 27.8483 20.9782 27.8337 22.8125C27.8337 23.1772 27.9786 23.5269 28.2365 23.7848C28.4943 24.0426 28.8441 24.1875 29.2087 24.1875C29.5734 24.1875 29.9232 24.0426 30.181 23.7848C30.4389 23.5269 30.5837 23.1772 30.5837 22.8125C30.595 20.7025 30.0665 18.6246 29.0485 16.7763C28.0305 14.9281 26.5568 13.3708 24.7675 12.2525V12.2525Z" fill="#FFF9F9"/>
            </svg>

            <p class="hidden sm:block">Following</p>
    </x-nav-link>

    {{-- Profile --}}
    @auth
       <x-nav-link :href="route('profile.show', Auth::user())" :active="request()->is('profile/' . Auth::user()->username ) || request()->is('profile/' . Auth::user()->username . '/bookmarks') || request()->routeIs('profile.edit')" class="flex items-center sm:justify-center lg:justify-normal gap-2" >
            <svg class="w-10 h-10 sm:hidden lg:block lg:w-8 lg:h-8" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.6375 13.8875C18.863 12.9233 19.7575 11.6012 20.1965 10.1049C20.6356 8.60871 20.5974 7.01283 20.0872 5.53934C19.5771 4.06584 18.6203 2.78799 17.3501 1.88357C16.0799 0.979152 14.5593 0.493134 13 0.493134C11.4407 0.493134 9.92014 0.979152 8.64991 1.88357C7.37968 2.78799 6.42293 4.06584 5.91276 5.53934C5.4026 7.01283 5.36439 8.60871 5.80345 10.1049C6.24251 11.6012 7.13701 12.9233 8.3625 13.8875C6.26259 14.7288 4.43035 16.1242 3.06111 17.9249C1.69187 19.7256 0.83695 21.8641 0.587496 24.1125C0.569439 24.2767 0.583892 24.4428 0.630028 24.6013C0.676164 24.7599 0.75308 24.9078 0.856385 25.0367C1.06502 25.2969 1.36848 25.4635 1.7 25.5C2.03152 25.5365 2.36395 25.4397 2.62415 25.2311C2.88436 25.0225 3.05103 24.719 3.0875 24.3875C3.36198 21.944 4.5271 19.6873 6.36027 18.0485C8.19344 16.4097 10.5661 15.5038 13.025 15.5038C15.4839 15.5038 17.8566 16.4097 19.6897 18.0485C21.5229 19.6873 22.688 21.944 22.9625 24.3875C22.9965 24.6947 23.143 24.9783 23.3739 25.1838C23.6047 25.3892 23.9035 25.5019 24.2125 25.5H24.35C24.6777 25.4623 24.9772 25.2966 25.1832 25.0391C25.3892 24.7815 25.4851 24.453 25.45 24.125C25.1994 21.8703 24.3398 19.7262 22.9636 17.9228C21.5873 16.1193 19.7461 14.7244 17.6375 13.8875V13.8875ZM13 13C12.0111 13 11.0444 12.7068 10.2221 12.1574C9.3999 11.6079 8.75904 10.8271 8.3806 9.91342C8.00216 8.99979 7.90314 7.99446 8.09607 7.02455C8.289 6.05465 8.7652 5.16373 9.46446 4.46447C10.1637 3.76521 11.0546 3.289 12.0245 3.09608C12.9944 2.90315 13.9998 3.00217 14.9134 3.38061C15.827 3.75904 16.6079 4.39991 17.1573 5.22215C17.7068 6.0444 18 7.0111 18 8C18 9.32609 17.4732 10.5979 16.5355 11.5355C15.5978 12.4732 14.3261 13 13 13Z" fill="#FFFAFA"/>
            </svg>

            <p class="hidden sm:block">Profile</p>
       </x-nav-link>
    @endauth

    {{-- Tombol Spill --}}
    @auth
    <div>
        {{-- Trigger button --}}
        <div class="sm:mx-4 sm:my-3">
          <button @click="open = true" class="bg-blue-600 hover:bg-blue-700 duration-300 text-lg sm:text-sm md:text-2xl font-bold flex justify-center px-4 py-1 sm:w-full rounded-lg">SPILL</button>
        </div>

        <div x-show="open"
        class="fixed inset-0 bg-gray-900 bg-opacity-75 flex items-center justify-center z-50"
        @keydown.escape.window="open = false"

        style="display: none;">

            {{-- Modal Content --}}
            <div class="bg-white dark:bg-gray-800 w-11/12 sm:w-3/4 lg:w-[70%] xl:w-[40%] rounded-lg p-6 sm:p-4 lg:p-6 relative" @click.outside="open = false">

                {{-- Form Content --}}
                <h2 class="lg:text-xl font-bold mb-4">What Do You Want To Spill Today ?</h2>
                <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <textarea name="content" id="content" rows="6" cols="10" required
                            class="mt-1 text-sm lg:text-base block w-full border-none bg-transparent focus:ring-0 focus:border-none" placeholder="What's on your mind ?"></textarea>
                        <x-input-error :messages="$errors->get('content')" class="mt-2" />
                    </div>

                    {{-- Image Upload --}}
                    <div>
                        <label class="hover:cursor-pointer" for="post_input_image">
                            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="fill-black dark:fill-white" d="M17 0H3C2.20435 0 1.44129 0.316071 0.87868 0.87868C0.316071 1.44129 0 2.20435 0 3V17C0 17.7956 0.316071 18.5587 0.87868 19.1213C1.44129 19.6839 2.20435 20 3 20H17C17.1645 19.9977 17.3284 19.981 17.49 19.95L17.79 19.88H17.86H17.91L18.28 19.74L18.41 19.67C18.51 19.61 18.62 19.56 18.72 19.49C18.8535 19.3918 18.9805 19.2849 19.1 19.17L19.17 19.08C19.2682 18.9805 19.3585 18.8735 19.44 18.76L19.53 18.63C19.5998 18.5187 19.6601 18.4016 19.71 18.28C19.7374 18.232 19.7609 18.1818 19.78 18.13C19.83 18.01 19.86 17.88 19.9 17.75V17.6C19.9567 17.4046 19.9903 17.2032 20 17V3C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.316071 17.7956 0 17 0ZM3 18C2.73478 18 2.48043 17.8946 2.29289 17.7071C2.10536 17.5196 2 17.2652 2 17V12.69L5.29 9.39C5.38296 9.29627 5.49356 9.22188 5.61542 9.17111C5.73728 9.12034 5.86799 9.0942 6 9.0942C6.13201 9.0942 6.26272 9.12034 6.38458 9.17111C6.50644 9.22188 6.61704 9.29627 6.71 9.39L15.31 18H3ZM18 17C17.9991 17.1233 17.9753 17.2453 17.93 17.36C17.9071 17.4087 17.8804 17.4556 17.85 17.5C17.8232 17.5423 17.7931 17.5825 17.76 17.62L12.41 12.27L13.29 11.39C13.383 11.2963 13.4936 11.2219 13.6154 11.1711C13.7373 11.1203 13.868 11.0942 14 11.0942C14.132 11.0942 14.2627 11.1203 14.3846 11.1711C14.5064 11.2219 14.617 11.2963 14.71 11.39L18 14.69V17ZM18 11.86L16.12 10C15.5477 9.45699 14.7889 9.15428 14 9.15428C13.2111 9.15428 12.4523 9.45699 11.88 10L11 10.88L8.12 8C7.54772 7.45699 6.7889 7.15428 6 7.15428C5.2111 7.15428 4.45228 7.45699 3.88 8L2 9.86V3C2 2.73478 2.10536 2.48043 2.29289 2.29289C2.48043 2.10536 2.73478 2 3 2H17C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V11.86ZM11.5 4C11.2033 4 10.9133 4.08797 10.6666 4.2528C10.42 4.41762 10.2277 4.65189 10.1142 4.92597C10.0006 5.20006 9.97094 5.50166 10.0288 5.79264C10.0867 6.08361 10.2296 6.35088 10.4393 6.56066C10.6491 6.77044 10.9164 6.9133 11.2074 6.97118C11.4983 7.02906 11.7999 6.99935 12.074 6.88582C12.3481 6.77229 12.5824 6.58003 12.7472 6.33335C12.912 6.08668 13 5.79667 13 5.5C13 5.10218 12.842 4.72064 12.5607 4.43934C12.2794 4.15804 11.8978 4 11.5 4Z" fill="black"/>
                            </svg>
                        </label>
                        <input type="file" name="image" id="post_input_image" class="hidden" onchange="previewPostImage(event)">

                        {{-- preview post image --}}
                        <div id="preview_post_image" class="my-4 hidden w-40 h-20 sm:w-48 sm:h-28 relative">
                            {{-- preview --}}
                            <img class="w-full h-full object-cover hidden rounded-lg" alt="" id="post_image">

                            {{-- tombol cancel --}}
                            <button type="button" id="remove_post_image" onclick="cancelPostImage()" class="absolute hidden top-1 right-1">
                                <svg class="w-5 h-5 p-1 bg-white rounded-full" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path class="fill-black" d="M9.40994 8.00019L15.7099 1.71019C15.8982 1.52188 16.004 1.26649 16.004 1.00019C16.004 0.733884 15.8982 0.478489 15.7099 0.290185C15.5216 0.101882 15.2662 -0.00390625 14.9999 -0.00390625C14.7336 -0.00390625 14.4782 0.101882 14.2899 0.290185L7.99994 6.59019L1.70994 0.290185C1.52164 0.101882 1.26624 -0.00390601 0.999939 -0.00390601C0.733637 -0.00390601 0.478243 0.101882 0.289939 0.290185C0.101635 0.478489 -0.00415253 0.733884 -0.00415254 1.00019C-0.00415254 1.26649 0.101635 1.52188 0.289939 1.71019L6.58994 8.00019L0.289939 14.2902C0.196211 14.3831 0.121816 14.4937 0.0710478 14.6156C0.0202791 14.7375 -0.00585938 14.8682 -0.00585938 15.0002C-0.00585938 15.1322 0.0202791 15.2629 0.0710478 15.3848C0.121816 15.5066 0.196211 15.6172 0.289939 15.7102C0.382902 15.8039 0.493503 15.8783 0.615362 15.9291C0.737221 15.9798 0.867927 16.006 0.999939 16.006C1.13195 16.006 1.26266 15.9798 1.38452 15.9291C1.50638 15.8783 1.61698 15.8039 1.70994 15.7102L7.99994 9.41018L14.2899 15.7102C14.3829 15.8039 14.4935 15.8783 14.6154 15.9291C14.7372 15.9798 14.8679 16.006 14.9999 16.006C15.132 16.006 15.2627 15.9798 15.3845 15.9291C15.5064 15.8783 15.617 15.8039 15.7099 15.7102C15.8037 15.6172 15.8781 15.5066 15.9288 15.3848C15.9796 15.2629 16.0057 15.1322 16.0057 15.0002C16.0057 14.8682 15.9796 14.7375 15.9288 14.6156C15.8781 14.4937 15.8037 14.3831 15.7099 14.2902L9.40994 8.00019Z" fill="black"/>
                                </svg>
                            </button>
                        </div>
                        <x-input-error class="mt-2" :messages="$errors->get('image')" />
                    </div>

                    <div class="flex justify-end">
                        <button @click="open = false" type="button" class="mr-2 px-4 py-2 bg-gray-500 text-white rounded-lg">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-lg">Spill</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
    @endauth

</x-layout-content>
<script>
    function previewPostImage(event) {
        const previewPostContainer = document.getElementById('preview_post_image');
        const previewPostImage = document.getElementById('post_image');
        const cancelPostButton = document.getElementById('remove_post_image');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewPostImage.src = e.target.result;
                previewPostImage.classList.remove('hidden');
                cancelPostButton.classList.remove('hidden');
                previewPostContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    function cancelPostImage() {
        const filePostInput = document.getElementById('post_input_image');
        const previewPostContainer = document.getElementById('preview_post_image');
        const previewPostImage = document.getElementById('post_image');
        const cancelPostButton = document.getElementById('remove_post_image');

        filePostInput.value = ''; // Reset file input
        previewPostImage.src = ''; // Clear image source
        previewPostImage.classList.add('hidden'); // Hide the image
        cancelPostButton.classList.add('hidden'); // Hide the cancel button
        previewPostContainer.classList.add('hidden');
    }
</script>
