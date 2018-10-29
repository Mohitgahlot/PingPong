@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/sandwich.css')}}"/>
@endsection
@section('title')
    Sandwiches
@endsection
@section('content')

    <div class="sandwich-right">
        <input type="radio" class="radio" value="1" id="sand1" name="sand">
        <label for="sand1">Veggie</label>
        <input type="radio" class="radio" value="2" id="sand2" name="sand">
        <label for="sand2">Paneer</label>
        <input type="radio" class="radio" value="3" id="sand3" name="sand">
        <label for="sand3">Cheese & Corn</label>
        <input type="radio" class="radio" value="4" id="sand4" name="sand">
        <label for="sand4">Chicken</label>
    </div>
    <div class="main-wrapper sandwich-wrapper">
        <div class="quote-block">
            <h1 class="quote-heading">Sandwiches</h1>
            <h1 class="quote">You Can Make Any Meal Into Sandwich,<br> And Any Sandwich Into A Meal.</h1>
        </div>

        <section class="sandwich" id="veggie">
            <div class="heading-box">
                <h1>Veggie Delight
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="sandwich" id="cheese">
            <div class="heading-box">
                <h1>Tangy Paneer
                    <div></div>
                </h1>
            </div>            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="sandwich" id="paneer">
            <div class="heading-box">
                <h1>Cheese &amp; Corn Sandwich
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="sandwich" id="chicken">
            <div class="heading-box">
                <h1>Chicken Tikka
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
    </div>
    @include('includes.footer')
@endsection

@section('script')
    <script src="{{URL::to('js/sandwich.js')}}"></script>
@endsection