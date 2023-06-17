<article class="w-full text-white font-sans m-auto ">
    <div class="container px-6 py-10 mx-auto">
        <div class="mt-8 lg:-mx-6 lg:flex lg:items-center">
            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-72 lg:h-96"
                src="{{ asset('storage/'. $post->thumbnail) }}"alt="">

            <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                <p class="text-sm text-blue-500 uppercase"><a
                        href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>

                <h1 class="block mt-4 text-2xl font-semibold text-gray-800 hover:text-white dark:text-white md:text-3xl">
                    {{ $post->title }}
                </h1>

                <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                    {!! $post->body !!}
                </p>
            </div>
        </div>
    </div>
</article> 

