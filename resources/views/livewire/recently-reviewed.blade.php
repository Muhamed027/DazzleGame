<div  class="recently-reviewed-container space-y-12 mt-8">
    @foreach($recentlyReviewd as $game)
        <div class="game bg-gray-900 shadow-lg flex rounded-lg px-6 py-6">
            <div class="relative w-1/3 ">
                <a class="" href="#">
                    @if (isset($game['cover']['url']))
                        <img src="{{$game['cover_url'] }}" alt=""
                            class=" w-48 h-48 rounded-xl shadow-2xl  shadow-gray-800 hover:opacity-75 transition ease-in-out">
                    @endif

                </a>
                @if (isset($game['rating']))
                    <div class="absolute bottom-0 right-0 w-16 h-16 bg-indigo-500 rounded-full "
                        style="right:-20px;bottom:-20px">
                        <div class="shut font-semibold text-xs flex  justify-center items-center h-full">
                            {{ $game['rating']}}
                        </div>
                    </div>
                @endif
            </div>
            <div class="ml-12 w-2/3">
                <a href="#" class="block  text-lg font-semibold leading-tight hover:text-gray-400 ">
                    {{ $game['name'] }}
                </a>
                <a href="#" class="block hover:text-gray-400">
                   {{ $game['platforms'] }}
                </a>
                @if (isset($game['summary']))
                    <div class="mt-6 text-gray-400  line-clamp-4 overflow-hidden">
                        {{ $game['summary'] }}
                    </div>
                @endif
            </div>
        </div>       
    @endforeach
</div>
