@extends('layouts.index')
@section('title')
    Donate Via AamarPay
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
                        @if($donation->payment_status == 0)
                            Donate Now
                        @elseif($donation->payment_status == 1)
                            Donation
                        @endif
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

    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    @if($donation->payment_status == 0)
                        <center>
                            <h3 class="margin-two">Please pay Tk. {{ $donation->amount }}/- following the process in the Next page, Click the button below.</h3>
                            <div style="border: 2px solid #ddd; padding: 0px; width: 100%">
                                <img src="{{ asset('images/aamarpay.png') }}" class="img-responsive margin-two">
                                {!! 
                                aamarpay_post_button([
                                    'tran_id'  => $donation->trxid,
                                    'cus_name'  => $donation->name,
                                    'cus_email' => $donation->phone . '@iitdualumni.com',
                                    'cus_phone' => $donation->phone,
                                    'desc' => 'Registration Fee',
                                    'opt_a' => $donation->donation_id,
                                    'opt_b' => $donation->amount
                                ], $donation->amount, '<i class="fa fa-money"></i> Pay Through AamarPay', 'highlight-button btn btn-medium button margin-five text-center center-col') !!}
                            </div>
                        </center>
                    @elseif($donation->payment_status == 1)
                        <center>
                            <h2>
                                Thank you for your <big>Donation!</big>
                            </h2>
                            @mobile
                                <div style="border: 2px solid #ddd; margin: 25px; padding: 5px;">
                                    <img src="/images/logo-02.png" style="height: 70px; padding: 5px;"><br/>
                                    <small>Initiative by IIT, University of Dhaka</small><br/><br/>
                                    <table class="table table-condensed">
                                        <tr>
                                            <td width="35%">Donor Name</td>
                                            <td>: <b>{{ $donation->name }}</b></td>
                                        </tr>
                                        <tr>
                                            <td>Contact</td>
                                            <td>: {{ substr($donation->phone, 0, -4) }}****</td>
                                        </tr>
                                        <tr>
                                            <td>Amount</td>
                                            <td>: ৳ *****</td>
                                        </tr>
                                        <tr>
                                            <td>Datetime</td>
                                            <td>: {{ date('F d, Y h:i A', strtotime($donation->created_at)) }}</td>
                                        </tr>
                                    </table>
                                </div>
                            @elsemobile
                                <div style="border: 2px solid #ddd; margin: 25px; padding: 5px;">
                                    <img src="/images/logo-02.png" style="height: 70px; padding: 5px;"><br/>
                                    <small>Initiative by IIT, University of Dhaka</small><br/><br/>
                                    <table class="table table-condensed">
                                        <tr>
                                            <td width="35%"><big>Donor Name</big></td>
                                            <td><big>: <b>{{ $donation->name }}</b></big></td>
                                        </tr>
                                        <tr>
                                            <td><big>Contact</big></td>
                                            <td><big>: {{ substr($donation->phone, 0, -4) }}****</big></td>
                                        </tr>
                                        <tr>
                                            <td><big>Amount</big></td>
                                            <td><big>: ৳ *****</big></td>
                                        </tr>
                                        <tr>
                                            <td><big>Datetime</big></td>
                                            <td><big>: {{ date('F d, Y h:i A', strtotime($donation->created_at)) }}</big></td>
                                        </tr>
                                    </table>
                                </div>
                            @endmobile
                        </center>
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
   
@endsection