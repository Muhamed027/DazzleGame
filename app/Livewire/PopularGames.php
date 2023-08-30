<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class PopularGames extends Component
{
    protected $popularGames = [];


    public function mount()
    {
        $before = Carbon::now()->subMonth(2)->timestamp;
        $after = Carbon::now()->addMonth(2)->timestamp;

        $popularGamesUnformatted = Http::withHeaders(config('services.igdb.headers'))
            ->withBody(
                "fields name, cover.url, first_release_date, total_rating_count, platforms.abbreviation, rating, slug,summary;
                where platforms = (48,49,130,6,12,13,14)
                & (first_release_date >= {$before}
                & first_release_date < {$after}
                & total_rating_count > 5);
                sort total_rating_count desc;
                limit 12;",
                "text/plain"
            )->post('https://api.igdb.com/v4/games')
            ->json();
        $this->popularGames = $this->formatForView($popularGamesUnformatted);
    }
    public function placeholder()
    {
        return view('components.skeleton.popular-games');
    }
    private function formatForView($games)
    {
        return collect($games)->map(function ($game) {
            return collect($game)->merge([
                'cover_url' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
                'rating' => isset($game['rating']) ? round($game['rating']) . '%' : null,
                'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', ')
            ]);
        })->toArray();
    }
    public function render()
    {
        return view('livewire.popular-games', [
            'popularGames' => $this->popularGames
        ]);
    }
}
