<div>
    <div
class="idea-container relative mt-8 line-clamp-4 bg-gray-50 dark:bg-[#19304e] rounded-2xl shadow-gray-700 hover:shadow-xl transition ease-in-out duration-400 px-4 py-2 border border-dashed border-blue-500">
<div class="flex justify-center items-start ">
    <div class="w-1/6 space-y-4">
        <a href="" class="block">
            <img src="./../images/laravel-explained.png" class="w-16 h-16"
                alt="the avtar of the author of the thread">
        </a>


    </div>

    <div class=" flex flex-col w-full mx-3">
        <h2 class="flex flex-row text-xl items-center text-center font-bold justify-between">
            <a href="" class="hover:underline">

                this is the title of the this threads
            </a>
        </h2>
        <div class="">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquid eveniet incidunt pariatur id
            praesentium
            assumenda omnis optio officia non earum eius corrupti nulla, cupiditate quae, dicta dolores nemo
            necessitatibus? Natus iste minima at cum, ipsam laborum vel repellendus corrupti enim corporis
            sequi
            officia
            est neque laudantium illum voluptatem mollitia cumque repudiandae optio, atque impedit
            laboriosam,
            magnam
            commodi dicta. Voluptatum accusantium magni soluta dolore odio unde excepturi voluptates cum
            labore,
            molestias neque sit ratione veritatis sapiente, consequuntur repellat ipsa temporibus saepe
            delectus
            sed
            dicta ut? Consequuntur dolorem nemo itaque ratione cupiditate fugit! Dolores dignissimos cumque
            distinctio.
            Quis maiores beatae voluptatum facere.
        </div>
        <div class="bottom-options flex mt-6 items-center justify-between">
            <div class="flex items-center text-xs text-gray-400 font-semibold space-x-3">
                <div>by memad </div>
                <div>&bull;</div>
                <div>a week a go </div>
                <div>&bull;</div>
                <div> category 2 </div>
                <div>&bull;</div>
                <div class="text-gray-900 dark:text-white">3 Comments</div>
            </div>
            <div class="flex items-cente">
                <div
                    class="text-md border border-gray-300 shadow-xs uppercase w-40 h-7 font-bold rounded-full text-center dark:bg-indigo-950 bg-gray-100 ">
                    open
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div
class="flex relative items-center justify-between p-4 mt-4 boder border-dashed border-blue-500 rounded-md ">
<div class="flex items-center ">
    <div class="flex items-center mx-3">
        <button class="bg-blue-600 px-4 py-2 rounded-xl hover:bg-blue-700 flex">
            <span>set status</span>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
            </svg>
        </button>
    </div>
    <div class="flex relative items-center mx-3 ">
        <button
            class="relative dark:bg-[#19304e] rounded-full h-7 transition duration-150 ease-in py-3 px-4">
            <svg fill="currentColor" width="24" height="6" class="text-white">
                <path
                    d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z">
                </path>
            </svg>
        </button>
        <div class="absolute hidden w-44 top-2 left-14 border-dashed  border rounded-xl border-blue-900">
            <ul
                class="bg-blue-100 flex flex-col items-start text-gray-800 font-semibold  divide-gray-950 space-y-3  rounded-xl p-3">
                <button
                    class="hover:bg-blue-600 hover:text-white hover:rounded-xl duration-200 rounded-xl text-sm w-full">mark
                    a spam</button>
                <button
                    class="hover:bg-blue-600 hover:text-white hover:rounded-xl duration-200 rounded-xl text-sm w-full">
                    edit idea </button>
                <button
                    class="hover:bg-blue-600 hover:text-white hover:rounded-xl duration-200 rounded-xl text-sm w-full">
                    delete idea</button>
                <button
                    class="hover:bg-blue-600 hover:text-white hover:rounded-xl duration-200 rounded-xl text-sm w-full">not
                    spam</button>
            </ul>
        </div>
    </div>
</div>
<div class="text-center flex justify-center">
    <button>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
            stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
        </svg>
    </button>
</div>
</div>
{{-- writhing a reply  --}}
<button type="button"
class="flex w-full items-center p-8 dark:bg-[#19304e] mt-4 rounded-xl dark:shadow-xl hover:border-blue-300 hover:border-1  hover:border-solid duration-200 border border-dashed border-blue-400">
<img src="./../images/laravel-explained.png" alt="Your avatar" class="mr-4 h-14 w-14 rounded-xl">
<strong class="font-semibold">Write a reply.</strong>
</button>

<div class="comments-container relative mt-8 border-blue-500 rounded-md space-y-8">
<h1 class="font-semibold">replies : </h1>
<div class="ml-20 space-y-8">
    @foreach (range(2, 5) as $i)
        <div
            class="comment-container relative flex dark:bg-[#19304e] rounded-xl space-x-2 p-4 hover:shadow-sm hover:shadow-blue-900">
            <div class="w-[80px] ml-2 my-2  block border-r h-16 border-blue-500  border-dotted">
                <a href="" class="block ">
                    <img src="./../images/laravel-explained.png" class="w-16 h-16 rounded-lg"
                        alt="the avtar of the author of the thread">
                </a>
            </div>
            <div class="w-11/12">
                <div class="flex text-gray-400 my-2 justify-around">
                    <div>&bull;</div>
                    <div class="text-white font-semibold">by <span class="underline">memad</span> </div>
                    <div>&bull;</div>
                    <div>a week a go </div>
                    <div>&bull;</div>
                    <div> category 2 </div>
                    <div>&bull;</div>
                </div>
                <div class="line-clamp- mt-3 my-3">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Error
                    animi eius
                    amet! Possimus, esseonsectetur, adipisicing elit. Error animi eius
                    amet! Possimus, esse officia. Veniam fugiat tenetur in aspernatur vel libero placeat
                    nobis
                    iste,
                    minus accusamus error molestiae sint aliquam facere voluptas at amet repellat asperiores
                    natus
                    voluptate? Sint.
                </div>
            </div>
        </div>
    @endforeach
</div>
</div>
</div>