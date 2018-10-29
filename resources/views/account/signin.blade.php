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
            <div class="gap"></div>
            <div class="_gap">
                <form action="{{route('user.signin')}}" method="post">
                    <div class="form-basic">
                        <input type="text" name="email" placeholder="Username">
                    </div>
                    <div class="form-basic">
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <div>
                                <span class="btn-container">
                                    <button type="submit" class="btn-form">Log in</button>
                                </span>
                    </div>
                    <input type="hidden" name="_token" value="{{Session::token()}}"/>
                </form>
            </div>
        </div>
        <div class="form-box">
            <p class="small-copy">Don't have an account? <a href="{{route('user.signup')}}">Sign up</a></p>
        </div>
    </div>
</article>
@endsection