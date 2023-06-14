            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Dashboard
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                Register
                            </a>
                        @endif
                    @endauth
                </div>
            @endif

        i ended today with a problem of linking the create submit button to be able to make a submittion. in the page for creating a post, there are a few problems with the links that more to other pages like that of the edit page and the publish button. I have already created the route and the directory to the controler but if you get confused look at the controller and do your changes. I think that you will easily make the changes when you take another look at the video fron 62 to be abel to get how he made the //

        onclick="window.location.href = 'edit/{{ $post->id }}/post'"

        <div class="mt-2 bg-white">
                                <input id="body" name="body" value="{{ old('body') }}"
                                    class="block bg-white outline-none w-full rounded-md border-0 py-1.5 px-1 text-black shadow-sm ring-1 ring-inset ring-white placeholder:text-black focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                            </div>

                             <div class="mt-2 ">
                                <div class="block bg-white rounded-md border border-gray-300">
                                    <div id="quill-body" class="p-1">
                                        <div id="editor" class="h-48"></div>
                                    </div>
                                </div>
                                <textarea id="body" name="body" rows="3" class="">{{ old('body') }}</textarea>
                            </div>

       