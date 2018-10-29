@extends('layouts.master')

    @section('title')
        CafePingPong
    @endsection
    @section('link')
         <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Raleway:300,400,500,700" rel="stylesheet">
         <link rel="stylesheet" href="{{URL::to('css/form.css')}}" type="text/css">
    @endsection
    @section('content')
        <article class="wrapper main-wrapper">
            <div class="form-wrapper">
                <div class="form-box">
                    <h1 class="primary-heading">Cafe Ping Pong</h1>
                    <div class="_gap">
                        <form action="{{route('user.signup')}}" method="post">
                            <h2 class="secondary-heading">Fast Food Restraunt</h2>
                            <span class="btn-container">
                                        <a href="{{route('auth/facebook')}}" class="btn-form">Log in with Facebook</a>
                                    </span>
                            <div class="styling">
                                <div class="line-style"></div>
                                <div class="middle-style">OR</div>
                                <div class="line-style"></div>
                            </div>
                            <div class="form-basic">
                                <input type="text" name="email" placeholder="Email">
                            </div>
                            <div class="form-basic">
                                <input type="text" name="name" placeholder="Full Name">
                            </div>
                            <div class="form-basic">
                                <input type="password" name="password" placeholder="Password">
                            </div>
                            <div class="form-basic">
                                <input type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                            <div>
                                        <span class="btn-container">
                                            <button type="submit" class="btn-form">Sign up</button>
                                        </span>
                            </div>
                            <input type="hidden" name="_token" value="{{Session::token()}}"/>
                            <p class="small-copy">By signing up, you agree to our <a href="#">Terms</a> &amp; <a href="#">Privacy Policy</a></p>
                        </form>
                    </div>
                </div>
                <div class="form-box">
                    <p class="small-copy">Have an account? <a href="{{route('user.signin')}}">Log in</a></p>
                </div>
            </div>
        </article>
    @endsection