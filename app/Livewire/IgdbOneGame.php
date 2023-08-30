<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Http;

class IgdbOneGame extends Component
{   
    protected $game=[];

    public function mount($slug){
        $this->game = Http::withHeaders(config('services.igdb.headers'))
        ->withBody(
            "fields *,name,cover.url,first_release_date,platforms.abbreviation,rating,slug,involved_companies.company.name,genres.name,aggregated_rating,summary,websites.*,videos.*,screenshots.*,similar_games.cover.url,similar_games.name,similar_games.rating,similar_games.platforms.abbreviation,similar_games.slug; where slug =\"{$slug}\";",
            "text/plain"
        )->post('https://api.igdb.com/v4/games')
        ->json();
    abort_if(!$this->game, 404);
    }
    public function placeholder(){
        return view('components.skeleton.igdb-one-game');
    }
    private function formatGameForView($game)
    {
        return collect($game)->merge([
            'cover_url' => Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']),
            'genres' => collect($game['genres'])->pluck("name")->implode(', '),
            'involved_company' => $game['involved_companies'][0]['company']['name'],
            'platforms' => collect($game['platforms'])->pluck('abbreviation')->implode(', '),
            'member_rating' => array_key_exists('rating', $game) ? round($game['rating']) . '%' : '0%',
            'critic_rating' => array_key_exists('aggregated_rating', $game) ? round($game['aggregated_rating']) . '%' : '0%',
            'trailer' => 'https://youtube.com/embed/' . $game['videos'][0]['video_id'],
            'screenshots' => collect($game['screenshots'])->map(function ($screenshot) {
                return [
                    'huge' => Str::replaceFirst('thumb', 'screenshot_huge', $screenshot['url']),
                    'big' => Str::replaceFirst('thumb', 'screenshot_big', $screenshot['url'])
                ];
            }),
            'similar_games' => collect($game['similar_games'])->map(function ($game) {
                return collect($game)->merge([
                    'cover_url' => array_key_exists('cover', $game) ? Str::replaceFirst('thumb', 'cover_big', $game['cover']['url']) : 'https://via.placeholder.com/264x352',
                    'rating' => isset($game['rating']) ? round($game['rating']) . '%' : '0%',
                    'platforms'=>array_key_exists('platforms',$game) ? collect($game['platforms'])->pluck('abbreviation')->implode(', '): null
                ]);
            })->take(6),
            'social'=>[
                'website'=>collect($game['websites'])->first(),
                'facebook'=>collect($game['websites'])->filter(function($website){
                   return  Str::contains($website['url'],'facebook');
                }),
                'twitter'=>collect($game['websites'])->filter(function($website){
                   return  Str::contains($website['url'],'twitter');
                }),
                'instagram'=>collect($game['websites'])->filter(function($website){
                   return  Str::contains($website['url'],'instagram');
                }),
            ]
        ])->toArray();
    }

    public function render()
    {
        return view('livewire.igdb-one-game',[
            'game'=>$this->formatGameForView($this->game[0]),
        ]);
    }
}
