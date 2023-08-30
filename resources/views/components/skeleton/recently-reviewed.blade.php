<div class="recently-reviewed-container space-y-12 mt-8">
    @foreach (range(1,6) as $game)
            
    <div class="animate-pulse game bg-gray-800 shadow-lg flex rounded-lg px-6 py-3 lg:py-6">
        <div class="relative ">
            <div class=" h-32 w-32 lg:h-44 lg:w-44 bg-gray-600 rounded "></div>
        </div>
        <div class="ml-12">
            <div href="#" class="block rounded bg-gray-600 h-4 w-24 lg:w-64 ">    
            </div>
            <div class=" mt-5 space-y-3 lg:space-y-5 ">
                <div class="rounded bg-gray-600 h-6 w-32 lg:w-96"></div>
                <div class="rounded bg-gray-600 h-6 w-32 lg:w-96"></div>
                <div class="rounded bg-gray-600 h-6 w-32 lg:w-96"></div>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    @endforeach
</div>