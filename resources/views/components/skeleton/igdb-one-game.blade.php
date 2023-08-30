<div>
    <div class="container mt-8 animate-pulse">
        <div class="game-details border-b border-gray-700 pb-12 flex flex-col lg:flex-row">
            <div class="flex-none  none ml-3 rounded-xl">
                <div class=" shadow-2xl bg-gray-700 w-48 rounded-xl h-48 ">
                </div>
            </div>
            <div class=" mx-3 lg:ml-12 space-y-4">
                <div class="bg-gray-700 h-8 w-56 rounded-lg "></div>
                <div class="bg-gray-800 h-6 w-104 rounded-lg">
                </div>
                <div class="flex mt-8 ">
                    <div class="flex space-x-4 ">
                        <div class="w-16 mt-4 h-16 bg-gray-700 rounded-full">
                            <div class="font-semibold text-xs h-16 w-16 flex ">
                            </div>
                        </div>
                        <div class="mt-4 space-y-6">
                            <div class="w-16 h-4 bg-gray-700 rounded-lg"></div>
                            <div class="w-16 h-4 bg-gray-700 rounded-lg"></div>
                        </div>
                       
                        <div class="w-16 mt-4 h-16 bg-gray-700 rounded-full">
                            <div class="h-16 w-16 flex ">
                            </div>
                        </div>
                        <div class="mt-4 space-y-6">
                            <div class="w-16 h-4 bg-gray-700 rounded-lg"></div>
                            <div class="w-16 h-4 bg-gray-700 rounded-lg"></div>
                        </div>
                        <div class="space-x-4 flex ml-12 mt-8 lg:mt-8 ">
                            <div class="w-8 h-8 bg-gray-800 rounded-full ">
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full ">
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full ">
                            </div>
                            <div class="w-8 h-8 bg-gray-800 rounded-full ">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="bg-gray-700 h-4 w-full rounded-md">
                    </div>
                    <div class="bg-gray-700 h-4 w-full rounded-md">
                    </div>
                    <div class="bg-gray-700 h-4 w-full rounded-md">
                    </div>
                    <div class="bg-gray-700 h-4 w-full rounded-md">
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end game details -->
    <div class="images-container border-b border-gray-800 pb-12 mt-8 animate-pulse">
        <h2 class="text-slate-500 upper-case tracking-wide font-semibold ">Images</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12 mt-8">
            @foreach (range(1, 6) as $game)
                <div class="bg-gray-700 w-48 h-64 rounded-lg"></div>
            @endforeach

        </div>
    </div><!-- end images container-->
    <div class="images-container pb-12 mt-8 animate-pulse">
        <h2 class="text-slate-500 upper-case tracking-wide font-semibold ">Similar games </h2>
        <div class="similar-games my-2 text-sm grid grid-cols-1 md:grid-cols-2 lg:grid-cols-6 gap-12  pb-16">
            @foreach (range(1, 6) as $game)
                <div class="bg-gray-700 rounded-lg mt-8 w-48 h-64">

                </div>
            @endforeach
        </div>

    </div>
    </div>
</div>
