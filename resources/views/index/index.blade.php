@extends('layouts.index')
@section('title')
    Let's Fight For Life. Stay Home. Stay Safe.
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
            background-image:url({{ asset('/images/3362406.gif') }}); /* path to your loading animation */
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
    <section class="fix-background white-text content-top-margin wow fadeIn" style="background-image:url('/images/banner_back.png');">
        {{-- <img class="parallax-background-img" src="/images/banner_back.png" alt="" />
        <div class="slider-overlay bg-slider"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    {{-- <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2016</span> --}}
                    <h1 class="white-text">Fight For Life</h1><br/><br/>
                    <p class="text-med width-90 center-col white-text margin-five no-margin-bottom">
                        বিদ্যানন্দ, এক টাকায় আহার, গিফট ফর গুডস - এই সংগঠনগুলো কাজ করছে আপনাকে, আমাকে বাঁচিয়ে রাখতে। তৈরি করছে ডাক্তারদের জন্য পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (পিপিই), আমাদের জন্য স্যানিটাইজার। খাবার পৌঁছে দিচ্ছে লকডাউনে আটকে পরা মানুষগুলোর কাছে। অসহায় খেটে খাওয়া মানুষগুলো, যাদের রোজগা্রের পথ অনির্দিষ্টকালের জন্য বন্ধ, তাদের বেঁচে থাকার ব্যবস্থা করছে।
                        তাদের কাছে পৌঁছে যাবে আপনার এ অনুদান।<br/><br/>

                        আপনার দেয়া অর্থ দিয়ে তৈরি হবে ডাক্তার এবং সকল স্বাস্থ্যকর্মীদের জন্য পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (পিপিই)। লকডাউনের দিনগুলোয় উপার্জন করতে না পারা অসহায় শ্রমজীবী মানুষগুলোর জন্য কেনা হবে বেঁচে থাকার জন্য প্রয়োজনীয় খাবার।<br/><br/>

                        যারা আপনার জন্য লড়াই করছে, তাদের সাহায্য করুন। আর অসহায় খেটে খাওয়া মানুষগুলোর পাশে দাঁড়ান।<br/><br/>

                        Let’s Fight For Life. Stay Home. Stay Safe.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- <section class="content-top-margin wow fadeIn bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    <h1>Fight For Life</h1>
                    <p class="text-med width-90 center-col margin-five no-margin-bottom">
                        বিদ্যানন্দ, এক টাকায় আহার, গিফট ফর গুডস - এই সংগঠনগুলো কাজ করছে আপনাকে, আমাকে বাঁচিয়ে রাখতে। তৈরি করছে ডাক্তারদের জন্য পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (পিপিই), আমাদের জন্য স্যানিটাইজার। খাবার পৌঁছে দিচ্ছে লকডাউনে আটকে পরা মানুষগুলোর কাছে। অসহায় খেটে খাওয়া মানুষগুলো, যাদের রোজগা্রের পথ অনির্দিষ্টকালের জন্য বন্ধ, তাদের বেঁচে থাকার ব্যবস্থা করছে।
                        তাদের কাছে পৌঁছে যাবে আপনার এ অনুদান।<br/><br/>

                        আপনার দেয়া অর্থ দিয়ে তৈরি হবে ডাক্তার এবং সকল স্বাস্থ্যকর্মীদের জন্য পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (পিপিই)। লকডাউনের দিনগুলোয় উপার্জন করতে না পারা অসহায় শ্রমজীবী মানুষগুলোর জন্য কেনা হবে বেঁচে থাকার জন্য প্রয়োজনীয় খাবার।<br/><br/>

                        যারা আপনার জন্য লড়াই করছে, তাদের সাহায্য করুন। আর অসহায় খেটে খাওয়া মানুষগুলোর পাশে দাঁড়ান।<br/><br/>

                        Let’s Fight For Life. Stay Home. Stay Safe.
                    </p>
                </div>
            </div>
        </div>
    </section> --}}
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
                    <input name="phone" type="text" value="{{ old('phone') }}" placeholder="Contact Number (যোগাযোগের নাম্বার)"  required="" />
                    
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
                        <span><i class="fa fa-home"></i></span>
                        ঘরে বসেই আপনার সামর্থ্য অনুযায়ী অর্থ দিয়ে এই লড়াইয়ে অংশ নিন।                        
                    </li>
                    <li>
                        <span><i class="fa fa-university"></i></span>
                        অনুদান জমা হবে ঢাকা বিশ্ববিদ্যালয়ের তথ্য প্রযুক্তি ইন্সটিটিউট এর শিক্ষার্থীদের উদ্যোগ "ফাইট ফর লাইফ" প্রজেক্ট এর তহবিল এ। এই অর্থ পৌঁছে যাবে বিদ্যানন্দ  ও গিফট ফর গুডস এ ধরণের স্বেচ্ছাসেবী সংগঠনগুলোর কাছে।
                    </li> 
                    <li>
                        <span><i class="fa fa-ambulance"></i></span>
                        এ অনুদান দিয়ে ডাক্তার এবং স্বাস্থ্যকর্মীর জন্য তৈরি হবে পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (PPE)। লকডাউনের দিনগুলোয় উপার্জন করতে না পারা অসহায় শ্রমজীবী মানুষগুলোর জন্য কেনা হবে বেঁচে থাকার জন্য প্রয়োজনীয় খাবার আর স্যানিটাইজার।
                    </li>
                </ul>
            </div> 
        </div>
    </section>

    <section class="fix-background white-text" style="background-image:url('/images/donation_background.jpg');">
        {{-- <img class="parallax-background-img" src="/images/donation_background.jpg" alt="" />
        <div class="slider-overlay bg-slider"></div> --}}
        <div class="container">
            <div class="row">
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="600ms">
                    <i class="icon-happy medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="{{ $totaldonations }}" data-speed="7000"></span>
                    <span class="counter-title gray-text">Donors</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin text-center counter-section wow fadeInUp sm-margin-bottom-ten" data-wow-duration="300ms">
                    <i class="icon-heart medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="{{ $totaldonationamount->total - $totalcharge->total }}" data-speed="5000"></span>
                    <span class="counter-title gray-text">Donation (Tk.)</span>
                </div>
                <!-- end counter -->
                <!-- counter -->
                <div class="col-md-4 col-sm-4 bottom-margin-small text-center counter-section wow fadeInUp xs-margin-bottom-ten" data-wow-duration="900ms">
                    <i class="icon-anchor medium-icon"></i>
                    <span class="timer counter-number white-text" data-to="3" data-speed="7000"></span>
                    <span class="counter-title gray-text">Partners</span>
                </div>
                <!-- end counter -->
            </div>
        </div>
    </section>

    <section id="approach" class="approach parallax1 parallax-fix  parallax-section-main">
        <div class="carousel slide carousel-slide" id="partnersCarousal"> 
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h3 class="section-title section-title-services no-padding-bottom">Our Partners</h3>
                    </div>
                </div>
                <div class="carousel-inner margin-seven no-margin-bottom">
                    <div class="item active"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Gift for Good" src="/images/partners/gfg.png"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Gift for Good</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Feni Muhuri Leo Club" src="/images/partners/feni_leo.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Feni Muhuri Leo Club</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="Heroes of COVID19, Thakurgaon" src="/images/partners/tg.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Heroes of COVID19, Thakurgaon</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="Gazipur Local Club" src="/images/partners/gazipur_local.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Gazipur Local Club</h5></div>
                    </div>
                    {{-- <div class="item"> 
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 5</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 6</h5></div>
                        <div class="col-md-3 col-sm-6 text-center xs-margin-bottom-ten"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 7</h5></div>
                        <div class="col-md-3 col-sm-6 text-center"><a href="#"><img alt="" src="/images/slider/architecture-featured01.jpg"></a><h5 class="margin-ten no-margin-bottom xs-margin-top-five">Test 8</h5></div>
                    </div> --}}
                </div>
            </div> 
            <a data-slide="prev" href="#partnersCarousal" class="left carousel-control"> <img alt="" src="/images/arrow-pre.png"> </a> <a data-slide="next" href="#partnersCarousal" class="right carousel-control"> <img alt="" src="/images/arrow-next.png"> </a>
        </div>
    </section>

    <section class="fix-background white-text" style="background-image:url('/images/iit_du.jpg');">
        {{-- <div class="opacity-full bg-white"></div> --}}
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 text-center center-col">
                    {{-- <span class="margin-five no-margin-top display-block letter-spacing-2">EST. 2016</span> --}}
                    <h1 class="white-text">About Us</h1><br/>
                    <p class="text-med width-90 center-col white-text smargin-five no-margin-bottom">
                        ঢাকা বিশ্ববিদ্যালয়ের তথ্য প্রযুক্তি ইনস্টিটিউটের শিক্ষার্থীদের উদ্যোগে এই ডোনেশন প্লাটফর্মটি তৈরি। ঢাকা বিশ্ববিদ্যালয়ের শিক্ষার্থীরা সবসময় দেশের যেকোনো সংকট মোকাবেলায় সামনে থেকে নেতৃত্ব দিয়েছে। 
                        করোনা ভাইরাসের সংক্রমণের ফলে যে সংকট তৈরি হয়েছে তা নিরসন করার জন্যও তাই এগিয়ে এসেছি আমরা।<br/><br/>

                        সারাদেশে আক্রান্ত এলাকাগুলো লকডাউন করে দেয়া হচ্ছে, সারা বিশ্বে আক্রান্তের সংখ্যা আর মৃতের সংখ্যা বেড়েই চলেছে। মৃত্যুর মিছিল যাতে দীর্ঘ না হয় সেজন্যে এই মুহুর্তে দেশের সব অঞ্চলে যথাযথ চিকিৎসা সেবা নিশ্চিত করতে হবে। তাই সবার আগে প্রয়োজন ডাক্তার এবং স্বাস্থ্যকর্মীদের সুরক্ষা। তাদের পারসোনাল প্রোটেক্টিভ ইকুইপমেন্ট (পিপিই) এর যোগান দিচ্ছে বিদ্যানন্দ নামের একটি সংগঠন। তাদের অর্থের একমাত্র উৎস আমার আপনার দেয়া অনুদান।<br/><br/>

                        এই লকডাউনে ঘরে বসে আছে রিকশাওয়ালা, দিনমজুর সহ বহু খেটে খাওয়া মানুষ। তাদের খাদ্যের যোগানও নিশ্চিত করছে বিদ্যানন্দ এবং গিফট ফর গুডস।<br/><br/>

                        সবসময়ের মতই ঢাকা বিশ্ববিদ্যালয়ের সকল প্রাক্তন ও বর্তমান শিক্ষার্থী, শিক্ষক, কর্মকর্তা-কর্মচারী এই সংকট মোকাবিলায় এগিয়ে আসবেন এটাই আমাদের চাওয়া। <br/><br/>

                        Let’s Donate and Fight For Life. Stay Home. Stay Safe.
                    </p>
                </div>
            </div>
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