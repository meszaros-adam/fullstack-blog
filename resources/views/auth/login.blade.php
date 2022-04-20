@extends('layout/app')

@section('title', 'Login')

@section('maincontent')
    <div class="container bg-dark text-light my-5 rounded p-5">
        <div class="row justify-content-around">
                <h1 class="display-5 col-md-3">LOGIN:</h1>
                <form action="/login"  method="post" class="col-md-6">
                @csrf
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="email" id="email" name="email" placeholder="example@gmail.com">
                    </div>
                   <div class="form-group">
                        <label for="password">Password:</label>
                        <input class="form-control" type="password" id="password" name="password">
                   </div>
                   <button type="submit" class="btn btn-primary">Login</button>
                </form>
        </div>
        <div class="row row justify-content-center mt-5">
            <div>Login with social accounts: </div>
                    <ul class="footer_section_social_ul">
                        <li>
                            <a href="/auth/facebook"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li>
                            <a href="/auth/google"><i class="fab fa-google"></i></a>
                        </li>
                    </ul>
            </div>
        </div>
    </div>
@endsection