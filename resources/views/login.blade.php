@extends('layout.base')
@section('content')
<section class="main">
    <div class="LoginContainer">
        <h1>
            Sign In
        </h1>
        <form action="/login/auth" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
              <input type="text" name="username" class="form-control" id="loginemail" placeholder="Username" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" id="loginpass" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">SIGN IN</button>
            <p class="text-muted">
                <a href="#" class="text-reset">forgot password ?    </a>
            </p>
            <p class="text-muted">
                <a href="#" class="text-reset">register</a>
            </p>
            </div>
        </form>
    </div>
</section>

@endsection
