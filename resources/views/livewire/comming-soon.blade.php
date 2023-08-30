<div class="most-enticipated-container space-y-10 mt-8">
    @if (count($commingSoon) === 0)
        <div class="text-gray-300 font-bold mx-4"> check it back</div>
    @else
        @foreach ($commingSoon as $game)
            <div class="game flex">
                <a href="#">
                    @if (isset($game['cover']['url']))
                        <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}" alt=""
                            class=" rounded-xl hover:opacity-75 w-48 transition ease-in-out">
                    @endif
                </a>
                <div class=" ml-6">
                    <a href="#" class="hover:text-gray-300">
                        @if (isset($game['name']))
                            {{ $game['name'] }}
                        @endif
                    </a>
                    <div class="text-gray-400 text-sm mt-1">sept 16 2023</div>
                </div>
            </div>
        @endforeach
    @endif
</div>
