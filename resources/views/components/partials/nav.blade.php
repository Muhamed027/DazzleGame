<div class="flex items-center flex-col lg:flex-row">
    <a href="/" class="game-syncer text-center  ml-2 items-center">
        <span class="text-red-500 uppercase font-bold">Game</span><span
            class="text-blue-500 uppercase font-bold">syncer</span>
    </a>
    <ul class="flex ml-8 space-x-8 mt-4 lg:mt-0">
        <li><a href="{{ route('games.home') }}" class=" hover:text-gray-600 transition-all duration-200 border-indigo-600 px-2 ">Home</a></li>
        <li><a href="{{ route('games.forum.index') }}" class=" hover:text-gray-600 transition-all duration-200 border-indigo-600 px-2 ">forum</a></li>
        <li><a href="{{ route('games.blog.index') }}" class=" hover:text-gray-600 transition-all duration-200 border-indigo-600 px-2 ">Blog</a></li>

    </ul>
</div>

<div class="flex items-center mt-8 lg:mt-0">
    <livewire:search-dropdown/>

    <div class="avatar">
        <a href="#"><img src="../images/laravel-explained.png" class="w-8 rounded-full" alt=""></a>
    </div>
</div>