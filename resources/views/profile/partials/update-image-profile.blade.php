<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Profile Image') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("Update your image profile") }}
        </p>
    </header>

    <form method="POST" action="{{ route('profile.update-user-image') }}" class="mt-6 space-y-6" enctype="multipart/form-data">
        @csrf
        <div class="flex items-center gap-6">
            <img class="w-24 h-24 xl:w-32 xl:h-32 rounded-full object-cover" src="{{ Auth::user()->image ? asset('storage/' . Auth::user()->image) : asset('storage/images/gambar-foto-profil-7.jpg') }}" alt="">
            <div class="flex flex-col items-start">
                <label for="user_image" class="block text-sm md:text-base hover:cursor-pointer bg-gray-600 hover:bg-gray-700 text-white px-3 py-1 sm:py-2 sm:px-4 rounded-lg font-medium dark:text-gray-200">Choose Image</label>
                {{-- input user image --}}
                <input type="file" id="user_image" name="image" class="hidden" onchange="previewImage(event)">
                @error('image')
                    <p class="text-red-500 mt-1">{{ $message }}</p>
                @enderror

                {{-- preview user image --}}
                <div id="preview_user_image" class="mt-4 w-28 h-28 xl:w-32 xl:h-32 hidden relative">
                    <img id="preview_image" class="w-full h-full hidden object-cover rounded-lg" alt="Preview">
                    <button type="button" id="remove_user_image" onclick="cancelImage()" class="absolute hidden top-1 right-1">
                        <svg class="w-6 h-6 sm:w-5 sm:h-5 p-1 bg-white rounded-full" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="fill-black" d="M9.40994 8.00019L15.7099 1.71019C15.8982 1.52188 16.004 1.26649 16.004 1.00019C16.004 0.733884 15.8982 0.478489 15.7099 0.290185C15.5216 0.101882 15.2662 -0.00390625 14.9999 -0.00390625C14.7336 -0.00390625 14.4782 0.101882 14.2899 0.290185L7.99994 6.59019L1.70994 0.290185C1.52164 0.101882 1.26624 -0.00390601 0.999939 -0.00390601C0.733637 -0.00390601 0.478243 0.101882 0.289939 0.290185C0.101635 0.478489 -0.00415253 0.733884 -0.00415254 1.00019C-0.00415254 1.26649 0.101635 1.52188 0.289939 1.71019L6.58994 8.00019L0.289939 14.2902C0.196211 14.3831 0.121816 14.4937 0.0710478 14.6156C0.0202791 14.7375 -0.00585938 14.8682 -0.00585938 15.0002C-0.00585938 15.1322 0.0202791 15.2629 0.0710478 15.3848C0.121816 15.5066 0.196211 15.6172 0.289939 15.7102C0.382902 15.8039 0.493503 15.8783 0.615362 15.9291C0.737221 15.9798 0.867927 16.006 0.999939 16.006C1.13195 16.006 1.26266 15.9798 1.38452 15.9291C1.50638 15.8783 1.61698 15.8039 1.70994 15.7102L7.99994 9.41018L14.2899 15.7102C14.3829 15.8039 14.4935 15.8783 14.6154 15.9291C14.7372 15.9798 14.8679 16.006 14.9999 16.006C15.132 16.006 15.2627 15.9798 15.3845 15.9291C15.5064 15.8783 15.617 15.8039 15.7099 15.7102C15.8037 15.6172 15.8781 15.5066 15.9288 15.3848C15.9796 15.2629 16.0057 15.1322 16.0057 15.0002C16.0057 14.8682 15.9796 14.7375 15.9288 14.6156C15.8781 14.4937 15.8037 14.3831 15.7099 14.2902L9.40994 8.00019Z" fill="black"/>
                        </svg>
                    </button>

                </div>
            </div>
        </div>
        <x-primary-button>{{ __('Save') }}</x-primary-button>
    </form>
</section>
<script>
    function previewImage(event) {
        const previewContainer = document.getElementById('preview_user_image');
        const previewImage = document.getElementById('preview_image');
        const cancelButton = document.getElementById('remove_user_image');
        const file = event.target.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImage.src = e.target.result;
                previewImage.classList.remove('hidden');
                cancelButton.classList.remove('hidden');
                previewContainer.classList.remove('hidden');
            }
            reader.readAsDataURL(file);
        }
    }

    function cancelImage() {
        const fileInput = document.getElementById('user_image');
        const previewContainer = document.getElementById('preview_user_image');
        const previewImage = document.getElementById('preview_image');
        const cancelButton = document.getElementById('remove_user_image');

        fileInput.value = ''; // Reset file input
        previewImage.src = ''; // Clear image source
        previewImage.classList.add('hidden'); // Hide the image
        cancelButton.classList.add('hidden'); // Hide the cancel button
        previewContainer.classList.add('hidden');
    }
</script>
