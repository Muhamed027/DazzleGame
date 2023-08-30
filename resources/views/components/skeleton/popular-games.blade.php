<div
    class="popular-games my-2 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 border-b border-gray-700 pb-16">
    @foreach (range(1, 12) as $game)
        <div
            class="animate-pulse popular-games my-2 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 border-gray-700">
            <div class="game mt-8 ">
                <div class="relative inline-block">
                    <div class="bg-gray-700 rounded-md  h-64 w-44"></div>
                </div>
                <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-3">
                    <div class="bg-gray-600 rounded  w-44 h-6"></div>
                </a>
                <div class="text-gray-500 mt-2 ">
                    <div class="bg-gray-600 w-28 rounded  h-4"></div>
                </div>
            </div>
        </div>
    @endforeach

</div>
