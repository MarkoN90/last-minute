@extends('layouts.public')
@section('content')

    <style>
        .about {
            margin-top: 100px;
        }

        .about-section-header {
            font-weight: 700;
            font-size: 45px;
            padding: 70px;
            padding-top: 10px;
            padding-bottom: 10px;

        }

        .about-paragraph {
            padding: 70px;
            font-size: 23px;
            color: #959595;
            font-weight: 600;
        }

    </style>

    <div style=" width: 100%;   background-size: cover; margin: 0px;  background-image: url('{{ URL::to('/') }}/iimages/Lastf-Min-English-About-screens.png')">
        <div style=" width: 100%; background-size: cover; margin: 0px;">
            @include('includes.nav')
        </div>
        <div class="container about" >
            <div class="row d-inline-flex">
                <div class="col-12 col-md-6">
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/about-img.png">
                </div>
                <div class="col-12 col-md-6">
                    <h1 class="about-section-header">About Us</h1>

                        <p class="about-paragraph">Last Minute English was founded in China in 2019 by Francis Carlisle, a former IELTS examiner
                            and entrepreneur from the UK, Doris Zhou, an international trade executive, and Tracy Jin, a
                            software systems expert.
                            Our mission is to help our students with their specific English need, whatever that need is. We
                            help students who want to pass English tests like IELTS and TOEFL, as well as businesspeople
                            who need to improve their Business English in areas from Digital Marketing to International
                            Trade Negotiations.
                            We choose our teachers carefully, and believe in quality over quantity. We value honesty and
                            hard work, and we give our teachers the tools they need to change the lives of students all over
                            the world.
                        </p>
                 </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
            <div class="row">
                <div class="col-4 offset-4 col-md-4" style="background: #0cc291; height: 3px; margin-top: 100px; margin-bottom: 35px"></div>
            </div>
                <div class="row">
                    <div class="col-12 col-lg-10 offset-lg-1">
                        <blockquote class="p-4" id="big-header">
                            "Big bold testimonials from a happy customer, can be used to share or repeat  a nice detail about Last Minute English"
                        </blockquote>
                    </div>
                </div>
            <div class="qoute-author">Tommy Brabham</div>
            <div class="qoute-author-company pb-5">Designer of Websites, Warpaint Agency</div>
            <div class="p-lg-5">

            </div>
            </div>
        </div>
        @include('includes.footer')
    </div>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



