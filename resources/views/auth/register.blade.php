@extends('layout/app')

@section('title', 'Register')

@section('maincontent')
    <div class="container bg-dark text-light rounded my-5 p-5">
        <div class="row justify-content-around">
                <h1 class="display-5 col-md-3">Register:</h1>
                <form action="/registration" method="post" class="col-md-6">
                    @csrf
                    <div class="form-group">
                        <label for="fullname">Full Name:</label>
                        <input class="form-control" type="text" id="fullname" name="fullname" placeholder="John Doe">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                   <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" id="password" name="password">
                   </div><div class="form-group">
                        <label for="password_confirmation">Password Confirmation:</label>
                        <input class="form-control" type="password" id="password_confirmation" name="password_confirmation">
                   </div>
                   <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>
    </div>
@endsection