<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="{{ asset('img/favicon.png') }}"/>
        <meta charset="utf-8">
        <title>MCGN - Gallery</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="{{ asset('img/favicon.ico') }}" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Gallery  -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>

        <!-- Template Stylesheet -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/gallery.css') }}" rel="stylesheet">
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
        background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url({{ asset($header->header_img) }});
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
                           }
                </style>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Gallery</h2>
                    </div>
                    <div class="col-12">
                        <a href="{{ route('home') }}">Home</a>
                        <a href="#">Gallery</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Gallery Start -->
        <div class="container-gallery">
            <div class="columns is-multiline">
                <div class="column is-full" id="gallery_control">
                    <a href="{{  route('galleryPage')}}"><span class="{{ request('category_id') == null ? 'active_category' : '' }} gallery_control_option">All</span></a>

                    @foreach ($categories as $category)
                    <a href="{{  route('galleryPage', ['category_id' => $category->category_id])  }}"><span class="{{ request('category_id') !== null && request('category_id') ==  $category->category_id ? 'active_category' : '' }} gallery_control_option">{{ ucwords($category->category) }}</span></a>
                    @endforeach



                    {{-- FOR DROPDOWN FILTERS --}}
                    
                    {{-- <span class="gallery_control_option" id="orientation">Orientation</span>
                    <div id="orientation_option_wrapper">
                        <p class="orientation_option" id="any"><span class="check">&#10003;</span><span class="orientation_title" >Any Orientation</span></p>
                        @foreach ($categories as $category)
                        <p class="orientation_option"  id="landscape"><a href="{{  route('galleryPage', ['category_id' => $category->category_id])  }}"><span class="check">&#10003;</span><span class="orientation_title">{{ ucwords($category->category) }}</span></a></p>
                        @endforeach
                        <p class="orientation_option" id="portrait"><span class="check">&#10003;</span><span class="orientation_title">Portrait</span></p>
                        
                    </div> --}}




                </div>
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        @foreach ($images[0] as $column1)
                        {{-- {{ dd($column1) }} --}}
                        <img src="../../admin_assets/images/uploads/galleryImages/{{ $column1['image'] }}" class="animate__animated animate__bounceIn {{ $column1['category'] }}">
                        @endforeach
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        @foreach ($images[1] as $column2)
                        <img src="../../admin_assets/images/uploads/galleryImages/{{ $column2['image'] }}" class="animate__animated animate__bounceIn {{ $column2['category'] }}">
                        @endforeach
                    </div>	
                </div>
                @if (isset($images[2]))
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        @foreach ($images[2] as $column3)
                        <img src="../../admin_assets/images/uploads/galleryImages/{{ $column3['image'] }}" class="animate__animated animate__bounceIn {{ $column3['category'] }}">
                        @endforeach
                    </div>
                </div>
                @endif
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
        {{-- <script src="{{ asset('js/gallery.js') }}"></script> --}}
        <script src="{{ asset('js/main.js') }}"></script>
    </body>
    <script>
        function activeTab() {
        $("#gallery").addClass("active");
             }
    </script>
</html>
