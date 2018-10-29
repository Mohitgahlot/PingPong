@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/footer.css')}}">
@endsection
@section('title')
    Ping Pong
@endsection
@section('content')
    <div class="main-wrapper home-wrapper">
        <section class="section-front">
            {{--<video autoplay loop id="bg-video" poster="{{URL::to('video/Open-Fire/snapshots/Open-Fire.jpg')}}">--}}
                {{--<source src="{{URL::to('video/Open-Fire/MP4/Open-Fire.mp4')}}">--}}
                {{--<source src="{{URL::to('video/Open-Fire/MP4/Open-Fire.ogv')}}">--}}
                {{--<source src="{{URL::to('video/Open-Fire/MP4/Open-Fire.webm')}}">--}}
            {{--</video>--}}
            <div class="hero-container">
                <h1 class="hero-text hero-text-primary">Welcome To Cafe Ping Pong!</h1>
                <h2 class="hero-text hero-text-secondary">For The Love Of Shakes, Sandwiches And People!</h2>
            </div>
            <div class="scroll-arrow">
                <span>SCROLL DOWN</span>
            </div>
        </section>
        <section class="section-info">
            <div class="ss-primary">
                <div class="row">
                    <div class="ss-primary-text">
                        <div class="welcome-text-wrapper">
                            <h2 class="welcome-text">Welcome To Cafe Ping Pong!</h2>
                        </div>
                        <div class="welcome-para-wrapper">
                            <p class="welcome-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi odio odio, ullamcorper sed tristique et, viverra vitae tortor. Phasellus at lacus tristique, facilisis libero sed, consectetur erat. Proin eget mollis turpis. Mauris egestas congue auctor. Cras vehicula, velit id cursus condimentum, enim nisi molestie ipsum, a iaculis urna ligula ac metus. Pellentesque congue tempus enim vel vestibulum. Integer posuere sollicitudin efficitur. Quisque vitae diam non nibh condimentum tristique eu sit amet mauris. Curabitur ut sodales magna, at convallis urna. Aenean varius molestie felis, ac. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ss-secondary">
                <div class="button-wrapper">
                    <ul class="button-list">
                        <li><a href="{{route('about')}}" class="button">About Us</a></li>
                        <li><a href="{{route('menu')}}" class="button">Latest</a></li>
                        <li><a href="{{route('locateUs')}}" id="contactUs" class="button">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="section-menu">
            <div class="menu-wrapper-primary">
                <div class="menu-wrapper-secondary">
                    <h2>Products</h2>
                    <div class="primary-grid clearfix">
                        <div class="secondary-grid">
                            <figure class="menubox">
                                <div class="menubox-img menu_img_1"></div>
                                <figcaption class="menubox-content">
                                    <div>
                                        <h4 class="content-title">Shakes</h4>
                                        <p class="content-description">I love shakes, I will drink all of them!</p>
                                    </div>
                                    <a class="menubox-link" href="{{route('shakes')}}"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="secondary-grid">
                            <figure class="menubox">
                                <div class="menubox-img menu_img_2"></div>
                                <figcaption class="menubox-content">
                                    <div>
                                        <h4 class="content-title">Sandwiches</h4>
                                        <p class="content-description">I love sandwiches, I will eat all of them!</p>
                                    </div>
                                    <a class="menubox-link" href="{{route('sandwiches')}}"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="secondary-grid">
                            <figure class="menubox">
                                <div class="menubox-img menu_img_3"></div>
                                <figcaption class="menubox-content">
                                    <div>
                                        <h4 class="content-title">Pasta</h4>
                                        <p class="content-description">I love Pasta, I will eat all of it.</p>
                                    </div>
                                    <a class="menubox-link" href="{{route('/')}}"></a>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="secondary-grid">
                            <figure class="menubox">
                                <div class="menubox-img menu_img_4"></div>
                                <figcaption class="menubox-content">
                                    <div>
                                        <h4 class="content-title">Special</h4>
                                        <p class="content-description">I love specials, already hungry.</p>
                                    </div>
                                    <a class="menubox-link" href="{{route('/')}}"></a>
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials">

        </section>
        <section class="section-newsletter">
            <div class="newsletter-wrapper">
                <div class="news-box-1">
                    <h2>Cafe Ping Pong!</h2>
                </div>
                <div class="news-box-2">
                    <p>Get updates about new products, subscribe to our newsletter!</p>
                </div>
                <div class="newsletter-wrapper-2">
                    <form class="newsletter-form">
                        <input class="nl" type="text" placeholder="Your Name">
                        <input class="nl" type="email" placeholder="Your Email">
                        <a class="nl-btn">Subscribe</a>
                    </form>
                </div>
                <p class="subscribe-msg">dss</p>
            </div>
        </section>
    </div>
    @include('includes.footer')
@endsection
@section('script')
    <script src="{{URL::to('js/home.js')}}"></script>
    <script>
        var url="{{route('subscription')}}";
        var token="{{Session::token()}}";
    </script>
@endsection

