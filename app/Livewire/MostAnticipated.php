<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MostAnticipated extends Component
{
    public  $mostAnticipated=[];
    public function mount(){


        $before = Carbon::now()->subMonth(2)->timestamp;
        $addFourMonth = Carbon::now()->addMonth(4)->timestamp;

        
        $this->mostAnticipated = Http::withHeaders(config('services.igdb.headers'))->withBody(
            "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug,summary;
                where platforms = (48,49,130,6,12)
                & (first_release_date >= {$before}
                & first_release_date < {$addFourMonth}
                & total_rating_count > 5);
                sort total_rating_count desc;
                limit 6;",
            "text/plain"
        )->post('https://api.igdb.com/v4/games')
            ->json();
    }

    public function placeholder()
    {
        return view('components.skeleton.most-anticipated');
    }

    public function render()
    {
        return view('livewire.most-anticipated');
    }
}
