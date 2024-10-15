<x-layout-content class="w-full flex justify-around items-center fixed z-20 sm:z-0 sm:sticky sm:top-[105px] sm:block bottom-0 sm:w-[20%] overflow-hidden h-20 sm:rounded-lg sm:h-auto">
    {{-- Beranda --}}
    <x-nav-link class="flex items-center sm:justify-center lg:justify-normal gap-2" href="{{ route('home') }}" :active="request()->routeIs('home')">
            <svg class="w-10 h-10 sm:hidden lg:block lg:w-8 lg:h-8" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M2.875 24H7.1875V15H15.8125V24H20.125V10.5L11.5 3.75L2.875 10.5V24ZM0 27V9L11.5 0L23 9V27H12.9375V18H10.0625V27H0Z" fill="#FFFBFB"/>
            </svg>
            <p class="hidden sm:block">Home</p>
    </x-nav-link>

    {{-- Following --}}
    <x-nav-link :href="route('post.following')" :active="request()->routeIs('post.following')" class="flex items-center sm:justify-center lg:justify-normal gap-2">
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
    </div>
    @endauth

</x-layout-content>
<script>
    function previewPostImages(event) {
        const previewPostContainer = document.getElementById('preview_post_image');
        const files = event.target.files;

        previewPostContainer.innerHtml = '';

        if (files.length > 0) {
        previewPostContainer.classList.remove('hidden');
        previewPostContainer.classList.add('grid'); // Tampilkan kontainer gambar jika ada gambar yang diunggah

        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const reader = new FileReader();

            reader.onload = function(e) {
                // Membuat elemen kontainer untuk setiap gambar dan tombol hapus
                const imageWrapper = document.createElement('div');
                imageWrapper.classList.add('relative', 'w-18', 'h-16', 'sm:w-24', 'sm:h-[70px]', 'md:w-28', 'md:h-20' ,'lg:w-36', 'lg:h-24', 'xl:w-[120px]', 'xl:h-[90px]');

                // Membuat elemen img untuk menampilkan gambar
                const img = document.createElement('img');
                img.src = e.target.result;
                img.classList.add('w-full', 'h-full', 'object-cover', 'rounded', 'xl:rounded-lg');

                // Membuat tombol hapus untuk setiap gambar
                const cancelButton = document.createElement('button');
                cancelButton.type = 'button';
                cancelButton.classList.add('absolute', 'top-[2px]', 'md:top-1', 'right-[2px]' ,'md:right-1', 'rounded-full');
                cancelButton.innerHTML = `
                    <svg class="w-4 h-4 md:w-5 md:h-5 p-1 bg-white rounded-full" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="fill-black" d="M9.40994 8.00019L15.7099 1.71019C15.8982 1.52188 16.004 1.26649 16.004 1.00019C16.004 0.733884 15.8982 0.478489 15.7099 0.290185C15.5216 0.101882 15.2662 -0.00390625 14.9999 -0.00390625C14.7336 -0.00390625 14.4782 0.101882 14.2899 0.290185L7.99994 6.59019L1.70994 0.290185C1.52164 0.101882 1.26624 -0.00390601 0.999939 -0.00390601C0.733637 -0.00390601 0.478243 0.101882 0.289939 0.290185C0.101635 0.478489 -0.00415253 0.733884 -0.00415254 1.00019C-0.00415254 1.26649 0.101635 1.52188 0.289939 1.71019L6.58994 8.00019L0.289939 14.2902C0.196211 14.3831 0.121816 14.4937 0.0710478 14.6156C0.0202791 14.7375 -0.00585938 14.8682 -0.00585938 15.0002C-0.00585938 15.1322 0.0202791 15.2629 0.0710478 15.3848C0.121816 15.5066 0.196211 15.6172 0.289939 15.7102C0.382902 15.8039 0.493503 15.8783 0.615362 15.9291C0.737221 15.9798 0.867927 16.006 0.999939 16.006C1.13195 16.006 1.26266 15.9798 1.38452 15.9291C1.50638 15.8783 1.61698 15.8039 1.70994 15.7102L7.99994 9.41018L14.2899 15.7102C14.3829 15.8039 14.4935 15.8783 14.6154 15.9291C14.7372 15.9798 14.8679 16.006 14.9999 16.006C15.132 16.006 15.2627 15.9798 15.3845 15.9291C15.5064 15.8783 15.617 15.8039 15.7099 15.7102C15.8037 15.6172 15.8781 15.5066 15.9288 15.3848C15.9796 15.2629 16.0057 15.1322 16.0057 15.0002C16.0057 14.8682 15.9796 14.7375 15.9288 14.6156C15.8781 14.4937 15.8037 14.3831 15.7099 14.2902L9.40994 8.00019Z" fill="black"/>
                    </svg>
                `;

                // Fungsi untuk menghapus gambar tertentu saat tombol hapus diklik
                cancelButton.onclick = function() {
                    imageWrapper.remove();
                    if (previewPostContainer.children.length === 0) {
                        previewPostContainer.classList.add('hidden'); // Sembunyikan kontainer jika semua gambar dihapus
                    }
                };

                // Menambahkan gambar dan tombol hapus ke dalam kontainer gambar
                imageWrapper.appendChild(img);
                imageWrapper.appendChild(cancelButton);
                previewPostContainer.appendChild(imageWrapper);
            };

            reader.readAsDataURL(file);
        }
      }

    }

    // function cancelPostImage() {
    //     const filePostInput = document.getElementById('post_input_image');
    //     const previewPostContainer = document.getElementById('preview_post_image');
    //     const previewPostImage = document.getElementById('post_image');
    //     const cancelPostButton = document.getElementById('remove_post_image');

    //     filePostInput.value = ''; // Reset file input
    //     previewPostImage.src = ''; // Clear image source
    //     previewPostImage.classList.add('hidden'); // Hide the image
    //     cancelPostButton.classList.add('hidden'); // Hide the cancel button
    //     previewPostContainer.classList.add('hidden');
    // }
</script>
