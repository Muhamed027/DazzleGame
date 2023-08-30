<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class SearchDropdown extends Component
{
    public $search = "";
    public $searchResult = [];


    public function render()
    {
        $this->searchResult = Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "search \"{$this->search}\";
                fields name, cover.url, slug;
                limit 16;
            "
            )->post('https://api.igdb.com/v4/games')
            ->json();
        return view('livewire.search-dropdown');
    }
}
