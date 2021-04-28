<div x-data="{ open: false }" @flash-message.window="open = true; setTimeout(() => {open = false}, 7000);">
    <div x-show="open" x-cloak class="px-1 py-2 {{ $type ? $designByType[$type] : '' }} rounded">
        {{ $message }}
    </div>
</div>
{{-- <div>
    @if (session()->has('error'))
        <div class="px-1 py-2 text-red-700 bg-red-200 border border-red-700 rounded">
            {{ session('error')}}
        </div>
    @elseif (session()->has('success'))

    @endif
</div> --}}
