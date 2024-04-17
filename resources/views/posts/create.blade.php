<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Publish New Post') }}
        </h2>
    </x-slot>
    <x-form.layout>

        <x-button url="/">
            Back Home
        </x-button>

        <x-button url="post">
            Edit Post
        </x-button>

        {{-- create the form for the post --}}
        <form action="{{ route('posts.store') }}" method="post" class="mx-auto" enctype="multipart/form-data"
            spellcheck="false">
            @csrf

            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
                            <div class="mt-2">
                                <textarea id="title" name="title" rows="3" required
                                    class="block w-full rounded-md border-0 py-1.5 px-1 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                   {{ old('title') }}
                                </textarea>
                            </div>
                            @error('title')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-white">Body</label>

                            <div class="mt-2">
                                <div class="block bg-white rounded-md border border-gray-300">
                                    <div id="editor" class="h-48">
                                        {{ old('body') }}
                                    </div>
                                </div>
                                <textarea id="body" name="body" style="display: none;">
                                    {{ old('body') }}
                                </textarea>
                            </div>
                            @error('body')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- for excerpt  --}}

                        <div class="col-span-full">
                            <label for="excerpt" class="block text-sm font-medium leading-6 text-white">Excerpt</label>
                            <div class="mt-2">
                                <textarea id="excerpt" name="excerpt" rows="1" required
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    {{ old('excerpt') }}
                             </textarea>
                            </div>
                            @error('excerpt')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- for image --}}
                        <div class="col-span-full">
                            <label for="thumbnail"
                                class="block text-sm font-medium leading-6 text-white">Thumbnail</label>
                            <div class="mt-2 border-indigo-500">
                                <input class="cursor-pointer" type="file" id="thumbnail" name="thumbnail" required>
                            </div>
                            @error('thumbnail')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- for slug  --}}

                        <div class="col-span-full">
                            <label for="slug" class="block text-sm font-medium leading-6 text-white">Slug</label>
                            <div class="mt-2">
                                <input id="slug" name="slug" required value="{{ old('body') }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            @error('slug')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- for category --}}
                        <div class="col-span-full">
                            <label for="category_id"
                                class="block text-sm font-medium leading-6 text-white">Category</label>
                            <div class="mt-2">
                                <select name="category_id" id="category_id" required
                                    class="w-150px inline-flex px-5 py-2 bg-gray-800 dark:bg-gray-200 border outline-none border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    @foreach (\App\Models\Category::all() as $category)
                                        <option value="{{ $category->id }}" class="ml-2 ">
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            @error('category_id')
                                <p class="mt-3 text-sm leading-6 text-red-500">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <x-primary-button onclick="savePost()">
                Publish
            </x-primary-button>
        </form>
    </x-form.layout>
</x-app-layout>

<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    function savePost() {
        document.getElementById('body').value = quill.root.innerHTML;
    }
</script>
