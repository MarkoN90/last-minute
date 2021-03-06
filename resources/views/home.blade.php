@extends('layouts.public')
@section('content')

    <style>

        .trapezoid {
            border-bottom: 25px solid #cc1717;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            height: 0;
            width: 120px;
            line-height: 28px;
            transform: rotate(45deg);
            font-weight: bold;
            text-align: center;
            color: white;
            font-size: 13px;
            position: absolute;
            top: 21px;
            right: -27px;
        }

        #best-seller {
            transform: rotate(-45deg);
            margin-top: -30px;
            height: 30px;
        }


        /*.pattern {*/
        /*    position: relative;*/
        /*    background-color: #3bb78f;*/
        /*    background-image: linear-gradient(315deg,*/
        /*    #3bb78f 0%, #0bab64 74%);*/
        /*}*/

        /*.pattern:before {*/
        /*    content: "";*/
        /*    position: absolute;*/
        /*    bottom: 0;*/
        /*    left: 0;*/
        /*    width: 100%;*/
        /*    height: 650px;*/
        /*    background: url('https://media.geeksforgeeks.org/wp-content/uploads/20200326181026/wave3.png');*/
        /*    background-size: cover;*/
        /*    background-repeat: no-repeat;*/
        /*}*/

    </style>


    <div style=" width: 100%; background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/iimages/Last-Min-English-landing-page-screens.png')">
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            @include('includes.nav')
            <div id="main-section" class="container d-none d-md-block" style="">
                <div class="row">
                    <div class="col-10">
                        <h1 id="main-title">Get <span id="main-title-ielts">IELTS</span> done.</h1>
                        <h2 id="main-subtitle">No worry, no pain, no problem.</h2>
                        <div class="container button-wrapper">
                            <button class="action-button" id="start-btn">Start studying</button>
                            <button class="action-button-2" id="free-stuff-btn">Free stuff</button>
                        </div>
                    </div>
                    <div class="col-2">
                        <div id="" class="container text-center my-5 d-none d-md-block">
                            <img id="girl-illustration" height="260" src="{{ asset('images/') }}/girl-illustration.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-block d-md-none">
            <h1 id="main-title">Get <span id="main-title-ielts">IELTS</span> done.</h1>
            <h2 id="main-subtitle">No worry, no pain, no problem.</h2>
        </div>
        <div id="" class="container text-center my-5 d-block d-md-none">
            <img id="girl-illustration" height="260" src="{{ asset('images/') }}/girl-illustration.png">
            <div class="container my-5 pb-4">
                <button class="action-button" id="start-btn-2"    style="margin-left: 0px; margin-right: 0px;">Start studying</button>
                <button class="action-button" id="free-stuff-btn-2" style="margin-right: 0px; margin-left: 0px;">Free stuff</button>
            </div>
        </div>

        <div class="container-fluid bg-gray py-5 position-relative" style="z-index: -150;">
            <span id="circle-pointer position-relative d-block" style="z-index: 100;  width: 100%; top: -40px; text-align: center; display: flex; justify-content: center; padding: 0px; margin: 0px;">
                <div class="text-white" style="z-index: 100; background: #f8f9fb; height: 80px; width: 80px; top:-40px;  position: absolute; border-radius:40px; padding: 0px; margin: 0px;">
                    <div style="border: 2px solid black;  height: 40px; width: 40px; margin: auto; margin-top: 20px; font-size: 20px; border-radius: 20px; color:black; font-weight: bold;"><img width="20" src="{{ asset('images/') }}/down-black-arrow.png"></div>
                </div>
            </span>
            <div class="container ">
                <h3 class="text-center header-dark-blue main-section-header">Worried about IELTS?</h3>
                <div class="row">
                    <div class="col-12 col-lg-8 offset-lg-2 pb-lg-5">
                        <p class="paragraph-gray p-4 main-paragraph">Last Minute English makes IELTS easy! Everything you need for IELTS in one
                            place.</p>
                    </div>
                    <div class="col-12 col-md-6 text-center p-lg-5">
                        <img id="boy-illustration" src="{{ asset('images/') }}/boy-illustration.png">
                    </div>
                    <div class="col-12 col-md-6 pt-5 p-lg-4">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="header-dark-blue section-header mb-lg-5">IELTS Complete Guide</h1>

                                <div class="d-flex align-item-center benefits-list-item-wrapper mb-lg-4">
                                    <div class="green-circle-guide mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Step-by-step study journey</div>
                                </div>
                                <div class="d-flex align-item-center benefits-list-item-wrapper mb-lg-4">
                                    <div class="green-circle-guide mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Starting from $13.99</div>
                                </div>
                                <div class="d-flex align-item-center benefits-list-item-wrapper mb-lg-4">
                                    <div class="green-circle-guide mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">No risk - 30 days guarantee</div>
                                </div>
                                <div class="d-flex align-item-center benefits-list-item-wrapper mb-lg-4">
                                    <div class="green-circle-guide mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue benefits-list-item mx-2">Everything you need for IELTS</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container p-0 p-md-5 mt-5">
            <div class="">
                <h1 class="p-2 p-md-5 text-center" id="main-title" style="">Why Last Minute <span style="" id="main-title-ielts"> English</span>?</h1>
            </div>
        </div>
        <div class="container mb-lg-5">
            <div class="row">
                <div class="col-12 col-md-4 mt-5">
                    <div  class="value-card p-4 pt-5  "  >
                        <img src="{{ asset('images/') }}/badge.png">
                        <h3 class="value-card-main-title mt-4">High Quality</h3>
                        <h4 class="value-card-subtitle">Created by an IELTS examiner</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <div class="value-card p-3 pt-5  "  >
                        <img src="{{ asset('images/') }}/file.png">
                        <h3 class="value-card-main-title mt-4">Organized</h3>
                        <h4 class="value-card-subtitle">Study journey for you</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5">
                    <div class="value-card p-3 pt-5">
                        <img src="{{ asset('images/') }}/phone.png">
                        <h3 class="value-card-main-title mt-4">Convenient</h3>
                        <h4 class="value-card-subtitle">Everything in one place</h4>
                    </div>
                </div>
            </div>

            <div class="p-5 d-flex justify-content-center">
                <button class="action-button" id="sign-up-home">Sign up now</button>
            </div>
        </div>
        <div class="container">
            <h3 id="big-header" class="text-center header-dark-blue">What's included?</h3>
            <div class="row">
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/girl-reading.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">40+ hours of classes</h3>
                        <h4 class="included-card-subtitle">Fun, interactive videos</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4" >
                        <img src="{{ asset('images/') }}/tests.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS 4 tests</h3>
                        <h4 class="included-card-subtitle">Speaking, writing, reading, listening</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/woman-speaking.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS speaking new answers</h3>
                        <h4 class="included-card-subtitle">Updated every 4 months</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/vocabulary.png">
                    </div>
                    <div>

                        <h3 class="included-card-main-title">Vocabulary booklet</h3>
                        <h4 class="included-card-subtitle">500 Words of band 7+ vocabulary</h4>
                    </div>
                </div>
                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/light.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">Understand IELTS examiner thinking</h3>
                        <h4 class="included-card-subtitle">Learn the best way to score Band 7+</h4>
                    </div>
                </div>

                <div class="col-12 col-md-4 d-flex p-2 included-card-wrapper"  >
                    <div class="included-card px-4">
                        <img src="{{ asset('images/') }}/steps.png">
                    </div>
                    <div>
                        <h3 class="included-card-main-title">IELTS step-by-step study journey</h3>
                        <h4 class="included-card-subtitle">1, 2 and 4 months</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="container d-none d-lg-block p-5"></div>
        <div class="container">
            <h3 id="big-header-2" class="text-center header-dark-blue main-section-header mt-5">Meet Our Students</h3>
            <p class="paragraph-gray px-4 main-paragraph">Join over 50,000 students who have achieved IELTS success with Last
                Minute English</p>
            <div class="row position-relative">
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center">
                    <div>
                        <div class="image-wrapper"><img class="testimonial-image" style="margin-top:-4px;" width="180" src="{{ asset('images/') }}/review1.png"></div>
                        <h3 class="testimonial-card-main-title">Anthony</h3>
                        <h4 class="testimonial-card-subtitle pb-3">Took IELTS General in 2021. Now working in Canada &nbsp; &nbsp;</h4>
                        <p class="full-testimonial-text" style="display: none;">
                            Anthony needed an IELTS Band 7 score to start working as an IELTS trainer in
                            his hometown. He already knew a lot about the IELTS exam, but he always scored Band
                            6 or 6.5 in speaking. After taking 1-1 classes with Francis, he was able to score 7.5 in
                            IELTS speaking, and now teaches IELTS skills to other students. Great work Anthony!
                        </p>

                        <button class="action-button-2 mt-2 read-more-testimonials" data-no="first" data-name="Anthony">Read more</button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center">
                    <div>
                        <div class="image-wrapper"><img class="testimonial-image" width="180" src="{{ asset('images/') }}/Jack Illustration.png"></div>
                        <h3 class="testimonial-card-main-title">Paul</h3>
                        <h4 class="testimonial-card-subtitle  pb-3">Took IELTS Academic in 2020.
                            Now Studying in Cambridge, UK</h4>
                        <p class="full-testimonial-text" style="display: none;">
                            Paul wanted to attend a UK university. The university needed him to score a Level
                            7 or higher overall. After taking the Last Minute English Premium Package, he scored
                            Band 7.5 overall, including Band 8 in writing. He was able to travel to the UK and is
                            currently studying a bachelor???s degree in Business. Well done Paul!
                        </p>
                        <button class="action-button-2 mt-2 read-more-testimonials" data-no="second" data-name="Paul">Read more</button>
                    </div>
                </div>
                <div class="col-12 col-md-4 mt-5 p-3 testimonial-wrapper text-center ">
                    <div>
                        <div class="image-wrapper"><img class="testimonial-image" width="180" src="{{ asset('images/') }}/Lauren Illustration.png"></div>
                        <h3 class="testimonial-card-main-title">Lauren</h3>
                        <h4 class="testimonial-card-subtitle pb-3">Took IELTS Academic in 2021.
                            Now working for Tencent in SZ</h4>
                        <p class="full-testimonial-text" style="display: none;">
                            Lauren lives in Hong Kong and works as an English-Chinese translator. She
                            needed to take the IELTS exam to prove her English level to her customers. However,
                            she had trouble with the exam, scoring only Band 6.5 overall. (New paragraph) After
                            taking the IELTS Premium Package, she scored Band 8 overall, including 7.5 for Writing
                            and Speaking. She now has more great work opportunities and is considering taking a
                            Master???s Degree in the UK. Congratulations Lauren!
                        </p>
                        <button class="action-button-2 mt-2 read-more-testimonials" data-no="third" data-name="Lauren">Read more</button>
                    </div>
                </div>
                <div class="testimonial-bubble-wrapper" data-url="{{ asset('images/') }}/">
                    <div class="testimonial-bubble position-relative" >
                        <div class="image-wrapper"><img id="testimonial-image" width="140" src="{{ asset('images/') }}/review1.png"></div>
                        <div>
                            <h3 class="p-5 pt-0 " id="bubble-name">Lauren</h3>
                            <p class="p-5 pt-0 pb-4" id="bubble-content">
                                Lauren lives in Hong Kong and works as an English-Chinese translator. She
                                needed to take the IELTS exam to prove her English level to her customers. However,
                                she had trouble with the exam, scoring only Band 6.5 overall. (New paragraph) After
                                taking the IELTS Premium Package, she scored Band 8 overall, including 7.5 for Writing
                                and Speaking. She now has more great work opportunities and is considering taking a
                                Master???s Degree in the UK. Congratulations Lauren!
                                <br>
                                <br>

{{--                                remaining essentially unchanged. It was popularised in the 1960s with the release of--}}
{{--                                like Aldus PageMaker including versions of Lorem Ipsum.--}}
                            </p>
                            <div id="arrow-down-black" class="arrow-down-black"></div>
                            <div id="arrow-down" class="arrow-down"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="">
            <div class="container qoute-section">
                <div class="row">
                    <div class="col-4 offset-4 col-md-2 offset-md-5" style="background: #0cc291; height: 2px; margin-top: 100px; margin-bottom: 35px"></div>
                </div>

                <blockquote class="p-5 home-quote">
                    ???Took this course for one month to prepare for my IELTS exam and got a score of 7.5. Great
                    course and great instructor. Enjoyed it thoroughly.???
                </blockquote>
                <div class="qoute-author">Melvin R.</div>
                <div class="qoute-author-company">Last Minute English student on Udemy.com</div>
                <div>
                    <h3></h3>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-dark-blue pattern pb-lg-5">
            <div class="container pb-lg-5">
                <h1 class="text-center text-white pricing-header">Pricing</h1>
                <div class="row" id="pricing">
                    <div class="col-12 col-md-4">
                        <div class="pricing-card position-relative" style="bordder: 1px solid red;">
                            <div class="pricing-card-top pricing-card-top-gray"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Starter Pack</h3>
                                <h5 class="package-name-price">Free</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>

                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Study Plan (1, 2, 4 months)</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Vocabulary List ??? 5 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Argument Booklet ??? 3 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Video Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                    IELTS Speaking New Answers (updated every season)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing - Marking</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">

                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">30-Day Speaking Correction Service</div>

                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">1-1 Classes with IELTS Examiner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <button id="pricing-pop" class="action-button-2">Start now</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 ">
                        <div class="pricing-card position-relative" style="borrder: 1px solid red;">
                            <div class="trapezoid ">
                                Best seller
                            </div>
                            <div class="pricing-card-top pricing-card-top-light-green"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Complete Guide</h3>
                                <h5 class="package-name-price">$13.99 USD</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>

                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Study Plan (1, 2, 4 months)</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Vocabulary List ??? 5 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Argument Booklet ??? 3 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Video Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                    IELTS Speaking New Answers (updated every season)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="empty-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing - Marking</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">

                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">30-Day Speaking Correction Service</div>

                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="empty-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">1-1 Classes with IELTS Examiner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <a target="_blank" href="{{ $udemyLink->value }}"><button class="action-button-2">Start now</button></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="pricing-card position-relative" style="bordder: 1px solid red;">
                            <div class="pricing-card-top pricing-card-top-green"></div>
                            <div class="package-name-wrap">
                                <h3 class="package-name-header">IELTS Premium Package</h3>
                                <h5 class="package-name-price p-2">Starting from $75 USD</h5>
                            </div>
                            <div class="package-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="d-flex align-item-center   pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>

                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Study Plan (1, 2, 4 months)</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Vocabulary List ??? 5 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Argument Booklet ??? 3 most common topics</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">40+ Hours of Video Classes</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                IELTS Speaking, Writing, Reading, Listening Courses
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="header-dark-blue pricing-card-benefit-text mx-2">
                                                    IELTS Speaking New Answers (updated every season)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div class="green-circle mx-2 text-center text-white"><i class="fas fa-check check-sign"></i></div> <div class="header-dark-blue pricing-card-benefit-text mx-2">IELTS Writing - Marking</div>
                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">

                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">30-Day Speaking Correction Service</div>

                                        </div>
                                        <div class="d-flex align-item-center  pricing-card-benefit-wrapper">
                                            <div>
                                                <div class="green-circle mx-2 text-center text-white">
                                                    <i class="fas fa-check check-sign"></i>
                                                </div>
                                            </div>
                                            <div class="header-dark-blue pricing-card-benefit-text mx-2">1-1 Classes with IELTS Examiner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 30px;">
                                <button class="action-button" onclick="window.location = '/contact'">Start now</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
    <script>

        const testimonials = {
            first: {
                image: "review1.png",
                arrowOffsetS: '90px',
                arrowOffset: '90px',
                text: 'Anthony needed an IELTS Band 7 score to start working as an IELTS trainer in his hometown. He already knew a lot about the IELTS exam, but he always scored Band 6 or 6.5 in speaking. After taking 1-1 classes with Francis, he was able to score 7.5 in IELTS speaking, and now teaches IELTS skills to other students. Great work Anthony!'

            },
            second: {
                image: "Jack Illustration.png",
                arrowOffsetS: '460px',
                arrowOffset: '530px',
                text: 'Paul wanted to attend a UK university. The university needed him to score a Level 7 or higher overall. After taking the Last Minute English Premium Package, he scored Band 7.5 overall, including Band 8 in writing. He was able to travel to the UK and is currently studying a bachelor???s degree in Business. Well done Paul!'

            },
            third: {
                image: "Lauren Illustration.png",
                arrowOffsetS: '840px',
                arrowOffset: '970px',
                text: 'Lauren lives in Hong Kong and works as an English-Chinese translator. She needed to take the IELTS exam to prove her English level to her customers. However, she had trouble with the exam, scoring only Band 6.5 overall. \n \n After taking the IELTS Premium Package, she scored Band 8 overall, including 7.5 for Writing and Speaking. She now has more great work opportunities and is considering taking a Master???s Degree in the UK. Congratulations Lauren!'
            }
        }

        let popoutLayer = document.getElementById('overlay');

        const arrowBlackDown = document.getElementById('arrow-down-black');
        const arrowDown      = document.getElementById('arrow-down');

        document.getElementById('free-stuff-btn').addEventListener('click',  (e) => {
            popoutLayer.style.display = 'flex';
        })

        document.getElementById('sign-up-nav-mob').addEventListener('click',  (e) => {
            let mobileNav = document.getElementById('mobile-nav');

            mobileNav.style.display = 'none';
            document.getElementById('pricing').scrollIntoView();
        })

        document.getElementById('start-btn').addEventListener('click',  (e) => {
            document.getElementById('pricing').scrollIntoView();
        })

        document.getElementById('sign-up-home').addEventListener('click',  (e) => {
            document.getElementById('pricing').scrollIntoView();
        })

        let testimonialsBtn = document.getElementsByClassName('read-more-testimonials');

        for (let i=0; i < testimonialsBtn.length; i++) {

            testimonialsBtn[i].addEventListener('click', (e) => {

                e.stopPropagation();

                let testimonialsDiv = e.target.parentElement;
                window.testimonialsDiv = testimonialsDiv;

                if(testimonialsDiv.classList.contains('open')) {

                    if (window.innerWidth < 1024) {
                        closeTestimonialMobile(e);
                    } else {
                        closeTestimonialDesktop(e);
                    }

                    testimonialsDiv.classList.remove('open');

                } else {

                    if (window.innerWidth < 1024) {
                        showTestimonialMobile(e);
                    } else {
                        showTestimonialDesktop(e);
                    }

                    testimonialsDiv.classList.add('open');
                }
            });
        }

        function showTestimonialMobile(e) {

                console.log(window.innerWidth);

                let fullTestimonial = testimonialsDiv.getElementsByClassName('full-testimonial-text')[0];
                let shortTestimonial = testimonialsDiv.getElementsByClassName('testimonial-card-subtitle')[0];
                let testimonialImage = testimonialsDiv.getElementsByClassName('testimonial-image')[0];

                e.target.innerHTML = 'Read less';
                shortTestimonial.style.display = 'none';
                fullTestimonial.style.display = 'block';
                testimonialImage.style.width = '160px';

            }


        function closeTestimonialMobile(e) {

            console.log(window.innerWidth);

            let fullTestimonial = testimonialsDiv.getElementsByClassName('full-testimonial-text')[0];
            let shortTestimonial = testimonialsDiv.getElementsByClassName('testimonial-card-subtitle')[0];
            let testimonialImage = testimonialsDiv.getElementsByClassName('testimonial-image')[0];

            e.target.innerHTML = 'Read more';
            shortTestimonial.style.display = 'block';
            fullTestimonial.style.display = 'none';
            testimonialImage.style.width = '180px';

        }


        function showTestimonialDesktop(e) {
            e.target.innerHTML = 'Read less';

            let testimonialBubbleWrapper = document.getElementsByClassName('testimonial-bubble-wrapper')[0];
            let url = testimonialBubbleWrapper.getAttribute('data-url');

            console.log(url);
            let bubbleImage = document.getElementById('testimonial-image');
            let bubbleName = document.getElementById('bubble-name');
            let bubbleContent = document.getElementById('bubble-content');

            bubbleName.innerHTML = e.target.getAttribute('data-name');

            let imagePath = url + testimonials[e.target.getAttribute('data-no')].image;

            bubbleImage.setAttribute('src', imagePath);
            bubbleContent.innerText = testimonials[e.target.getAttribute('data-no')].text;

            if(window.innerWidth < 1400) {
                arrowBlackDown.style.left = testimonials[e.target.getAttribute('data-no')].arrowOffsetS;
                arrowDown.style.left = testimonials[e.target.getAttribute('data-no')].arrowOffsetS;
            } else {
                arrowBlackDown.style.left = testimonials[e.target.getAttribute('data-no')].arrowOffset;
                arrowDown.style.left = testimonials[e.target.getAttribute('data-no')].arrowOffset;
            }


            testimonialBubbleWrapper.style.display = 'block';
        }

        function closeTestimonialDesktop(e) {
            e.target.innerHTML = 'Read more';

            let testimonialBubbleWrapper = document.getElementsByClassName('testimonial-bubble-wrapper')[0];
            let url = testimonialBubbleWrapper.getAttribute('data-url');

            testimonialBubbleWrapper.style.display = 'none';
        }


        document.getElementById('start-btn-2').addEventListener('click', (e) => {
            document.getElementById('pricing').scrollIntoView();
        });


        document.getElementById('free-stuff-btn-2').addEventListener('click', (e) => {
            popoutLayer.style.display = 'flex';

        });


        document.addEventListener('click', function(e) {

            // alert('hi');

            for (let i=0; i < testimonialsBtn.length; i++) {

                testimonialsBtn[i].innerHTML = 'Read more';
                    let testimonialsDiv = e.target.parentElement;
                    window.testimonialsDiv = testimonialsDiv;
                        let testimonialBubbleWrapper = document.getElementsByClassName('testimonial-bubble-wrapper')[0];
                        testimonialBubbleWrapper.style.display = 'none';
                        testimonialsDiv.classList.remove('open');
                }
        })


        document.getElementById('pricing-pop').addEventListener('click', (e) => {
            popoutLayer.style.display = 'flex';
        })

    </script>
@endsection



