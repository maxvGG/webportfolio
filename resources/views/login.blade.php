@extends('base')
@section('main')
<div class="signup-form">
    <form action="{{url('post-login')}}" method="POST" id="logForm">
        {{ csrf_field() }}
        <h2>Login Account</h2>
        <p class="lead">Please fill in credentials to login.</p>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-paper-plane"></i></span>
                <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email Address" required="required">
            </div>
            @if ($errors->has('email'))
            <span class="error">{{ $errors->first('email') }}</span>
            @endif
        </div>
        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" name="password" id="inputPassword" placeholder="Password" required="required">
            </div>
            @if ($errors->has('password'))
            <span class="error">{{ $errors->first('password') }}</span>
            @endif
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
        </div>
        <p class="small text-center">By clicking the Sign Up button, you agree to our <br><a href="#">Terms &amp; Conditions</a>, and <a href="#">Privacy Policy</a>.</p>
    </form>
    <!-- <div class="text-center">You have no account? <a href="{{ url('registration') }}">Register here!</a></div> -->
</div>
@endsection