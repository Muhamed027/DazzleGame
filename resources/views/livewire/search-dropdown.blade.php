<div class="search relative  ">
    <input wire:model.live="search" type="text"
        class="bg-gray-800 text-sm pl-8 rounded-full px-3 mx-3 focus:outline-none focus:shadow-outline py-1 "
        placeholder="search...">
    <div class="absolute top-1 text-gray-700 flex items-center ml-3  ">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
    </div>
    @if (strlen($search) >= 2)
        <div class="absolute z-50 bg-gray-800 text-xs rounded-xl w-64  mt-2">
            @if (count($searchResult) > 0)
                <ul class="rounded-lg">
                    @foreach ($searchResult as $result)
                        <li class="bg-gray-700 border-b">
                            @if (isset($result['cover']))
                                <a href="{{ route('game.show', $result['slug']) }}" class="flex rounded-xl">
                                    <img src="{{ Str::replaceFirst('thumb', 'cover_small', $result['cover']['url']) }}"
                                        alt="cover" class="w-10 h-10">
                                    <span class="ml-3 line-clamp-2">{{ $result['name'] }}</span>
                                </a>
                            @else
                                <a href="{{ route('game.show', $result['slug']) }}" class="flex rounded-xl">
                                    <img src="{{ asset('images/build-a-video-game-aggregrator.webp') }}" alt="cover"
                                        class="w-10 h-10">
                                    <span class="ml-3 line-clamp-2">{{ $result['name'] }}</span>
                                </a>
                            @endif

                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No result for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
