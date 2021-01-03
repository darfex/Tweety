<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }
    
    public function store()
    {
        $attributes = request()->validate([
            'body' => ['required','max:255'],
            'image' => 'file'
        ]);

        request('image') != null ? $image = request('image')->store('tweets') : $image = null;

        Tweet::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'image' => $image
        ]);

        return redirect()->route('home')
            ->with('message', 'Tweet Published');
    }

    public function delete(Tweet $tweet)
    {
        $tweet->delete();

        return redirect()->route('home')
            ->with('message', 'Tweet Deleted');
    }
}
