<x-app-layout>
    <x-form.layout>
        <x-button url="/">
            Back Home
        </x-button>
        
        <form action="/admin/post/{{ $posts->id }}" method="post" class="mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-white">{{ $posts->title }}</h2>
                    <p class="mt-1 text-sm leading-6 text-white">Edit and Save Your Current Changes</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="title" class="block text-sm font-medium leading-6 text-white">Title</label>
                            <div class="mt-2">
                                <input id="title" name="title" value="{{ old('title', $posts->title) }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            @error('title')
                                <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                            @enderror
                        </div>

                        {{-- for body --}}

                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-white">Body</label>
                            <div class="mt-2">
                                <textarea id="body" name="body" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 px-1 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    {{ old('body', $posts->body) }}
                                </textarea>
                            </div>
                            @error('body')
                                <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                            @enderror
                        </div>

                        {{-- Images Side of the form  --}}

                        <div class="col-span-full">
                            <label for="thumbnail"
                                class="block text-sm font-medium leading-6 text-white">Thumbnail</label>
                            <div class="mt-2 border-indigo-500">
                                <input class="cursor-pointer" type="file" id="thumbnail" name="thumbnail"
                                    value="{{ old('thumbnail'. $posts->thumbnail) }}">
                            </div>

                            <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-64 lg:h-64"
                                src="{{ asset('storage/' . $posts->thumbnail) }}"alt="">

                            @error('thumbnail')
                                <p class="mt-3 text-sm leading-6 text-white">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- for excerpt --}}

                        <div class="col-span-full">
                            <label for="excerpt" class="block text-sm font-medium leading-6 text-white">Excerpt</label>
                            <div class="mt-2">
                                <textarea id="excerpt" name="excerpt" rows="1"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    {{ old('excerpt', $posts->excerpt) }}
                                </textarea>
                            </div>
                            @error('excerpt')
                                <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                            @enderror
                        </div>

                        {{-- for slug --}}

                        <div class="col-span-full">
                            <label for="slug" class="block text-sm font-medium leading-6 text-white">Slug</label>
                            <div class="mt-2">
                                <input id="slug" name="slug" value="{{ old('slug', $posts->slug) }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            @error('slug')
                                <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <x-form.button button1="Cancel" button2="Save"  url=/admin/post/>
        </form>
    </x-form.layout>

</x-app-layout>
