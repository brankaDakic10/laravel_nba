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
<hr>

<form action="{{route('comments-team',['team_id'=>$team->id])}}" method="POST">

{{csrf_field()}}
 
 <div class="form-group">
 <label for="content">Molimo unesite komentar:</label>
 
 <textarea class="form-control" id="content"  name="content" ></textarea>
 @include('partials.error-message',['fieldTitle'=>'content'])
 </div>
 
 <div class="form-group">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>


</form> 

<!-- // show comments -->
@if(count($team->comments))
<hr>
<h4>Comments</h4>
<ul class="list-group">
@foreach($team->comments as $comment)
<li><p>{{$comment->content}} </p></li>


@endforeach
</ul>
@endif



</div>
@endsection


