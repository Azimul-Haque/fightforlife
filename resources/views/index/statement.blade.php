@extends('layouts.index')
@section('title')
    Statement
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/stylesheet.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css" />
    <style type="text/css">
        .table {
            margin-bottom: 0px !important; 
        }

        .bg-fast-blue {
            background: #2A9DF4 !important;
        }

        .bg-fast-green {
            background: #228B22 !important;
        }

        #map {
          height: 1000px;
          width: 100%;
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
                    <div class="separator-line-thick bg-fast-blue no-margin-lr"></div>
                </div>
                <div class="col-md-2 col-md-offset-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Total Donation</span><br/>
                        <span class="gifts-off bg-fast-blue white-text">৳ {{ $totaldonationamount->total - $totalcharge->total }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-center xs-margin-bottom-ten col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Total Disbursed</span><br/>
                        <span class="gifts-off bg-fast-blue white-text">৳ {{ $totaldusburse->total }}</span>
                    </div>
                </div>
                <div class="col-md-2 text-center col-sm-4">
                    <div class="special-gifts-box ">
                        <span class="text-uppercase text-small letter-spacing-1">Balance</span><br/>
                        <span class="gifts-off bg-fast-blue white-text">৳ {{ $totaldonationamount->total - $totalcharge->total - $totaldusburse->total }}</span>
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
                    <div class="separator-line-thick bg-fast-green no-margin-lr"></div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        @foreach($partners as $partner)
                            <div class="col-md-4 col-sm-6 text-center xs-margin-bottom-ten">
                                <div class="special-gifts-box ">
                                    <span class="text-uppercase text-small">{{ $partner->name }}</span><br/>
                                    <span class="gifts-off bg-fast-green white-text">৳ {{ $partner->amount }}</span>
                                </div><br/>
                            </div>
                        @endforeach
                    </div>

                    <br/><br/>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="map" class="shadow"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"></script>
    <script type="text/javascript">
        var zoomlevel = 7.7;
        if($(window).width() < 768) {
        $('#map').css({"height": "550px"});
        zoomlevel = 6.6;
        }

        var map = L.map('map', {
         center: [23.7104, 90.40744],
         zoom: zoomlevel,
         zoomSnap: 0.1,
         scrollWheelZoom: false,
        });

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '<a href="https://www.openstreetmap.org/copyright" target="_blank">© OpenStreetMap</a> contributor'
        }).addTo(map);

        var marker = [];

        @foreach($partners as $partner)
        marker[{{ $partner->id }}] = L.marker([26.0200532, 88.4694397])
                    .addTo(map)
                    .bindPopup("<big>{{ $partner->name }}</big><br/><small>{{ $partner->address }}</small><br/><b>Total Donation: ৳ {{ $partner->amount }}</b><br/><b>Families Being Helped: 500</b>", {closeOnClick: false, autoClose: false})
                    .openPopup();
        @endforeach
        // marker1.bindPopup("Test<br/><a href='#!'>Click</a>"); // .openPopup() to open it onready



    </script>
@endsection