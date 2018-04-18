@extends('layouts.master')
@section ('title')
 
All teams
@endsection



@section ('content')
<div class="col-sm-8 blog-main">
<h1>Teams</h1>
         
<ul>
@foreach($teams as $team)

<li><h4><a href="{{route('team',['id'=>$team->id])}}">{{$team->name}}</a></h4></li>



@endforeach

</ul>
</div>
@endsection