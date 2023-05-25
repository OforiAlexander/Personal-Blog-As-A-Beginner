<x-post-component.header>
    <x-form.login />

    @foreach ($posts as $post)
        <article class="max-w-xl text-white font-sans m-auto ">
            <h1>{!! $post !!}</h1>

        </article>
    @endforeach
</x-post-component.header>
