@extends('layouts.master')
@section('link')
    <link rel="stylesheet" href="{{URL::to('css/review.css')}}">
@endsection
@section('title')
    Reviews
@endsection
@section('content')
    <div class="main-wrapper review-wrapper">
        <div class="review-heading">
            <h1>Reviews</h1>
        </div>
        <div class="review-content clearfix">
            @for($i=0;$i<count($prerate);$i++)
                <div class="review-box">
                    <div class="review-heading clearfix">
                        <h3 class="review-name">{{$prename[$i]}} <img id="zomato-logo" src="{{URL::to('Images/zomato.png')}}"></h3>
                        <ul class="review-star">
                            @for($j=0;$j<round($prerate[$i], 0, PHP_ROUND_HALF_DOWN);$j++)
                                <li><i class="fa fa-star rated" aria-hidden="true"></i></li>
                            @endfor
                                <?php $m=0; ?>
                            @if(is_float($prerate[$i]))
                                 <li><i class="fa fa-star-half-o rated" aria-hidden="true"></i></li>
                                    <?php $m=1; ?>
                            @endif
                            @for($k=$m;$k<5-$prerate[$i];$k++)
                                <li><i class="fa fa-star unrated" aria-hidden="true"></i></li>
                            @endfor
                        </ul>
                    </div>
                    <div class="review-description">
                        <p>
                            {{$precomment[$i]}}
                        </p>
                    </div>
                </div>
            @endfor
        </div>
        @if($rate==null)
        <div class="userrate-wrapper">
            <div class="userrate-heading">
                <h2>Rate Us</h2>
            </div>
            <div class="userrate-secondary clearfix">
              <div class="rate-textarea">
                  <textarea placeholder="Submit your reviews here"></textarea>
              </div>
              <div class="rate-btn">
                  <div class="userrate-primary">
                      <ul class="rate-star">
                          <li>
                              <input type="radio" value="1" class="radio" id="val1" name='val'/>
                              <label for="val1"><i class="fa fa-star" aria-hidden="true"></i></label>
                          </li>
                          <li>
                              <input type="radio" value="2" class="radio" id="val2" name='val'/>
                              <label for="val2"><i class="fa fa-star" aria-hidden="true"></i></label>
                          </li>
                          <li>
                              <input type="radio" value="3" class="radio" id="val3" name='val'/>
                              <label for="val3"><i class="fa fa-star" aria-hidden="true"></i></label>
                          </li>
                          <li>
                              <input type="radio" value="4" class="radio" id="val4" name='val'/>
                              <label for="val4"><i class="fa fa-star" aria-hidden="true"></i></label>
                          </li>
                          <li>
                              <input type="radio" value="5" class="radio" id="val5" name='val'/>
                              <label for="val5"><i class="fa fa-star" aria-hidden="true"></i></label>
                          </li>
                      </ul>
                  </div>
                <button id="submit-rate">
                    Submit
                </button>
              </div>
            </div>
        </div>
            @endif
    </div>
    <script>
        url="{{route('rate')}}";
        token="{{Session::token()}}";
    </script>
    @include('includes.footer')
@endsection

@section('script')
    <script src="{{URL::to('js/review.js')}}"></script>
@endsection