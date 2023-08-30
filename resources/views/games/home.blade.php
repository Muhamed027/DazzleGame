<x-layouts.app>
    <div class="container  max-w-4xl flex justify-between w-full">
        <div>
            <h2 class="tracking-wide uppercase text-gray-300 font-semibold"> popular games : </h2>

            <livewire:popular-games lazy />
        </div>
    </div>
    <div class="flex  flex-col md:flex-row  my-10">
        <div class=" recently-reviewed w-full lg:w-3/4 mr-32">
            <h2 class="tracking-wide uppercase text-gray-300 font-semibold">recently reviewed :</h2>
            <livewire:recently-reviewed lazy />
        </div>
        <div class=" most-anticipated space-y-14 w-full lg:w-1/4 mr-32">
            <div class="most-inticipated">
                <h2 class="tracking-wide uppercase text-gray-300 font-semibold mt-12 lg:mt-0">most inticipated :</h2>
                <livewire:most-anticipated lazy />
            </div>
            <div class="comming-soon">
                <h2 class="tracking-wide uppercase text-gray-300 font-semibold">Comming Soon :</h2>
                <livewire:comming-soon lazy />
            </div>

        </div>
</x-layouts.app>
