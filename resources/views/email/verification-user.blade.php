
<!-- mail send -->
<h3>Hello, {{$user->name}}</h3>
<p>Please, click on 
<a href="{{ route('verification', ['id' => $user->id ]) }}">Verification link </a>
to confirm your registration!
</p>


