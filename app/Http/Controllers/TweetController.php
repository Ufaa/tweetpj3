<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet; //← 追記

class TweetController extends Controller
{
    //public function register(Request $request)
    //{
    //    Tweet::create([
    //        "content" => $request->content,
    //    ]);
    //    return response()->json(['message' => 'Successfully user create']);
    //}

    public function welcome(){
        //ページネーション追加（Simpleをつけるかつけないか）
        $tweets = Tweet::Paginate(10);
        //$todos = Todo::all();
        //dd($tweets);
        return view('welcome')->with('tweets', $tweets);
    }
    public function store(Request $request)
    {
        $tweet = new Tweet();
        $tweet->content = $request->content;
        $tweet->save();
        return redirect('welcome');
    }

    public function getTweets()
    { //← 追記
        $tweets = Tweet::Paginate(10);
        return $tweets;
    }

    public function addTweet(Request $request)
    {  //←追記
        $tweet = new Tweet;
        $tweet->title = $request->title;
        $tweet->save();
        $tweets = Tweet::all();
        return $tweets;
    }
}