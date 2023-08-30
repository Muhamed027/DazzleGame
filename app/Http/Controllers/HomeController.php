<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function  index(){
        return view('games.home');
    }
    public function show($slug){
        return view('games.show',[
            'slug'=>$slug
        ]);
    }
}
