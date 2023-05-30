{{-- <x-post-component.header>
    <x-form.login />

    @foreach ($posts as $post)
        <article class="max-w-xl text-white font-sans border-b-2 pb-3 border-red-700 mb-6">
            <h1 class="mb-3 font-bold text-lg">
                <a href="post/{{ $post->slug }}">
                    {{ $post->title }}
                </a>
            </h1>
           <p class="mb-3 text-green-400 text-sm"> Published by: <a href="author/{{ $post->author->username }}">{{ $post->author->name }}</a> <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
</x-post-component.header> --}}

{{-- this place starts the one with the original post that i will be using --}}
<!-- component -->

<x-post-component.header>
    <x-form.login />
    @foreach ($posts as $post)
        <x-post-section>
            <x-post-component.post :post="$post"/>
        </x-post-section>
    @endforeach

</x-post-component.header>
