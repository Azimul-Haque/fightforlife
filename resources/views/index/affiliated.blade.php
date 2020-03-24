@extends('layouts.index')
@section('title')
    Affiliated Partners
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin wow fadeInUp bg-gray">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Affiliated Partners</span>
                </div>
                <!-- end section title -->
                <!-- section highlight text -->
                <div class="col-md-6 col-sm-6 text-right xs-text-left">
                    <span class="text-extra-large font-weight-400"></span>
                </div>
                <!-- end section highlight text -->
            </div>
        </div>
    </section>
    <!-- end head section -->

    <section id="approach" class="approach parallax1 parallax-fix  parallax-section-main">
        <div class="carousel slide carousel-slide" id="myCarousel3"> 
            <div class="container">
                <div class="row">
                    <!-- section title -->
                    {{-- <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services no-padding-bottom">Our Partners</h3>
                    </div> --}}
                    <!-- end section title -->
                </div>
                <div class="carousel-inner margin-seven no-margin-bottom">
                    <div class="item active"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 1</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 2</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 3</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 4</h5></div>
                    </div>
                    <div class="item"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 5</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 6</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 7</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 8</h5></div>
                    </div>
                </div>
            </div>
            <!-- slider controls --> 
            <a data-slide="prev" href="#myCarousel3" class="left carousel-control"> <img alt="" src="/images/arrow-pre.png"> </a> <a data-slide="next" href="#myCarousel3" class="right carousel-control"> <img alt="" src="/images/arrow-next.png"> </a>
        </div>
    </section>
    
@endsection

@section('js')
   
@endsection