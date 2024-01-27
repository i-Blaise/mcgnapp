<!DOCTYPE html>
<html lang="en">
    <head>
        {{-- FOR GOOGLE AD SENSE  --}}
        <meta name="google-adsense-account" content="ca-pub-8400169039838776">
        
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Blogs</title>
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
                        <h2>From Blog</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Blog</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Blog Start -->
        <div class="blog">
            <div class="container">
                <div class="section-header text-center">
                    <p>Our Blog</p>
                    <h2>Latest news & articles directly from our blog</h2>
                </div>
                <div class="row">
                    @foreach ($blogs as $blogsData)
                    <div class="col-lg-4">
                        <div class="blog-item">
                            <div class="blog-img">
                                <img src="{{ $blogsData->blog_img }}" alt="Image">
                            </div>
                            <div class="blog-text">
                                {{-- <h3><a href="{{ URL::to('blog/'. $blogsData->id) }}">{{ $blogsData->caption }}</a></h3> --}}
                                <h3><a href="{{ route('blog.single', ['id' => 1]) }}">{{ $blogsData->caption }}</a></h3>
                                <p>
                                    {{ $blogsData->excerpt }}
                                </p>
                            </div>
                            <div class="blog-meta">
                                <p><i class="fa fa-user"></i><a href="">Admin</a></p>
                                <p><i class="fa fa-comments"></i><a href="">15 Comments</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="pagination justify-content-center">
                            {{-- <li class="page-item"><a class="page-link" href="{{ $blogs->previousPageUrl() }}">Previous</a></li> --}}

                            {{-- <li class="page-item"><a class="page-link" href="{{ $blogs->url(1) }}">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">{{ $blogs->link() }}</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li> --}}
                            {{-- <li class="page-item"><a class="page-link" href="{{ $blogs->nextPageUrl() }}">Next</a></li> --}}

                            {{ $blogs->links() }}
                        </ul> 
                    </div>
                </div>
            </div>
        </div>
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
    </body>
    <script>
        function activeTab() {
        $("#blog").addClass("active");
             }
    </script>
</html>
