        <!-- Top Bar Start -->
        <div class="top-bar d-none d-md-block">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($contactus as $contactData)
                    <div class="col-md-8">
                        <div class="top-bar-left">
                            <div class="text">
                                <i class="fa fa-phone-alt"></i>
                                <p>{{ $contactData->phone_num1 }}</p>
                            </div>
                            <div class="text">
                                <i class="fa fa-envelope"></i>
                                <p>{{ $contactData->email }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="top-bar-right">
                            <div class="social">
                                @if ($contactData->sm_twitter_status)
                                <a href="{{ $contactData->sm_twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if ($contactData->sm_facebook_status)
                                <a href="{{ $contactData->sm_facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if ($contactData->sm_youtube_status)
                                <a href="{{ $contactData->sm_youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a>
                                @endif
                                @if ($contactData->sm_instagram_status)
                                <a href="{{ $contactData->sm_instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                                @endif
                                @if ($contactData->sm_linkedin_status)
                                <a href="{{ $contactData->sm_linkedin_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                                @if ($contactData->sm_whatsapp_status)
                                <a href="{{ $contactData->sm_whatsapp_link }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                                @endif
                                @if ($contactData->sm_snapchat_status)
                                <a href="{{ $contactData->sm_snapchat_link }}" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container-fluid">
                <a href="{{ route('home') }}" class="navbar-brand">MCGN</a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <a href="{{ route('home') }}" class="nav-item nav-link" id="header">Home</a>
                        <a href="{{ route('about') }}" class="nav-item nav-link" id="about">About Us</a>
                        {{-- <a href="{{ route('about') }}" class="nav-item nav-link" id="about">About</a> --}}
                        <a href="{{ route('causes') }}" class="nav-item nav-link" id="causes">Causes</a>
                        <a href="{{ route('eventsPage') }}" class="nav-item nav-link" id="events">Events</a>
                        <a href="{{ route('blog') }}" class="nav-item nav-link" id="blog">Blog</a>
                        <a href="{{ route('galleryPage') }}" class="nav-item nav-link" id="gallery">Gallery</a>
                        {{-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu">
                                <a href="single.html" class="dropdown-item">Detail Page</a>
                                <a href="service.html" class="dropdown-item">What We Do</a>
                                <a href="team.html" class="dropdown-item">Meet The Team</a>
                                <a href="donate.html" class="dropdown-item">Donate Now</a>
                                <a href="volunteer.html" class="dropdown-item">Become A Volunteer</a>
                            </div>
                        </div> --}}
                        <a href="{{ route('contactPage') }}" id="contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Nav Bar End -->