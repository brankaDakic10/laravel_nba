@extends('layouts.master')

@section ('title')
 
Register
@endsection
@section('content')
<div class="col-sm-8 blog-main">
<h2>Please register</h2>

<form action="/register" method="POST">

{{csrf_field()}}
 <div class="form-group">
 <label for="name">Name</label>
 <input type="text" id="name" name="name" placeholder="Enter Your Name" class="form-control">
 @include('partials.error-message',['fieldTitle'=>'name'])
 </div>
 <div class="form-group">
 <label for="email">Email</label>
 <input type="text" id="email" name="email" placeholder="Enter Your Email" class="form-control">
 @include('partials.error-message',['fieldTitle'=>'email'])
 </div>
 <div class="form-group">
 <label for="password">Password</label>
 <input type="password" id="password" name="password" placeholder="Enter Your Password" class="form-control">
 @include('partials.error-message',['fieldTitle'=>'password'])
 </div>
 
 <div class="form-group">
 <label for="password_confirmation">Password_confirmation</label>
 <input type="password" id="password_confirmation" placeholder="Enter Your Password" name="password_confirmation" class="form-control">
 @include('partials.error-message',['fieldTitle'=>'password_confirmation'])
 </div>

 <div class="form-group">
 <button type="submit" class="btn btn-primary">Submit</button>
 </div>


</form>









</div>

@endsection