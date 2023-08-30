<div
    class="popular-games my-2 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 border-b border-gray-700 pb-16">
    @foreach ($popularGames as $game)
        <div class="game mt-8 ">
            <div class="relative inline-block">
                <a href="{{ route('game.show',$game['slug']) }}">
                    @if (isset($game['cover']['url']))
                        <img src="{{ $game['cover_url'] }}" alt=""
                            class=" rounded-xl hover:opacity-75 shadow-2xl   shadow-slate-700 transition ease-in-out">
                    @endif
                </a>
                @if (isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-indigo-500 border-md rounded-full "
                        style="right:-20px;bottom:-20px">
                        <div class="shut font-semibold text-xs flex  justify-center items-center h-full">
                            {{ $game['rating'] }}
                        </div>
                    </div>
                @endif
            </div>
            <a href="{{ route('game.show', $game['slug']) }}"
                class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                {{ $game['name'] }}
            </a>
            <div class="text-gray-500 mt-1 ">
                {{ $game['platforms'] }}
            </div>
        </div>
    @endforeach
</div>
