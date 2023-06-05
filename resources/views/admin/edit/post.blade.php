<x-app-layout>
    <x-form.layout>
        <form action="/admin/post/{{ $posts->id }}" method="post" class="mx-auto" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div class="space-y-12">
                <div class="border-b border-white/10 pb-12">
                    <h2 class="text-base font-semibold leading-7 text-white">{{ $posts->title }}</h2>
                    <p class="mt-1 text-sm leading-6 text-white">Edit and Save Your Current Changes</p>

                    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">


                        <div class="col-span-full">
                            <label for="body" class="block text-sm font-medium leading-6 text-white">Body</label>
                            <div class="mt-2">
                                <textarea id="body" name="body" rows="3"
                                    class="block w-full rounded-md border-0 py-1.5 px-1 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    {{ old('body', $posts->body) }}
                                </textarea>
                            </div>
                            {{-- @error()
                                    <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                                @enderror --}}
                        </div>

                        {{-- Images Side of the form  --}}

                        <div class="col-span-full">
                            <div
                                class="mt-2 flex justify-center rounded-lg border border-dashed border-white/25 px-6 py-10">
                                <div class="text-center">
                                    <div class="mt-4 flex text-sm leading-6 text-white">
                                        <label for="image-upload"
                                            class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                            <span class="p-3">Upload a Image</span>
                                            <input id="image-upload" name="image-upload" type="file" class="sr-only"
                                                value="{{ old('thumbnail', $posts->thumbnail) }}">
                                        </label>
                                    </div>
                                    <p class="text-xs leading-5 text-white">PNG, JPG, GIF up to 10MB</p>
                                </div>
                                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-64 lg:h-64"
                                    src="{{ asset('storage/' . $posts->thumbnail) }}"alt="">
                            </div>
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
                            {{-- @error()
                                    <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                                @enderror --}}
                        </div>

                        {{-- for slug --}}

                        <div class="col-span-full">
                            <label for="slug" class="block text-sm font-medium leading-6 text-white">Slug</label>
                            <div class="mt-2">
                                <input id="slug" name="slug" value="{{ old('slug', $posts->slug) }}"
                                    class="block w-full rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>
                            {{-- @error()
                                    <p class="mt-3 text-sm leading-6 text-white">Write a few sentences about yourself.</p>
                                @enderror --}}
                        </div>
                    </div>
                </div>
            </div>
            <x-form.button button1="Cancel" button2="Save" url="/admin/post" />
        </form>
    </x-form.layout>

</x-app-layout>
