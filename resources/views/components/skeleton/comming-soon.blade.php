<div class="most-enticipated-container space-y-10 mt-8">

    @if (count($commingSoon) === 0)
        <div class="text-gray-300 font-bold mx-4"> check it back</div>
    @else
        @foreach (range(1, 2) as $game)
            <div class=" animate-pulse game shadow-xl flex">
                <div class="bg-gray-600 w-28 h-28 rounded-md" href="#">

                </div>
                <div class=" ml-3 space-y-5 mt-4 rounded">
                    <div class="bg-gray-600 h-4 w-20 rounded"></div>
                    <div class="bg-gray-600 h-3 w-16 rounded"></div>
                </div>
            </div>
        @endforeach
    @endif
</div>
