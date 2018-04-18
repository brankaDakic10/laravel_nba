@extends('layouts.master')

@section ('title')
 
{{$team->name}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
<h3>Team name: {{$team->name}}</h3>
<p>Email:{{$team->email}}</p>
<p>Adreass:{{$team->adress}}</p>
<p>City:{{$team->city}}</p>
<hr>
<h4>Players:</h4>
<ul>    
            
@foreach($team->players as $player)
<li><a href="{{route('player',['id'=>$player->id])}}">{{$player->first_name}} {{$player->last_name}}</a></li>
@endforeach
</ul>
</div>
@endsection