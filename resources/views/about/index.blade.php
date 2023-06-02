<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN</title>
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
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="#">About Us {{ $header->header_img }}</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">

                    @foreach ($aboutus as $aboutData )
                    <div class="col-lg-6">
                        <div class="about-img" data-parallax="scroll" data-image-src="{{ $aboutData->aboutus_desc_img }}"></div>
                    </div>

                    
                    <div class="col-lg-6">
                        <div class="section-header">
                            <p>Learn About Us</p>
                            <h2>{{ $aboutData->aboutus_caption }}</h2>
                        </div>
                        <div class="about-tab">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-content-1">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-2">Mission</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#tab-content-3">Vision</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="tab-content-1" class="container tab-pane active">
                                    {{ $aboutData->about }}
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    {{ $aboutData->mission }}
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    {{ $aboutData->vision }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">150</h3>
                                <p>Countries</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">400</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10000</h3>
                                <p>Our Goal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">5000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->


        <!-- Team Start -->
        <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Meet Our Team</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    @foreach ($team as $teamData )
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ $teamData->team_img }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $teamData->name }}</h2>
                                <p>{{ $teamData->position }}</p>
                                <div class="team-social">
                                    @if ($teamData->linkedin != null)
                                    <a href="{{ $teamData->linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if ($teamData->facebook != null)
                                    <a href="{{ $teamData->linkedin }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if ($teamData->instagram != null)
                                    <a href="{{ $teamData->instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                    @endif
                                    @if ($teamData->twitter != null)
                                    <a href="{{ $teamData->twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul class="pagination justify-content-center">
    
                        {{ $team->links() }}
                    </ul> 
                </div>
            </div>
        </div>

        <!-- Team End -->



        <!-- Volunteers Start -->
        {{-- <div class="team">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Amazing Volunteers</p>
                    <h2>Awesome guys behind our charity activities</h2>
                </div>
                <div class="row">
                    @foreach ($volunteers as $volData )
                    <div class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img">
                                <img src="{{ $teamData->team_img }}" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>{{ $teamData->name }}</h2>
                                <p>{{ $teamData->position }}</p>
                                <div class="team-social">
                                    @if ($teamData->linkedin != null)
                                    <a href="{{ $teamData->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                                    @endif
                                    @if ($teamData->facebook != null)
                                    <a href="{{ $teamData->linkedin }}"><i class="fab fa-facebook-f"></i></a>
                                    @endif
                                    @if ($teamData->instagram != null)
                                    <a href="{{ $teamData->instagram }}"><i class="fab fa-instagram"></i></a>
                                    @endif
                                    @if ($teamData->twitter != null)
                                    <a href="{{ $teamData->twitter }}"><i class="fab fa-twitter"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div> --}}
        <!-- Volunteers End -->
        
        
        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What people are talking about our charity activities</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    @foreach ($testimonial as $testimonialData)
                    <div class="testimonial-item">
                        <div class="testimonial-profile">
                            <img src="{{ $testimonialData->img }}" alt="Image">
                            <div class="testimonial-name">
                                <h3>{{ $testimonialData->name }}</h3>
                                <p>{{ $testimonialData->profession }} - {{ $testimonialData->company }}</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                {{ $testimonialData->body }}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Our Head Office</h2>
                            <p><i class="fa fa-map-marker-alt"></i>123 Street, New York, USA</p>
                            <p><i class="fa fa-phone-alt"></i>+012 345 67890</p>
                            <p><i class="fa fa-envelope"></i>info@example.com</p>
                            <div class="footer-social">
                                <a class="btn btn-custom" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-youtube"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-custom" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">About Us</a>
                            <a href="">Contact Us</a>
                            <a href="">Popular Causes</a>
                            <a href="">Upcoming Events</a>
                            <a href="">Latest Blog</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input class="form-control" placeholder="Email goes here">
                                <button class="btn btn-custom">Submit</button>
                                <label>Don't worry, we don't spam!</label>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <div class="row">
                    <div class="col-md-6">
                        <p>&copy; <a href="#">Your Site Name</a>, All Right Reserved.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Designed By <a href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
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
    </body>
    <script>
        function activeTab() {
        $("#about").addClass("active");
             }
    </script>
</html>
