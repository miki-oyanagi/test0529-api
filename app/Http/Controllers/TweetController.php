<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tweet;

class TweetController extends Controller
{
    public function index()
    {
        $items =Tweet::all();
        return response()->json([
            'message'=>'OK',
            'data'=>$items
        ],200);
    }

    public function store(Request $request)
    {
        $item = new Tweet;
        $item->words=$request->words;
        $item->save();
        return response()->json([
            'message'=>'Created successfully',
            'data'=>$item
        ],200);
    }
    public function destroy(Tweet $tweet)
    {
        $item =Tweet::where('id',$tweet->id)->delete();
        if($item){
            return response()->json([
                'message'=>$item,
            ],200);
        }else{
            return response()->json([
                'message'=>$item,
            ],404);
        }

    }

}
