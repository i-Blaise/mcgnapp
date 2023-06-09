<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Contact</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        {{-- Notification  --}}

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
        alpha/css/bootstrap.css" rel="stylesheet">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
        <link rel="stylesheet" type="text/css" 
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    </head>

    <body onload="activeTab()">
        {{-- Header  --}}
        @include('header.index')

        
        <!-- Page Header Start -->
        <div class="page-header">
            <style>
                .page-header {
        position: relative;
        margin-bottom: 45px;
        padding: 210px 0 90px 0;
        text-align: center;
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ $header->header_img }});
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
                           }
                </style>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                @foreach ($contactform as $contactData)
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>{{ $contactData->caption }}</h2>
                </div>
                <div class="contact-img">
                    <img src="{{ $contactData->form_img }}" alt="Image">
                </div>
                @endforeach
                <div class="contact-form">
                        <div id="success"></div>
                        <form 
                        
                        action="{{ route('contactUsForm') }}"
                        method="POST"
                        enctype="multipart/form-data"
                        name="sentMessage" id="contactForm" novalidate="novalidate">
                        @csrf
                        
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name*" required="required" data-validation-required-message="Please enter your name" value="{{ old('name') }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Your Phone Number" data-validation-required-message="Please enter your phone number" value="{{ old('phone_number') }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" data-validation-required-message="Please enter your email" value="{{ old('email') }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject*" value="{{ old('subject') }}" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" name="user_message" placeholder="Message*" required="required" data-validation-required-message="Please enter your message">{{ old('user_message') }}</textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
        <!-- Contact End -->


        <!-- Footer Start -->
        @include('footer.index')
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/parallax/parallax.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <script>
            @if($errors->any())
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "showDuration": "300",
                "timeOut": "20000"
            }
            @foreach ( $errors->all() as $error)
                    toastr.error("{{ $error }}");
            @endforeach
            @endif

            @if(session()->has('success'))
            toastr.options =
            {
                "closeButton" : true,
                "progressBar" : true,
                "showDuration": "300",
                "timeOut": "20000"
            }
            toastr.error("{{ $success }}");
            @elseif (session()->has('failed'))
            toastr.error("{{ $failed }}");
            @endif
        </script>

    <script>
        function activeTab() {
        $("#contact").addClass("active");
             }
    </script>
    </body>
</html>
