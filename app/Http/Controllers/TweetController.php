<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet; //← 追記

class TweetController extends Controller
{
    public function index()
    {
        $items = Tweet::all();
        return response()->json([
            'data' => $items
        ], 200);
    }
    public function store(Request $request)
    {
        $item = Tweet::create($request->all());
        return response()->json([
            'data' => $item
        ], 201);
    }
    public function show(Tweet $tweet)
    {
        $item = Tweet::find($tweet);
        if ($item) {
            return response()->json([
                'data' => $item
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
    public function update(Request $request, Tweet $tweet)
    {
        $update = [
            'content' => $request->tweet,
        ];
        $item = Tweet::where('id', $tweet->id)->update($update);
        if ($item) {
            return response()->json([
                'message' => 'Updated successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
    public function destroy(Tweet $tweet)
    {
        $item = Tweet::where('id', $tweet->id)->delete();
        if ($item) {
            return response()->json([
                'message' => 'Deleted successfully',
            ], 200);
        } else {
            return response()->json([
                'message' => 'Not found',
            ], 404);
        }
    }
}

// {
//     //public function register(Request $request)
//     //{
//     //    Tweet::create([
//     //        "content" => $request->content,
//     //    ]);
//     //    return response()->json(['message' => 'Successfully user create']);
//     //}

//     public function welcome(){
//         //ページネーション追加（Simpleをつけるかつけないか）
//         $tweets = Tweet::Paginate(10);
//         //$todos = Todo::all();
//         //dd($tweets);
//         return view('welcome')->with('tweets', $tweets);
//     }
//     public function store(Request $request)
//     {
//         $tweet = new Tweet();
//         $tweet->content = $request->content;
//         $tweet->save();
//         return redirect('welcome');
//     }

//     public function getTweets()
//     { //← 追記
//         $tweets = Tweet::Paginate(10);
//         return $tweets;
//     }

//     public function addTweet(Request $request)
//     {  //←追記
//         $tweet = new Tweet;
//         $tweet->title = $request->title;
//         $tweet->save();
//         $tweets = Tweet::all();
//         return $tweets;
//     }
// }