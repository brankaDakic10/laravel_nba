<div class="blog-masthead header-nba">
      <div class="container">
        <nav class="nav blog-nav">
          <a class="nav-link active" href="#">Home</a>
          <a class="nav-link" href="#">New features</a>
          <a class="nav-link" href="#">Press</a>
          <a class="nav-link" href="#">New hires</a>
          <a class="nav-link" href="#">About</a>
        </nav>
      </div>
    </div>

    <div class="blog-header">
      <div class="container">
        <h1 class="blog-title">NBA</h1> 
 @if(Auth::check())
        <div>{{Auth()->user()->name}}</div>
        <a href="/logout">Logout</a>
        @else
        <a href="/login">Login</a>
        <a href="/register">Register</a>
@endif

        <p class="lead blog-description">An example template </p>
      </div>
    </div>