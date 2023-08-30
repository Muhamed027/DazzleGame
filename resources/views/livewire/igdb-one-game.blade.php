<div class="container">
    <div class="game-details border-b  border-gray-700 pb-12 flex flex-col lg:flex-row">
        <div class="flex-none  none ml-3 rounded-xl">
            <img src="{{ $game['cover_url'] }}" alt="" class=" shadow-2xl  shadow-indigo-400 w-48 rounded h-48 ">
        </div>
        <div class=" mx-3 lg:ml-12">
            <h2 class="text-4xl font-semibold">{{ $game['name'] }}</h2>
            <div class="text-gray-400">
                <span>
                    {{ $game['genres'] }}
                </span>
                &middot;
                <span>
                    {{ $game['involved_company'] }}
                </span>
                &middot;
                <span>
                    @if (isset($game['platforms']))
                        {{ $game['platforms'] }}
                    @endif
                </span>
            </div>
            <div class="flex mt-8 flex-wrap items-center">
                <div class="flex space-x-4 items-center">
                    <div class="w-16 mt-4 h-16 bg-indigo-500 rounded-full">
                        <div class="font-semibold text-xs h-full flex justify-center items-center">
                            {{ $game['member_rating'] }}
                        </div>
                    </div>
                    <div class="mt-4 text-xs">Member <br>Soccer</div>
                </div>
                <div class="flex space-x-4 ml-12 items-center">
                    <div class="w-16 mt-4 h-16 bg-indigo-500 rounded-full">
                        <div class="font-semibold text-xs h-full flex justify-center items-center">
                            {{ $game['critic_rating'] }}
                        </div>
                    </div>
                    <div class="mt-4 text-xs">Critic <br>Soccer</div>
                </div>
                <div class="space-x-4 flex ml-12 mt-8 lg:mt-8 items-center">
                    @if ($game['social']['website'])
                        <div class="w-8 h-8 bg-gray-800 rounded-full flex justify-center items-center">
                            <a href="{{ $game['social']['website']['url'] }}" class="hover:text-gray-400"><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                                </svg>
                            </a>
                        </div>
                    @endif


                </div>


            </div>
            <div class="lg:mt-12 lg:mr-64">
                <p>
                    {{ $game['summary'] }}
                </p>
            </div>
            <div class="mt-12" x-data={isTrailerModalVisible:false}>
                <button @click="isTrailerModalVisible=true"
                    class="flex bg-blue-500 text-white font-semibold px-4 py-4 hover:text-gray-300 rounded ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                    <span class="px-3 ml-2">Play Trailer</span>
                </button>
                {{-- <a href="{{ $game['trailer'] }}" target="_blank"
                    class="flex bg-blue-500 w-44 text-white font-semibold px-4 py-4 hover:text-gray-300 rounded ease-in-out duration-150">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.25 5.653c0-.856.917-1.398 1.667-.986l11.54 6.348a1.125 1.125 0 010 1.971l-11.54 6.347a1.125 1.125 0 01-1.667-.985V5.653z" />
                    </svg>
                    <span class="px-3 ml-2">Play Trailer</span>
                </a> --}}
                <template x-if="isTrailerModalVisible">
                    <div style="background-color: rgba(0, 0, 0, .5);"
                        class="z-50 fixed top-0 left-0 w-full h-full flex  items-center shadow-lg overflow-y-auto"
                        x-show="isTrailerModalVisible">
                        <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                            <div class="bg-gray-900 rounded">
                                <div class="flex justify-end pr-4 pt-2">
                                    <button @click="isTrailerModalVisible=false"
                                        @keydown.escape.window="isTrailerModalVisible = false"
                                        class="text-3xl leading-none hover:text-gray-300">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body px-8 py-8">
                                    <div class="responsive-container overflow-hidden relative"
                                        style="padding-top: 56.25%">
                                        <iframe width="560" height="315"
                                            class="responsive-iframe absolute top-0 left-0 w-full h-full"
                                            src="{{ $game['trailer'] }}" style="border:0;"
                                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>


            </div>
        </div>
    </div> <!-- end game details -->
    <div class=" images-container border-b border-gray-800 pb-12 mt-8">
        <h2 class="text-gray-400 upper-case tracking-wide font-semibold ">Images :</h2>
        <div x-data="{ isImageModalVisible: false, image: '' }" class=" grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 mt-8">
            @foreach ($game['screenshots'] as $screenshot)
                <a href="#"
                    @click.prevent="
                    isImageModalVisible = true
                    image='{{ $screenshot['big'] }}'
                ">
                    <img src="{{ $screenshot['huge'] }}" alt=""
                        class=" rounded-xl border-2 border-dashed border-sky-950 hover:opacity-75  transition ease-in-out">
                </a>
            @endforeach
            <template x-if="isImageModalVisible">
                <div style="background-color: rgba(0, 0, 0, .5);"
                    class="z-50 fixed top-0 left-0 w-full h-full flex items-center shadow-lg overflow-y-auto">
                    <div class="container mx-auto lg:px-32 rounded-lg overflow-y-auto">
                        <div class="bg-gray-900 rounded">
                            <div class="flex justify-end pr-4 pt-2">
                                <button class="text-3xl leading-none hover:text-gray-300"
                                    @click=" isImageModalVisible = false"
                                    @keydown.escape.window="isImageModalVisible = false">
                                    &times;
                                </button>
                            </div>
                            <div class="modal-body px-8 py-8">
                                <img :src="image" alt="screenshot">
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div><!-- end images container-->
    <div class="images-container pb-12 mt-8">
        <h2 class="text-gray-400 upper-case tracking-wide font-semibold ">Similar games :</h2>
        <div class="similar-games my-2 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12  pb-16">
            @foreach ($game['similar_games'] as $game)
                <div class="game mt-8 ">
                    <div class="relative inline-block">
                        <a href="{{ $game['slug'] }}">
                            <img src="{{ $game['cover_url'] }}" alt=""
                                class=" rounded-xl hover:opacity-75 w-48 transition ease-in-out">
                        </a>
                        <div class="absolute bottom-0 right-0 w-16 h-16 bg-indigo-500 rounded-full "
                            style="right:-20px;bottom:-20px">
                            <div class="shut font-semibold text-xs flex  justify-center items-center h-full">
                                {{ $game['rating'] }}
                            </div>
                        </div>
                    </div>
                    <a href="#" class="block text-base font-semibold leading-tight hover:text-gray-400 mt-8">
                        {{ $game['name'] }}
                    </a>
                    <div class="text-gray-500 mt-1 ">
                        {{ $game['platforms'] }}
                    </div>
                </div>
            @endforeach
        </div>

    </div>
</div>
