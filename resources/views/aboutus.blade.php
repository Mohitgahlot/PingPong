@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/about.css')}}"/>
@endsection
@section('title')
    About Us
@endsection
@section('content')
    <div class="about-container">
        <div class="about-back"></div>
        <div class="quote-block">
            <h1 class="quote-heading">About Us</h1>
        </div>
        <div class="about-info">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam natus nulla perferendis repudiandae temporibus? Ab dignissimos distinctio excepturi explicabo inventore maiores maxime nam officiis, tempore veniam. Et fugiat repellendus similique!
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, nam, non! Accusamus, amet aperiam deleniti dignissimos eaque expedita impedit laboriosam nam pariatur possimus quidem, quo rerum tenetur, velit veniam vero.
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto cupiditate distinctio doloribus dolorum ex iste libero, nesciunt odit officiis rem, unde vel veniam voluptatem voluptates voluptatum. Exercitationem fugit quia vitae.
        </div>
    </div>
    @include('includes.footer')
@endsection
@section('script')
    <script src="{{URL::to('js/shake.js')}}"></script>
@endsection