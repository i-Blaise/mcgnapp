<!DOCTYPE html>
<html lang="en">
    <head>

        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Causes</title>
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
                        <h2>Popular Causes</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="#">Causes</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        

        <!-- Causes Start -->
        <div class="causes">
            <div class="container">
                <div class="section-header text-center">
                    <p>Popular Causes</p>
                    <h2>Let's know about charity causes around the world</h2>
                </div>



                <div class="row">
                    @foreach ($causes as $causeData)
                    <div class="col-lg-4">
                    <div class="causes-item">
                        <div class="causes-img">
                            <img src="{{ asset($causeData->main_img) }}" alt="Image">
                        </div>
                        <div class="causes-progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $causeData->percentage }}" aria-valuemin="0" aria-valuemax="100">
                                    <span>{{ $causeData->percentage }}%</span>
                                </div>
                            </div>
                            <div class="progress-text">
                                <p><strong>Raised:</strong> @if ($causeData->money_raised == 0)
                                    $0
                                @else
                                    ${{ $causeData->money_raised }}
                                @endif</p>
                                <p><strong>Goal:</strong> ${{ $causeData->goal }}</p>
                            </div>
                        </div>
                        <div class="causes-text">
                            <h3>{{ $causeData->caption }}</h3>
                            <p>{!! $causeData->excerpt !!}</p>
                        </div>
                        <div class="causes-btn">
                            <a href="{{ route('causes.single', ['id' => $causeData->id]) }}" class="btn btn-custom">Learn More</a>
                            <a href="{{ route('donatePage', ['id' => $causeData->id]) }}" class="btn btn-custom">Donate Now</a>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>

                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            {{ $causes->links() }}
                        </ul> 
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            {{ $causes->links() }}
                        </ul> 
                    </div>
                </div> --}}

            </div>
        </div>
        <!-- Causes End -->


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
    </body>
    <script>
        function activeTab() {
        $("#causes").addClass("active");
             }
    </script>
</html>
