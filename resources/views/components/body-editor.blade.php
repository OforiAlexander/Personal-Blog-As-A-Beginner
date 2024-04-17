<div class="mt-2">
    <div class="block bg-white rounded-md border border-gray-300">
        <div id="editor" class="h-48">
            {{-- {{ old('body') }} --}}
            @yield('bodyEditor')
        </div>
    </div>
@yield('txarea')
</div>

