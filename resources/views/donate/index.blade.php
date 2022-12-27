<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>HELPZ - Free Charity Website Template</title>
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
    </head>

    <body>

        {{-- Header  --}}
        @include('header.index')
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Donate Now</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Donate</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Donate Start -->
        <div class="container">
            @if(!$causeID)
            @foreach ($donatenow as $donatenowdata ) 
            <div class="donate" data-parallax="scroll" data-image-src="{{ $donatenowdata->bg_img }}">
            @endforeach
            @else
            @foreach ($causes as $causesData ) 
            <div class="donate" data-parallax="scroll" data-image-src="{{ $causesData->main_img }}">
            @endforeach
            @endif
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        @if(!$causeID)
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
                        @else
                        @foreach ($causes as $causesData )
                        <div class="donate-content">
                            <div class="section-header">
                                <p>Donate Now</p>
                                <h2>{{ $causesData->caption }}</h2>
                            </div>
                            <div class="donate-text">
                                <p>
                                    {{ $causesData->excerpt }}
                                </p>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                    <div class="col-lg-5">
                        <div class="donate-form">
                            <form 
                            action="{{ route('blog.donateNow') }}"
                            method="POST"
                            enctype="multipart/form-data">
                            @csrf
                                <div class="control-group">
                                    <input type="hidden" class="form-control" name="request_page" value="donate" placeholder="Name*" required="required" />

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
    </body>
</html>
