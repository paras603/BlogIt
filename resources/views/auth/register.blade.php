@extends('layouts.auth')

@section('content')
<div class="container login">
    <div class="row justify-content-center">
        <div class="col-lg-4">
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
                        <label for="phonenumber">Phone Number</label>
                        <input type="number" class="form-control" placeholder="Phone Number">
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputEmail1">Name</label>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                          <input type="text" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="exampleInputPassword1">Password</label>
                        <div class="col">
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="col">
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Re-enter password">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary login-btn">Register</button>
                </form>
            </div>
            <div class="switch text-center">
                <p>Already a user ? &nbsp;<a href="{{ url('login') }}" class="text-uppercase">Log In</a></p>
            </div>
        </div>
    </div>
</div>
@endsection