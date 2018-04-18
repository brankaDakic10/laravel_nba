<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

    protected $fillable = [
        'content', 'team_id', 'user_id'
    ];
    public function team()
    {
        $this->belognsTo('App\Team');
    }

    public function user()
    {
        $this->belognsTo('App\User');
    }


}
