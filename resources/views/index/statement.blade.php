@extends('layouts.index')
@section('title')
    Statement
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
    <style type="text/css">
        .table {
            margin-bottom: 0px !important; 
        }
    </style>
@endsection

@section('content')
    <!-- head section -->
    <section class="content-top-margin wow fadeInUp bg-gray">
        <div class="container">
            <div class="row">
                <!-- section title -->
                <div class="col-md-6 col-sm-6 xs-margin-bottom-four">
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">
                        Statement
                    </span>
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

    <section class="bg-deep-yellow">
        <div class="container">
            <div class="row">
                <!-- features item -->
                <div class="col-md-3 col-sm-6 sm-margin-bottom-four">
                    <div class="restaurant-features-main bg-white">
                        <div class="restaurant-features text-center">
                            <img src="images/restaurant-img13.png" alt=""/>
                            <span class="text-uppercase font-weight-600 letter-spacing-1 black-text margin-ten display-block no-margin-bottom">International Food</span>
                            <span class="text-small letter-spacing-1 text-uppercase">World Famous Recipes</span>
                        </div>
                    </div>
                </div>
                <!-- end features item -->
                <!-- features item -->
                <div class="col-md-3 col-sm-6 sm-margin-bottom-four">
                    <div class="restaurant-features-main bg-white">
                        <div class="restaurant-features text-center">
                            <img src="images/restaurant-img14.png" alt=""/>
                            <span class="text-uppercase font-weight-600 letter-spacing-1 black-text margin-ten display-block no-margin-bottom">Breakfast Available</span>
                            <span class="text-small letter-spacing-1 text-uppercase">Specialized Morning</span>
                        </div>
                    </div>
                </div>
                <!-- end features item -->
                <!-- features item -->
                <div class="col-md-3 col-sm-6 xs-margin-bottom-four">
                    <div class="restaurant-features-main bg-white">
                        <div class="restaurant-features text-center">
                            <img src="images/restaurant-img15.png" alt=""/>
                            <span class="text-uppercase  font-weight-600 letter-spacing-1 black-text margin-ten display-block no-margin-bottom">Quiet Cafe Dining</span>
                            <span class="text-small letter-spacing-1 text-uppercase">Private & Personalized</span>
                        </div>
                    </div>
                </div>
                <!-- end features item -->
                <!-- features item -->
                <div class="col-md-3 col-sm-6">
                    <div class="restaurant-features-main bg-white">
                        <div class="restaurant-features text-center">
                            <img src="images/restaurant-img16.png" alt=""/>
                            <span class="text-uppercase font-weight-600 letter-spacing-1 black-text margin-ten display-block no-margin-bottom">Exclusive Bar</span>
                            <span class="text-small letter-spacing-1 text-uppercase">Start getting high</span>
                        </div>
                    </div>
                </div>
                <!-- end features item -->
            </div>
        </div>
    </section>
@endsection

@section('js')
   
@endsection