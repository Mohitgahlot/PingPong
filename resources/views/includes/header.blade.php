<nav class="clearfix">
    <i class="ion-ios-close-empty nav-close" aria-hidden="true"></i>
    <h2 class="nav-logo">Cafe Ping Pong</h2>
    <ul class="main-nav">
        <a href="{{route('/')}}"><li><i class="fa fa-glass small-icon" aria-hidden="true"></i>Home</li></a>
        <a href="#" id="pop-overlay"><li><i class="fa fa-product-hunt small-icon" aria-hidden="true"></i>Products</li></a>
        <a href="{{route('about')}}"><li><i class="fa fa-info-circle small-icon" aria-hidden="true"></i>About Us</li></a>
        <a href="{{route('reviews')}}"><li><i class="fa fa-star small-icon" aria-hidden="true"></i>Review</li></a>
        <a href="{{route('locateUs')}}"><li><i class="fa fa-map-marker small-icon" aria-hidden="true"></i>Contact Us</li></a>
        <a href="{{route('menu')}}"><li><i class="fa fa-newspaper-o small-icon" aria-hidden="true"></i>News</li></a>
        @if(Auth::user())
            <a href="{{route('logout')}}"><li><i class="fa fa fa-hand-o-left small-icon" aria-hidden="true"></i>Logout</li></a>
        @else
            <a href="{{route('user.signup')}}"><li><i class="fa fa fa-hand-o-right small-icon" aria-hidden="true"></i>Sign In</li></a>
        @endif
    </ul>
</nav>

