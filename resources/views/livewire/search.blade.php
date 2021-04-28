<div class="inline-block relative mr-5" x-data="{ open: true }">
    <input 
        wire:model="query"
        @click.away="{ open = false; @this.resetIndex() }"
        @click="{ open = true }"
        wire:keydown.arrow-down.prevent="incrementIndex"
        wire:keydown.arrow-up.prevent="decrementIndex"
        wire:keydown.backspace="resetIndex"
        wire:keydown.enter.prevent="showJob"
        type="text" 
        class="bg-gray-200 text-gray-700 border-2 focus:outline-none placeholder-gray-500 pl-3 pr-10 py-2 rounded-full w-56" 
        placeholder="Rechercher une mission..."
    >
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5 text-gray-500 absolute top-0 right-0 mr-3 mt-3">
        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
    </svg>

    @if (strlen($query) > 2)
        <div x-show="open" class="absolute border bg-gray-100 text-md w-56 mt-1 px-2 py-1 rounded">

            @if (count($jobs) > 0)
                
                @foreach ($jobs as $index => $job)
                    <p class="mt-1 {{ $index == $selectedIndex ? 'text-green-500' : '' }}">{{ $job->title }}</p>
                @endforeach
                
            @else

            <span class="text-red-500">0 résultats pour "{{ $query }}"</span>

            @endif

        </div>
    @endif
</div>