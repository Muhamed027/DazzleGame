<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class RecentlyReviewed extends Component
{
    protected $recentlyReviewd=[];

    public function mount(){
        $before = Carbon::now()->subMonth(2)->timestamp;
        $current = Carbon::now()->timestamp;
        $recentlyReviewdUnformatted = Http::withHeaders(config('services.igdb.headers'))->withBody(
            "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug,summary;
                where platforms = (48,49,130,6,12)
                & (first_release_date >= {$before}
                & first_release_date < {$current}
                & total_rating_count > 5);
                sort total_rating_count desc;
                limit 6;",
            "text/plain"
        )->post('https://api.igdb.com/v4/games')
            ->json();
            $this->recentlyReviewd=$this->formatForView($recentlyReviewdUnformatted);
    }
    private function formatForView($games){
        return collect($games)->map(function($game){
            return collect($game)->merge([
                'cover_url'=>Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating'=>isset($game['rating'])? round($game['rating']).'%': null,
                'platforms'=>collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
    public function placeholder()
    {
        return view('components.skeleton.recently-reviewed');
    }
        public function render()
    {
        return view('livewire.recently-reviewed',[
            'recentlyReviewd'=>$this->recentlyReviewd
        ]);
    }
}
