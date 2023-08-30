<div  class="most-enticipated-container space-y-10 mt-8">
    @foreach ($mostAnticipated as $game)
        <div class="game  shadow-xl flex bg-gray-900 rounded-xl">
            <a class=" w-1/3" href="#">
                @if (isset($game['cover']['url']))
                    <img src="{{ Str::replaceFirst('thumb', 'cover_small', $game['cover']['url']) }}"
                        alt="" class=" rounded-xl hover:opacity-75 shadow-2xl     transition ease-in-out">
                @endif
            </a>
            <div class=" ml-6 w-2/3">
                <a href="#" class="hover:text-gray-300"> {{ $game['name'] }}</a>
                <div class="text-gray-400 text-sm mt-1">{{ Carbon\Carbon::parse($game['first_release_date'])->format('M d, Y') }} </div>
            </div>
        </div>
    @endforeach
</div>
