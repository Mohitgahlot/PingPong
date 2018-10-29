@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/locate.css')}}"/>
@endsection
@section('title')
    Contact Us
@endsection
@section('content')
    <div class="locate-container main-wrapper">
        <div class="locate-wrapper">
            <div class="contact-box">
                <h3>Location</h3>
                <div class="over-flow">
                    <div id="map"></div>
                </div>
                <div class="inner-box">
                    <p><i class="fa fa-map-marker contact-icon" aria-hidden="true"></i>{{$name}}<br>
                        <span class="_text">{{$address}}</span></p>
                </div>
                <div class="inner-box">
                    <p><i class="fa fa-phone contact-icon" aria-hidden="true"></i>{{$number}}</p>
                </div>
                <div class="inner-box">
                    <p><i class="fa fa-envelope contact-icon" aria-hidden="true"></i>{{$id}}</p>
                </div>
            </div>
            <div class="contact-box things">
                <h3>Contact</h3>
                <div class="content-box">
                    <h2>Name : {{$n1}}</h2>
                    <p>Contact Number: {{$d1}}</p>
                    <p>Email Id: {{$e1}}</p>
                </div>
                <div class="content-box">
                    <h2>Name : {{$n2}}</h2>
                    <p>Contact Number: {{$d2}}</p>
                    <p>Email Id: {{$e2}}</p>
                </div>
                <div class="content-box">
                    <h2>Name : {{$n3}}</h2>
                    <p>Contact Number: {{$d3}}</p>
                    <p>Email Id: {{$e3}}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="http://maps.google.com/maps/api/js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxVSAMBDAVPPLA2RLMBPWuDH0kUcsifKM&callback=initMap" async defer></script>
    <script src="{{URL::to('js/gmaps.js')}}"></script>
    <script src="{{URL::to('js/gmap_script.js')}}"></script>
@endsection