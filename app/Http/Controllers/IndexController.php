<?php

namespace App\Http\Controllers;
use App\Models\Tweet;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function a(){
        $tweets =Tweet::orderBy('created_at', 'DESC')->get();
        return view('tweet.index')
        ->with('tweets', $tweets);

    }
}
