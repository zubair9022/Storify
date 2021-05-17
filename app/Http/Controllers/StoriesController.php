<?php

namespace App\Http\Controllers;
use App\Story;
use Illuminate\Http\Request;

class StoriesController extends Controller
{
    public function index(){
        $stories=Story::where('user_id',auth()->user()->id)
        ->orderBy('id','DESC')
        ->paginate(3);
        return view('stories.index',[
            'stories' => $stories,
        ]);
    }

    public function show(){
        
    }
}
