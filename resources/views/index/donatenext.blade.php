@extends('layouts.index')
@section('title')
    Donate Via AamarPay
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
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Donate Now</span>
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

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @if($donation->payment_status == 0)
                        <center>
                            <h3>Please pay Tk. {{ $donation->amount }}/- following the process in the Next page, Click the button below.</h3>
                            <div style="border: 2px solid #ddd; margin: 25px; max-width: 400px;">
                                <img src="{{ asset('images/aamarpay.png') }}" class="img-responsive">
                                {!! 
                                aamarpay_post_button([
                                    'tran_id'  => $donation->trxid,
                                    'cus_name'  => $donation->name,
                                    'cus_email' => $donation->phone . '@iitdualumni.com',
                                    'cus_phone' => $donation->phone,
                                    'desc' => 'Registration Fee',
                                    'opt_a' => $donation->donation_id,
                                    'opt_b' => $donation->amount
                                ], $donation->amount, '<i class="fa fa-money white-text"></i> Pay Through AamarPay', 'btn btn-sm btn-success') !!}
                            </div>
                        </center>
                    @elseif($donation->payment_status == 1)
                        <center>
                            <h3>Thank you for the payment <b>{{ $donation->name }}</b></h3>
                            <div style="border: 2px solid #ddd; margin: 25px; max-width: 400px;">
                                <span style="word-wrap: break-word;">Transaction ID: {{ $donation->trxid }}</span>
                            </div>
                        </center>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
   
@endsection