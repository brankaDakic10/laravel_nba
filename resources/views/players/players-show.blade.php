@extends('layouts.master')

@section ('title')
 
{{$player->name}}
@endsection


@section ('content')
<div class="col-sm-8 blog-main">
<h2>Player info</h2>
<hr>
<h3>Name: {{$player->first_name}} {{$player->last_name}}</h3>
<p>Email: {{$player->email}}</p>    
                                     
<p>Team: <a href="{{ route('team',['id'=> $player->team->id]) }}">{{$player->team->name}}</a></p>


</div>
@endsection