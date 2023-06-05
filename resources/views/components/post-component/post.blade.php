<div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
    <p class="text-sm text-blue-500 uppercase"><a
            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    <p class="text-sm mt-3 text-green-500 ">Published <time>{{ $post->created_at->diffForHumans() }}</time></p>
    <a href="post/{{ $post->slug }}"
        class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white md:text-3xl">
        {{ $post->title }}
    </a>

    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
        {{ $post->excerpt }}
    </p>

    <a href="post/{{ $post->slug }}" class="inline-block mt-2 text-blue-500 underline hover:text-blue-400">Read
        more</a>

    <div class="flex items-center mt-6">
        <img class="object-cover object-center w-10 h-10 rounded-full"
            src="https://images.unsplash.com/photo-1590283603385-17ffb3a7f29f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80"
            alt="">

        <div class="mx-4">
            <h1 class="text-sm text-gray-700 dark:text-gray-200">{{ $post->author->username }}</h1>
            {{-- <p class="text-sm text-gray-500 dark:text-gray-400">Lead Developer</p> --}}
        </div>
    </div>
</div>