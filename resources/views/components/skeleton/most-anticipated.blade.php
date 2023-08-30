<div class="most-enticipated-container space-y-10 mt-8">
    @foreach (range(1, 6) as $game)
        <div class="animate-pulse game shadow-xl
    flex">
            <div class="bg-gray-600 w-28 h-28 rounded-md">
            </div>
            <div class=" ml-3 space-y-5 mt-4 rounded">
                <div class="bg-gray-600 h-4 w-20 rounded"></div>
                <div class="bg-gray-600 h-3 w-16 rounded"></div>
            </div>
        </div>
    @endforeach
</div>
