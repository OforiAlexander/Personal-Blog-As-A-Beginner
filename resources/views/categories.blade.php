{{-- <x-post-component.header>
    <x-search />
    <x-form.login />
    @foreach ($posts as $post)
        <x-post-section :post="$post">
            <x-post-component.post :post="$post" />
        </x-post-section>
    @endforeach
    <x-button url="/">
        Back Home
    </x-button>
    
</x-post-component.header> --}}

<x-post-component.header>
    <x-form.login />

    @foreach ($posts as $post)
        <x-post-component.single-post :post="$post"/>
    @endforeach

<x-button url="/">
    Back Home
</x-button>

{{ $posts->links() }}
</x-post-component.header>
