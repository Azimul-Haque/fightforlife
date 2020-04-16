@extends('layouts.index')
@section('title')
    Distribution Partners
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
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Distribution Partners</span>
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

    <section id="approach" class="wow fadeInUp">
        <div class="container">
            <div class="row margin-ten no-margin-bottom">
                <!-- team member -->
                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="300ms">
                    <img src="/images/partners/gfg.png" alt="Gift for Good"/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Gift for Good</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">Donation Amount: ৳ 62500</span>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">Gift for Good</h5>
                        <p class="width-70 center-col light-gray-text margin-five">+8801303-603771</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div>
                <!-- end team member -->
                <!-- team member -->
                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">
                    <img src="/images/partners/feni_leo.jpg" alt="Feni Muhuri Leo Club"/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Feni Muhuri Leo Club</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">Donation Amount: ৳ 13750</span>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">Feni Muhuri Leo Club</h5>
                        <p class="width-70 center-col light-gray-text margin-five">+8801521-408272</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div>
                <!-- end team member -->
                <!-- team member -->
                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">
                    <img src="/images/partners/tg.jpg" alt="Heroes of COVID19, Thakurgaon"/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Heroes of COVID19, Thakurgaon</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">Donation Amount: ৳ 21000</span>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">Heroes of COVID19, Thakurgaon</h5>
                        <p class="width-70 center-col light-gray-text margin-five">+8801521-429327</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div>
                <!-- end team member -->
                <!-- team member -->
                <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">
                    <img src="/images/partners/gazipur_local.jpg" alt="Gazipur Local Club"/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Gazipur Local Club</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">Donation Amount: ৳ 20000</span>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">Gazipur Local Club</h5>
                        <p class="width-70 center-col light-gray-text margin-five">+8801686-168911</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div>
                <!-- end team member -->
                <!-- team member -->
                {{-- <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="600ms">
                    <img src="images/team-member12.jpg" alt=""/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Steve Anders</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">Head Developer</span>
                        <div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">I am Leader</h5>
                        <p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div> --}}
                <!-- end team member -->
                <!-- team member -->
                {{-- <div class="col-md-4 col-sm-6 text-center team-member position-relative wow fadeInUp" data-wow-duration="900ms">
                    <img src="images/team-member13.jpg" alt=""/>
                    <figure class="position-relative bg-white">
                        <span class="team-name text-uppercase black-text letter-spacing-2 display-block font-weight-600">Bryan Johnson</span>
                        <span class="team-post text-uppercase letter-spacing-2 display-block">HR Manager</span>
                        <div class="person-social margin-five no-margin-bottom"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-google-plus"></i></a></div>
                    </figure>
                    <div class="team-details">
                        <h5 class="team-headline white-text text-uppercase font-weight-600">I am Creative</h5>
                        <p class="width-70 center-col light-gray-text margin-five">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been.</p>
                        <div class="separator-line-thick bg-white"></div>
                    </div>
                </div> --}}
                <!-- end team member -->
            </div>
        </div>
    </section>
    
@endsection

@section('js')

@endsection