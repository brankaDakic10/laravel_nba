<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Player;
class PlayersController extends Controller
{  
    // added
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show($id)
  {
   $player=Player::find($id);
   return view('players.players-show',compact('player'));
  }
}
