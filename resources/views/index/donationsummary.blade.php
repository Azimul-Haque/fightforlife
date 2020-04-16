@extends('layouts.index')
@section('title')
    Donation Summary
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
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Donation Summary</span>
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

    <section class="parallax2 parallax-fix">
        {{-- <img class="parallax-background-img" src="images/donation_background.jpg" alt="" /> --}}
        <div class="slider-overlay"></div>
        <div class="container">
            <div class="row">
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                    <i class="icon-happy medium-icon"></i>
                    <span class="timer counter-number" data-to="{{ $totaldonations }}" data-speed="7000"></span>
                    <span class="counter-title gray-text">Donors</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                    <i class="icon-heart medium-icon"></i>
                    <span class="timer counter-number" data-to="{{ $totaldonationamount->total - $totalcharge->total }}" data-speed="3000"></span>
                    <span class="counter-title gray-text">Donation (Tk.)</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                    <i class="icon-anchor medium-icon"></i>
                    <span class="timer counter-number" data-to="3" data-speed="9000"></span>
                    <span class="counter-title gray-text">Partners</span>
                </div>
                <!-- end counter -->
            </div>
        </div>
    </section>

    {{-- <section class="wow fadeIn bg-gray"> --}}
    <section class="fix-background wow fadeIn " style="background-image:url('/images/donor_list_back.jpg?u_id=54354534');">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <center><h2 class="white-text">Donor List</h2></center><br/><br/>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Donor Name</th>
                                    <th>Donor Contact</th>
                                    <th>Institution/ Organization</th>
                                    {{-- <th>Donation Amount</th> --}}
                                    <th>Donation Datetime</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($donors as $donor)
                                    <tr>
                                        <td><a href="{{ route('index.donatenext', $donor->donation_id) }}">{{ $donor->name }}</a></td>
                                        <td>{{ substr($donor->phone, 0, -4) }}****</td>
                                        <td>{{ $donor->institute }}</td>
                                        {{-- <td>৳ {{ $donor->amount }}</td> --}}
                                        <td>{{ date('F d, Y h:i A', strtotime($donor->created_at)) }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <center>
                        {{ $donors->links() }}
                        {{-- @include('pagination.default', ['paginator' => $donors]) --}}
                    </center>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
   
@endsection