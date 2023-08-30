<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('games.blog.index');
    }
    public function show(){
        return view('games.blog.show');
    }
}
