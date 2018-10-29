<html>
<head>
    <title>@yield('title')</title>
    <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"/>
    <link rel="stylesheet" href="{{URL::to('font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Share+Tech+Mono" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,300i,400,400i,600" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('css/main.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{URL::to('css/footer.css')}}">
    <link rel="stylesheet" href="{{URL::to('css/animate.css')}}">
    @yield('link')
    <link rel="stylesheet" href="{{URL::to('css/query.css')}}">
</head>
<body>
@include('includes.nav-open')
@include('includes.header')
<div class="container1">
    @include('includes.product')
    @yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="{{URL::to('js/main.js')}}"></script>
@yield('script')
</body>
</html>