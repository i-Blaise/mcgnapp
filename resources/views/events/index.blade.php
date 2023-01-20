<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Events</title>
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
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">


        {{-- Notification  --}}

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0- 
        alpha/css/bootstrap.css" rel="stylesheet">
    
        <link rel="stylesheet" type="text/css" 
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>


        <script>
            function info() {
                alert('done');
                die();
            }
        </script>
    </head>

    <body onload="activeTab()">

        {{-- Header  --}}
        @include('header.index')
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Upcoming Events</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="#">Events</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Event Start -->
        <div class="event">
            <div class="container">
                <div class="section-header text-center">
                    <p>Upcoming Events</p>
                    <h2>Be ready for our upcoming charity events</h2>
                </div>
                <div class="row">
                    @foreach ($eventData as $events )
                    <div class="col-lg-6">
                        <div class="event-item">
                            <img src="{{ $events->main_img }}" alt="Image">
                            <div class="event-content">
                                <div class="event-meta">
                                    <p><i class="fa fa-calendar-alt"></i>{{ $events->processedDate }}</p>
                                    <p><i class="far fa-clock"></i>8:00 - 10:00</p>
                                    <p><i class="fa fa-map-marker-alt"></i>New York</p>
                                </div>
                                <div class="event-text">
                                    <h3>{{ $events->caption }}</h3>
                                    <p>
                                        {{ $events->body }}
                                    </p>
                                    @if(!$events->is_over)
                                    <a class="btn btn-custom" href="{{ route('volunteerEvent', ['id' => $events->id]) }}">Join Now</a>
                                    @else
                                    <button class="btn btn-custom" @disabled(true) id="hellobutton" onclick="info()">Join Now</button>
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
    
                        {{ $eventData->links() }}
                    </ul> 
                </div>
            </div>
        </div>



        <!-- Event End -->


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
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            function info() {
                alert('done');
                die();
            toastr.options.timeOut = 10000;
            //     toastr.options =
            // {
            //     "closeButton" : true,
            //     "progressBar" : true,
            //     "showDuration": "300",
            //     "timeOut": "20000"
            // }
            toastr.info("Date has passed");
            }

            document.getElementById("hellobutton").addEventListener("click", notifInfo);
        </script>

        <script>
            function activeTab() {
            $("#events").addClass("active");
                 }
        </script>
    </body>
</html>
