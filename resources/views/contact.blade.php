@extends('layouts.public')
@section('content')
    <div>
        <div style=" width: 100%; hheight: 1772px; background-size: cover; margin: 0px; bbackground-image: url('{{ URL::to('/') }}/images/contact.png')">
            @include('includes.nav')
        <div class="container mt-5 mb-3">
            <h4 class="contact-header last-minute-dark-blue">How we can help?</h4>
            <div class="text-center">
                <p class="contact-subheader text-center">
                    Use the form below to share you enquiry. We will get in touch as soon
                    as possible, thank you.
                </p>
            </div>
            <div class="row">
                <div class="col-6 offset-3 col-md-12 offset-md-0 contact-green-line my-4"></div>
            </div>
            <div class="row mb-5 pb-5">
                <div class="col-12 col-md-6">
                    <form id="contact-form" class="mt-2 pb-4">
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" name="first_name" required placeholder="First Name*">
                        </div>
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" name="last_name" required placeholder="Last Name*">
                        </div>
                        <div class="form-group text-center">
                            <input type="text" class="popout-input" name="email" required placeholder="Email Address*">
                        </div>
                        <div class="form-group text-center">
                            <textarea rows="10" class="popout-input"  name="content" required placeholder="Message*"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="popout-input square-action-button">Submit</button>
                        </div>
                    </form>
                    <div id="contact-message" class="last-minute-dark-blue">Thank you for reaching out we will respond you quickly as possible!</div>
                </div>
                <div class="col-12 col-md-6">
                    <h4 class="p-3">Connect With Us</h4>
                    <ul class="text-white social-icons-list-about">
                        <li class="m-3"><a href="https://www.facebook.com/lastminuteenglishofficial" ><i class="fab fa-facebook-square" style="color:black;"></i></a></li>
                        <li class="m-3"><a href="https://cn.linkedin.com/in/francis-carlisle"><i class="fab fa-linkedin" style="color:black;"></i></a></li>
                        <li class="m-3"><a href=https://www.youtube.com/c/LastMinuteEnglish" ><i class="fab fa-youtube" style="color:black;"></i></a></li>
                    </ul>
                    <img style="width: 100%;" src="{{ URL::to('/') }}/images/Illustration.png">
                </div>
            </div>
        </div>
        </div>
        @include('includes.footer')
    </div>
    <script>
        document.getElementById('contact-form').addEventListener('submit',  (e) => {

            e.preventDefault();

            let form = new FormData(document.getElementById('contact-form'));

            axios.post('/contact', {

                first_name : form.get('first_name'),
                last_name  : form.get('last_name'),
                email : form.get('email'),
                content : form.get('content')

            }).then((response) => {

                if(response.data.success === true) {
                    e.target.style.display = 'none';
                    document.getElementById('contact-message').style.display = 'block';
                }
            })
        })

    </script>
    <script src="{{ asset('js/') }}/app.js"></script>
@endsection



