<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Event</title>
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
        <link href="{{ asset('lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/animate/animate.css') }}" rel="stylesheet">
        <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        {{-- <link href="css/style.css" rel="stylesheet"> --}}
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

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
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Join this Event</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('eventsPage') }}">Events</a>
                        <a href="#">Join Event</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Volunteer Start -->
        <div class="section-header text-center">
            <p>Join this Events</p>
            <h2>Join this Event by subscribing to volunteer!</h2>
        </div>

        <div class="volunteer" data-parallax="scroll" data-image-src="https://images.ctfassets.net/rbl6nw8n2c6i/Kk3CG6S2ZWG4j59UQcZ00/9a9ab6aa03db55db7034cc3a63dccee9/Article_image_04__5_.png">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="volunteer-form">

                    @foreach ($eventData as $events)
                    @php $event_name = $events->caption; @endphp
                    @endforeach
                            <form
                            action="{{ route('blog.becomeVolunteer') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="control-group">
                                <input type="hidden" name="event_name" class="form-control" value="{{ $event_name }}" />
                            </div>
                            
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
                    @foreach ($eventData as $events)
                    <div class="col-lg-7">
                        <div class="volunteer-content">
                            <div class="section-header">
                                <p>Become A Volunteer</p>
                                <h2>{{ $events->caption }}</h2>
                            </div>
                            <div class="volunteer-text">
                                <p>
                                    {{ $events->body }}
                                </p>
                            </br>
                            <p style="font-size: 14px"><i class="fa fa-calendar-alt"></i>  {{ $events->date }}</p>
                            <p style="font-size: 14px"><i class="far fa-clock"></i>  {{ $events->begin_time }} - {{ $events->end_time }}</p>
                            <p style="font-size: 14px"><i class="fa fa-map-marker-alt"></i>  {{ $events->location }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Volunteer End -->


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
        <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
        <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('lib/parallax/parallax.min.js') }}"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('js/main.js') }}"></script>


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
    $("#events").addClass("active");
         }
</script>
    </body>
</html>
