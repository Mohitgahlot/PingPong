@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/shake.css')}}"/>
@endsection
@section('title')
    Shakes
@endsection
@section('content')
    <div class="shake-right">
        <input type="radio" class="radio1" value="1" id="shake1" name="shake">
        <label for="shake1">DBC</label>
        <input type="radio" class="radio1" value="2" id="shake2" name="shake">
        <label for="shake2">Vanilla</label>
        <input type="radio" class="radio1" value="3" id="shake3" name="shake">
        <label for="shake3">Butterscotch</label>
        <input type="radio" class="radio1" value="4" id="shake4" name="shake">
        <label for="shake4">Blackcurrant</label>
        <input type="radio" class="radio1" value="5" id="shake5" name="shake">
        <label for="shake5">Brainfreeze</label>
        <input type="radio" class="radio1" value="6" id="shake6" name="shake">
        <label for="shake6">Mint</label>
        <input type="radio" class="radio1" value="7" id="shake7" name="shake">
        <label for="shake7">Strawberry</label>
        <input type="radio" class="radio1" value="8" id="shake8" name="shake">
        <label for="shake8">Iced Tea</label>
        <input type="radio" class="radio1" value="9" id="shake9" name="shake">
        <label for="shake9">Cold Coffee</label>
    </div>
    <div class="main-wrapper shake-wrapper">
        <div class="quote-block">
            <h1 class="quote-heading">Drinks</h1>
            <h1 class="quote">You can't buy happiness but<br> you can buy shakes &amp; that's close enough.</h1>
        </div>

        <section class="shakes">
            <div class="heading-box">
                <h1>Death By Chocolate
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/dbc_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Death By Cocolate is one of the famous Shakes around the world.<br> It is one of the most preferred<br> shakes by the customers of<br> Ping Pong Cafe. </p>
               <br><br> <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="cheese">
            <div class="heading-box">
                <h1>Vanilla Shake
                    <div></div>
                </h1>
            </div>            <img src="{{URL::to('Images/vanilla_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="paneer">
            <div class="heading-box">
                <h1>Butterscotch
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Black Currant Shake
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Brainfreeze Shake
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/veggie_delight.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Mint Mojito
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/mint_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Strawberry Mojito
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/strawberry_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Iced Tea
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/icedtea_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
        <section class="shakes" id="chicken">
            <div class="heading-box">
                <h1>Cold Coffee
                    <div></div>
                </h1>
            </div>
            <img src="{{URL::to('Images/coldcoffee_shake.png')}}" class="item_img"/>
            <div class="item-description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium corporis cumque, et eum facere incidunt ipsam necessitatibus neque odit qui quia, quibusdam repellendus sunt temporibus ut veritatis vitae, voluptas voluptates?</p>
                <p><i class="fa fa-inr" aria-hidden="true"></i> 50</p>
            </div>
        </section>
    </div>
    @include('includes.footer')
@endsection
@section('script')
    <script src="{{URL::to('js/shake.js')}}"></script>
@endsection