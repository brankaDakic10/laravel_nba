<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use App\User;
use App\Comment;


class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('comment-words')->only('store');
    }



    // save comment
    public function store(Request $request,$team_id){
        $team=Team::find($team_id);
   
        $this->validate(request(),[
            'content' =>'required|min:10'
        ]);
          
     ;
       
       
        Comment::create([
            'content' => $request->get('content'),
            'team_id' => $team->id,
            'user_id' => auth()->user()->id,
        ]);

         
        return redirect()->back();
    }
}
