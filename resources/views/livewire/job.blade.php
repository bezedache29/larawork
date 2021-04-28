<div class="px-3 py-5 mb-3 duration-100 border border-gray-200 rounded shadow-sm hover:shadow-md">
    <div class="flex justify-between">
        <h2 class="text-xl font-bold text-green-800">{{ $job->title }}</h2>
        <button wire:click="addLike" class="w-5 h-5 text-gray-400 focus:outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" fill="{{ $job->isLiked() ? 'green' : 'none' }}" viewBox="0 0 24 24" stroke="green">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
            </svg>
        </button>
    </div>
    <p class="text-gray-800 text-md">{{ $job->description }}</p>
    <div class="flex items-center">
        <span class="w-2 h-2 mt-1 mr-1 bg-green-300 rounded-full"></span>
        <a href="">Consulter la mission</a>
    </div>
    <span class="text-sm text-gray-600">{{ number_format($job->price / 100, 2, ',', ' ') }} €</span>
</div>