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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="text-large display-block">Payment Gateway and</span>
                    <span class="title-large text-uppercase letter-spacing-1 font-weight-600 black-text">Donation Info</span>
                    <div class="separator-line-thick bg-fast-pink no-margin-lr"></div>
                </div>
                <div class="col-md-2 col-md-offset-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Total Donation</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">৳ {{ $totaldonationamount->total }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Gateway Charge</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">৳ {{ $totalcharge->total }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-center col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Total Balance</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">৳ {{ $totaldonationamount->total - $totalcharge->total }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <span class="text-large display-block">Partner Affiliation and</span>
                    <span class="title-large text-uppercase letter-spacing-1 font-weight-600 black-text">Distribution Info</span>
                    <div class="separator-line-thick bg-fast-pink no-margin-lr"></div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach($partners as $partner)
                            <div class="col-md-4 col-sm-6 text-center xs-margin-bottom-ten">
                                <div class="special-gifts-box ">
                                    <span class="text-uppercase text-small">{{ $partner->name }}</span><br/>
                                    <span class="gifts-off bg-fast-pink white-text">৳ {{ $partner->amount }}</span>
                                </div><br/>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="text-large display-block">Partner Affiliation and</span>
                    <span class="title-large text-uppercase letter-spacing-1 font-weight-600 black-text">Distribution Info</span>
                    <div class="separator-line-thick bg-fast-pink no-margin-lr"></div>
                </div>
                <div class="col-md-2 col-md-offset-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">বিদ্যানন্দ</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">৳ 0</span>
                    </div>
                </div>
                <div class="col-md-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">এক টাকায় আহার</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">৳ 0</span>
                    </div>
                </div>
                <div class="col-md-2 text-center col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">গিফট ফর গুড</span><br/>
                        <span class="gifts-off bg-fast-pink white-text">$ 0</span>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@section('js')
   
@endsection