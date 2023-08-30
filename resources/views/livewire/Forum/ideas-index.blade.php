<div>
    <div class="flex items-center space-x-7 justify-between">
        <div class="w-1/4">
            <select name="category" id="category"
                class=" bg-gray-50 dark:bg-indigo-900  dark:border-blue-800 dark:hover:border-blue-500 border-blue-100 hover:border-blue-400 border-2 w-full rounded-xl px-4 py-2">
                <option value="category-one">category one </option>
                <option value="category-two">category two </option>
                <option value="category-three">category three </option>
                <option value="category-four">category four </option>
            </select>
        </div>
        <div class="w-1/4">
            <select name="category" id="category"
                class="bg-gray-50 dark:bg-indigo-900  dark:border-blue-800 dark:hover:border-blue-500 border-blue-100 hover:border-blue-400 border-2 w-full rounded-xl px-4 py-2">
                <option value="other_filters-one">filters one </option>
                <option value="other_filters-two">filters two </option>
                <option value="other_filters-three">filters three </option>
                <option value="other_filters-four">filters four </option>
    
            </select>
        </div>
        <div class="w-2/4 relative">
            <input type="text"
                class="w-full ml-4 bg-gray-50 dark:bg-indigo-900  dark:border-blue-800 dark:hover:border-blue-500 border-blue-100 border-2 hover:border-blue-400 rounded-xl px-4 pl-8 py-2 "
                placeholder="find an Idea ...." />
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="absolute top-0 flex items-center w-6 h-full ml-5">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
            </svg>
    
        </div>
    </div>
    <div class="ideas-container">
        @foreach (range(1, 12) as $thread)
            <livewire:forum.idea-index />
        @endforeach
    </div>

</div>
