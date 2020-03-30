@extends('layouts.index')
@section('title')
    Gallery
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
                    <span class="text-large letter-spacing-2 black-text font-weight-600 text-uppercase agency-title">Gallery</span>
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
                <div class="col-md-12 work-3col gutter ">
                    <div class="grid-gallery overflow-hidden" >
                        <div class="tab-content">
                            <ul class="masonry-items grid lightbox-gallery">
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="/images/gallery/1.jpg" title=""><img src="/images/gallery/1.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Gift for Good</h3>
                                            <p>Date: March 30, 2020</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="/images/gallery/2.jpg" title=""><img src="/images/gallery/2.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Gift for Good</h3>
                                            <p>Date: March 30, 2020</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="/images/gallery/3.jpg" title=""><img src="/images/gallery/3.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Gift for Good</h3>
                                            <p>Date: March 30, 2020</p>
                                        </figcaption>
                                    </figure>
                                </li>
                                <li>
                                    <figure>
                                        <div class="gallery-img"><a href="/images/gallery/4.jpg" title=""><img src="/images/gallery/4.jpg" alt=""></a></div>
                                        <figcaption>
                                            <h3>Gift for Good</h3>
                                            <p>Date: March 30, 2020</p>
                                        </figcaption>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
@endsection

@section('js')

@endsection