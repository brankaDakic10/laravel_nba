<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function players(){

        return $this->hasMany('App\Player');
    }
   
    
    public function comments(){

        return $this->hasMany('App\Comment');
    }


}
