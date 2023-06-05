<section class=" text-white font-sans border-b-2 pb-3 border-red-700">
    <div class="container px-6 py-10 mx-auto">
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                src="{{ asset('storage/' . $post->thumbnail) }}"alt="">
                {{ $slot }}
        </div>
    </div>
</section>
