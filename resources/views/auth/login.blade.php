@extends('layouts.auth')

@section('content')
<div class="container login">
    <div class="row justify-content-center">
        <div class="col-lg-3">
            <div class="" style="text-align: center">
                <a href="/" class="logo text-uppercase">blog it</a>
            </div>
            <div class="login-form mt-5 mb-3">
                <form>
                    <div class="form-group mt-4">
                      <label for="exampleInputEmail1">Email Address</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary login-btn">Log in</button>
                </form>
                <div class="forget-password mb-5 text-right">
                    <a href="#">Forgot password ?</a>
                </div>
                <div class="switch text-center">
                    <p>Need an account ? &nbsp;<a href="{{ url('register') }}" class="text-uppercase">Register</a></p>
                </div>
        </div>
    </div>
</div>
@endsection