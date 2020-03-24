@extends('layouts.index')
@section('title')
    Home
@endsection

@section('css')
    <style type="text/css">
        body {
            overflow: hidden;
        }

        /* Preloader */
        #preloader {
            position: fixed;
            top:0;
            left:0;
            right:0;
            bottom:0;
            background-color:#fff; /* change if the mask should have another color then white */
            z-index:99999;
        }

        #status {
            width:200px;
            height:200px;
            position:absolute;
            left:50%;
            top:50%;
            background-image:url({{ asset('images/3362406.gif') }}); /* path to your loading animation */
            background-repeat:no-repeat;
            background-position:center;
            margin:-100px 0 0 -100px;
        }
    </style>
@endsection

@section('content')
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    {{-- @include('partials._slider') --}}
    <!-- about section -->
    <section class="content-top-margin  wow fadeIn bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-10 text-center center-col">
                    {{-- <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2016</span> --}}
                    <h1>Fight For Life</h1>
                    <p class="text-med width-90 center-col margin-seven no-margin-bottom"> We've been crafting beautiful websites, launching stunning brands and making clients happy for years. With our prestigious craftsmanship, remarkable client care and passion for design.</p>
                </div>
            </div>
        </div>
        {{-- <div class="container-fluid margin-five no-margin-bottom">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 bg-fast-yellow padding-three text-center">
                    <span class="text-small text-uppercase font-weight-600 black-text letter-spacing-2">Professionalism &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Excellence &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Respect</span>
                </div>
            </div>
        </div> --}}
    </section>
    <!-- end about section -->

    <section id="contact" class="xs-onepage-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center no-padding">
                    <h1 class="text-transform-none title margin-two no-margin-lr no-margin-top orange-light-text">
                        Donate
                        <!-- <span class="underline-bg bg-light-orange"></span> -->
                    </h1>
                    <h4 class=" margin-ten no-margin-lr no-margin-top font-weight-300 gray-text">Please fill up the form</h4>
                </div>
            </div> 
            <div class="col-md-6 col-sm-6 bg-gray contact-map contact-map-bottom map" id="canvas1" @desktop style="height: 460px !important;" @enddesktop>
                <!-- form -->
                
                {!! Form::open(['route' => 'index.donatestore', 'method' => 'POST']) !!}
                    {{-- <div id="success" class="no-margin-lr"></div> --}}
                    <input name="name" type="text" value="{{ old('name') }}" placeholder="Your Name (আপনার নাম)" required="" />
                    <input name="amount" id="amount" type="text" value="{{ old('amount') }}" placeholder="Donation Amount (অনুদানের পরিমাণ)" onchange="checkAmount()" required="" />
                    <input name="institute" type="text" value="{{ old('institute') }}" placeholder="Institution/Organization (প্রতিষ্ঠানের নাম)"  required="" />
                    <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Phone Number (ফোন নাম্বার)"  required="" />
                    
                    @php
                      $contact_num1 = rand(1,20);
                      $contact_num2 = rand(1,20);
                      $contact_sum_result_hidden = $contact_num1 + $contact_num2;
                    @endphp
                    <input type="hidden" name="contact_sum_result_hidden" value="{{ $contact_sum_result_hidden }}">
                    <input type="text" name="contact_sum_result" id="" class="form-control" placeholder="{{ $contact_num1 }} + {{ $contact_num2 }} = ?" required="">
                    
                    <button id="contact-us-button" type="submit" class="highlight-button-dark btn button xs-margin-bottom-five"><i class="fa fa-paper-plane"></i> Donate Now</button>
                {!! Form::close() !!}
                <!-- end form -->
            </div>
            <div class="map-contact col-md-6 col-sm-6 bg-light-orange" @desktop style="height: 460px !important;" @enddesktop>
                <ul>
                    <li>
                        <span><i class="fa fa-map-marker"></i></span>
                        <strong>Our Studio</strong><br>301 The Greenhouse, Custard Factory, London, e2 8dy.
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <strong>General Enquiries</strong><br><a href="mailto:no-reply@domain.com">no-reply@domain.com</a>
                    </li> 
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <strong>call us today!</strong><br>+44 (0) 123 456 7890
                    </li>
                </ul>
            </div> 
        </div>
    </section>

    <section class="parallax2 parallax-fix">
        <img class="parallax-background-img" src="images/donation_background.jpg" alt="" />
        <div class="slider-overlay bg-slider"></div>
        <div class="container">
            <div class="row">
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                    <i class="icon-happy medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="749" data-speed="7000"></span>
                    <span class="counter-title gray-text">Donors</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                    <i class="icon-heart medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="5620" data-speed="5000"></span>
                    <span class="counter-title gray-text">Donation (Tk.)</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                    <i class="icon-anchor medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="782" data-speed="7000"></span>
                    <span class="counter-title gray-text">Partners</span>
                </div>
                <!-- end counter -->
            </div>
        </div>
    </section>

    <section id="approach" class="approach parallax1 parallax-fix  parallax-section-main">
        <div class="carousel slide carousel-slide" id="myCarousel3"> 
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services no-padding-bottom">Our Partners</h3>
                    </div>
                    <!-- end section title -->
                </div>
                <div class="carousel-inner margin-seven no-margin-bottom">
                    <div class="item active"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Fringila Auctor</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Vitae nidh mauris</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">In fringilla auctor</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Aliquam gravida molis</h5></div>
                    </div>
                    <div class="item"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Fringila Auctor</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Vitae nidh mauris</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">In fringilla auctor</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Aliquam gravida molis</h5></div>
                    </div>
                </div>
            </div>
            <!-- slider controls --> 
            <a data-slide="prev" href="#myCarousel3" class="left carousel-control"> <img alt="" src="images/arrow-pre.png"> </a> <a data-slide="next" href="#myCarousel3" class="right carousel-control"> <img alt="" src="images/arrow-next.png"> </a>
        </div>
    </section>
@endsection

@section('js')
<!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
            $('body').delay(1000).css({'overflow':'visible'});
        })
    //]]>
</script>

<script type="text/javascript">
    function checkAmount() {
        if($('#amount').val() < 10) {
            $('#amount').val('');
            if($(window).width() > 768) {
              toastr.warning('Amount less then 10 will return error from the payment gateway! Please increase the amount.', 'WARNING').css('width', '400px');
            } else {
              toastr.warning('Amount less then 10 will return error from the payment gateway! Please increase the amount.', 'WARNING').css('width', ($(window).width()-25)+'px');
            }
        }
    }
</script>
@endsection