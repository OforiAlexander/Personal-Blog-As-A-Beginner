<x-post-component.header>
    <x-form.login />
    @foreach ($posts as $post)
        <x-post-section :post="$post">
            <x-post-component.post :post="$post"/>
        </x-post-section>
    @endforeach

</x-post-component.header>
