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

        {{-- Notification  --}}

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
        alpha/css/bootstrap.css" rel="stylesheet">
       
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   
       <link rel="stylesheet" type="text/css" 
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
       
       <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>



    <body onload="activeTab()">
            {{-- Header  --}}
            @include('header.index')


        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">


                    @foreach ($data as $homeData)
                    {{-- {{ dd($homeData->home_slider_caption) }} --}}
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="../admin_assets/images/uploads/homeHeaders/{{ $homeData->home_slider_img }}" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <img src="img/logo.png" class="logo-img" alt="Image">
                            <h1>{{ $homeData->home_slider_caption }}</h1>
                            <p>
                                {!! $homeData->home_slider_text !!}
                            </p>
                            <div class="carousel-btn">
                                @if (isset($homeData->donation_cause))
                                <a class="btn btn-custom" href="{{ route('donatePage', ['id' => $homeData->donation_cause]) }}">Donate Now</a>
                                @endif
                                @if (isset($homeData->video_link))
                                <a class="btn btn-custom btn-play" data-toggle="modal" data-src="{{ $homeData->video_link }}" data-target="#videoModal">Watch Video</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Carousel End -->

        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->
        

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
                                    {!! $aboutData->about !!}
                                </div>
                                <div id="tab-content-2" class="container tab-pane fade">
                                    {!! $aboutData->mission !!}
                                </div>
                                <div id="tab-content-3" class="container tab-pane fade">
                                    {!! $aboutData->vision !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                        
                    <p>What We Do?</p>
                    <h2>We believe that we can save more lifes with you</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-diet"></i>
                            </div>
                            <div class="service-text">
                                <h3>Healthy Food</h3>
                                <p>Fueling underprivileged kids with nutritious meals isn't just about satisfying hunger; it's the secret sauce for academic and physical superpowers! 🥘💪</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-water"></i>
                            </div>
                            <div class="service-text">
                                <h3>Pure Water</h3>
                                <p>We're on a mission to bring clean water to communities in need because it's not just about hydration; it's the key to better health, hygiene, and a brighter future.💧🌍</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-healthcare"></i>
                            </div>
                            <div class="service-text">
                                <h3>Health Care</h3>
                                <p>Ensuring everyone, no matter what life throws their way, has access to quality healthcare is the heartbeat of our mission – because in good health, we find the foundation for vibrant and fulfilling lives.🏥</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-education"></i>
                            </div>
                            <div class="service-text">
                                <h3>Primary Education</h3>
                                <p>We're all about throwing the spotlight on education as the ultimate poverty-busting powerhouse, equipping individuals with the knowledge and skills to craft a future that's not just brighter but also sustainable.📚</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-home"></i>
                            </div>
                            <div class="service-text">
                                <h3>Residence Facilities</h3>
                                <p>We're on a mission to provide shelter, not just as a roof over heads, but as a solid foundation for dignity and security, giving a helping hand to those facing homelessness and laying the groundwork for individuals and families in need. 🏠✨</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-social-care"></i>
                            </div>
                            <div class="service-text">
                                <h3>Social Care</h3>
                                <p>We're on a mission to spread the love by offering social care, creating a tight-knit community where everyone's got each other's backs, ensuring no one faces isolation or hardship alone. 🤝💙</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-home"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">2,000</h3>
                                <p>Homeless Fed</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-charity"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">100</h3>
                                <p>Volunteers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-kindness"></i>
                            <div class="facts-text">
                                <h3 class="facts-plus" data-toggle="counter-up">80</h3>
                                <p>Communities Served</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="flaticon-donation"></i>
                            <div class="facts-text">
                                <h3 class="facts-dollar" data-toggle="counter-up">10,000</h3>
                                <p>Raised</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>
                <div class="owl-carousel causes-carousel">
                    @foreach ($causes as $cause )
                    <div class="causes-item-home">
                        <div class="causes-img">
                            <img src="{{ $cause->main_img }}" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $cause->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                    <span>{{ $cause->percentage }}%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> @if ($cause->money_raised == 0)
                                    $0
                                @else
                                    ${{ $cause->money_raised }}
                                @endif</p>
                                <p><strong>Goal:</strong> ${{ $cause->goal }}</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>{{ $cause->caption }}</h3>
                            <p>{{ $cause->excerpt }}</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{ route('causes.single', ['id' => $cause->id]) }}" class="btn btn-custom">Learn More</a>
                            <a href="{{ route('donatePage', ['id' => $cause->id]) }}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Causes End -->
        
        
        <!-- Donate Start -->
                       
        @foreach ($donatenow as $donatenowdata ) 
        <div class="donate" data-parallax="scroll" data-image-src="{{ $donatenowdata->bg_img }}">
        @endforeach
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        @foreach ($donatenow as $donatenowdata )
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>{{ $donatenowdata->caption }}</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    {{ $donatenowdata->body }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form 
                            action="{{ route('blog.donateNow') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="control-group">
                                    
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Name*" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="text" name="momo_number" value="{{ old('momo_number') }}" class="form-control" placeholder="Momo Number*" required="required" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Email" />
                                </div>
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label class="btn btn-custom active">
                                        <input type="radio" name="amount" value="50" @if (old('amount') == 50)
                                            checked
                                        @elseif (!old('amount')) checked @endif> GH₵50
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="amount" value="100" @if (old('amount') == 100)
                                        checked
                                    @endif > GH₵100
                                    </label>
                                    <label class="btn btn-custom">
                                        <input type="radio" name="amount" value="200" @if (old('amount') == 200)
                                        checked
                                    @endif > GH₵200
                                    </label>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Donate Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    @foreach ($event as $eventData)
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{ $eventData->main_img }}" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>{{ $eventData->processedDate }}</p>
                                    <p><i class="far fa-clock"></i>{{ $eventData->begin_time }} - {{ $eventData->end_time }}</p>
                                    <p><i class="fa fa-map-marker-alt"></i>{{ $eventData->location }}</p>
                                </div>
                                <div class="event-text">
                                    <h3>{{ $eventData->caption }}</h3>
                                    <p>
                                        {{ $eventData->excerpt }}
                                    </p>
                                    <a class="btn btn-custom" href="{{ route('volunteerEvent', ['id' => $eventData->id]) }}">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6">
                        <div class="event-item">
                            <img src="img/event-2.jpg" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>01-Jan-45</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>New York</p>
                                </div>
                                <div class="event-text">
                                    <h3>Lorem ipsum dolor sit</h3>
                                    <p>
                                        Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor
                                    </p>
                                    <a class="btn btn-custom" href="">Join Now</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <!-- Event End -->


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
        </div>
        <!-- Team End -->
        
        
        <!-- Volunteer Start -->
        @foreach ($volunteerform as $volunteerData)
        <div class="volunteer" data-parallax="scroll" data-image-src="{{ $volunteerData->bg_img }}">
        @endforeach
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">
                            <form
                            action="{{ route('blog.becomeVolunteer') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            
                                <div class="control-group">
                                    <input type="text" name="full_name" class="form-control" placeholder="Full Name" required="required" value="{{ old('full_name') }}" />
                                </div>
                                <div class="control-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone Number" required="required" value="{{ old('phone_number') }}" />
                                </div>
                                <div class="control-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" />
                                </div>
                                <div class="control-group">
                                    <textarea class="form-control" name="reason" placeholder="Why you want to become a volunteer?" required="required">{{ old('reason') }}</textarea>
                                </div>
                                <div>
                                    <button class="btn btn-custom" type="submit">Become a volunteer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @foreach ($volunteerform as $volunteerData)
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>{{ $volunteerData->caption }}</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    {{ $volunteerData->body }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Volunteer End -->

        
        
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
                            <img src="{{ $testimonialData->img }}" alt="image">
                            <div class="testimonial-name">
                                <h3>{{ $testimonialData->name }}</h3>
                                <p>{{ $testimonialData->profession }} - {{ $testimonialData->company }}</p>
                            </div>
                        </div>
                        <div class="testimonial-text">
                            <p>
                                {!! $testimonialData->body !!}
                            </p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
        
        
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


        <!-- Blog Start -->
        {{-- <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    @foreach ($blog as $blogData)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ $blogData->preview_img == null ? $blogData->preview_img : $blogData->blog_img }}" alt="Image">
                            </div>
                            <div class="blog-text">
                                <h3><a href="{{ route('blog.single', ['id' => $blogData->id]) }}">{{ $blogData->caption }}</a></h3>
                                <p>
                                    {{ $blogData->excerpt }}
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">{{ $blogData->author_name }}</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div> --}}
        <!-- Blog End -->


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
    </body>

    <script>
        function activeTab() {
        $("#header").addClass("active");
             }
    </script>
</html>
