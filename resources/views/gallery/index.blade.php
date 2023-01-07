<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" type="image/png" href="img/favicon.png"/>
        <meta charset="utf-8">
        <title>MCGN - Gallery</title>
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

        <!-- Gallery  -->
        <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css'>

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/gallery.css" rel="stylesheet">
    </head>

    <body onload="activeTab()">
        {{-- Header  --}}
        @include('header.index')
        
        
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        
        
        <!-- Contact Start -->
        <div class="container">
            <div class="columns is-multiline">
                <div class="column is-full" id="gallery_control">
                    <span class="gallery_control_option">Nature</span>
                    <span class="gallery_control_option">People</span>
                    <span class="gallery_control_option">Animals</span>
                    <span class="gallery_control_option">Home</span>
                    <span class="gallery_control_option" id="orientation">Orientation</span>
                    <div id="orientation_option_wrapper">
                        <p class="orientation_option" id="any"><span class="check">&#10003;</span><span class="orientation_title" >Any Orientation</span></p>
                        <p class="orientation_option"  id="landscape"><span class="check">&#10003;</span><span class="orientation_title">Landscape</span></p>
                        <p class="orientation_option" id="portrait"><span class="check">&#10003;</span><span class="orientation_title">Portrait</span></p>
                        
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        <img src="https://massivecheerfulgiving.com/images/img-portfolio/aflukope/4.jpeg" class="animate__animated animate__bounceIn nature nature_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1520262494112-9fe481d36ec3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_portrait">
        
                        <img src="https://images.unsplash.com/photo-1483354483454-4cd359948304?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTd8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_landscape">
                        
                    </div>
                    
                    <!-- People -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1551728958-8903303f99e7?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTU2fHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1571513722275-4b41940f54b8?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTQ4fHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1497704009475-24f74754c24e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjI5fHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_landscape">
                    </div>
        
                    <!-- Animals -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1566710582818-d673dc761201?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1563210642-282d42ba500d?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTF8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_landscape">
        
                        <img src="https://images.unsplash.com/photo-1513189643435-49f97650b367?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDd8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
                    </div>
                    
                    <!-- home -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1511389290465-d11bafd4c1df?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzR8fGhvbWUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
                        
                        <img src="https://images.unsplash.com/photo-1511389026070-a14ae610a1be?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8aG9tZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
        
                        <img src="https://images.unsplash.com/photo-1471171768346-d08fb2813c45?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDJ8fGhvbWUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_portrait">	
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1493382051629-7eb03ec93ea2?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8bmF0dXJlJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_landscape">
                        
                        <img src="https://images.unsplash.com/photo-1616423199363-2d0a7fde9884?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODZ8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_landscape">
        
                        <img src="https://images.unsplash.com/photo-1501301466131-127da9f28100?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OXx8bmF0dXJlJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_portrait">
                    </div>	
        
                    <!-- People -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1495302950108-244d94550568?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fHBlb3BsZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_landscape">
                        
                        <img src="https://images.unsplash.com/photo-1516637897631-79d2d7f8a182?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjM5fHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1614283233556-f35b0c801ef1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzIzfHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_portrait">
                    </div>
        
                    <!-- Animals -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1583087253076-6de06c243071?ixid=MnwxMjA3fDB8MHxzZWFyY2h8Nzd8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_landscape">
        
                        <img src="https://images.unsplash.com/photo-1612536057832-2ff7ead58194?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTEyfHxhbmltYWxzJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
        
                        <img src="https://images.unsplash.com/photo-1522968730335-06c9f3840f4b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTQ0fHxhbmltYWxzJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
                    </div>
                    
                    <!-- home -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1526887593587-a307ea5d46b4?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTMwfHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1530077471762-3cef45f920cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTUxfHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
        
                        <img src="https://images.unsplash.com/photo-1490312278390-ab64016e0aa9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTEwfHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
                    </div>
                </div>
                <div class="column is-one-third">
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1520262494112-9fe481d36ec3?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_portrait">
                        
                        <img src="https://images.unsplash.com/photo-1505765050516-f72dcac9c60e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjZ8fG5hdHVyZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_landscape">
                        
                        <img src="https://images.unsplash.com/photo-1520295540401-7498203e655a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8ODN8fG5hdHVyZSUyMG1pbmltYWx8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn nature nature_landscape">
                    </div>
        
                    <!-- People -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1614283232994-7f56849e2359?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=387&q=80" class="animate__animated animate__bounceIn people people_portrait">
                    
                        <img src="https://images.unsplash.com/photo-1455637696518-1bb72679c100?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTIyfHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_landscape">
        
                        <img src="https://images.unsplash.com/photo-1604336089793-28e4a708cac9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDA2fHxwZW9wbGUlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn people people_portrait">
                    </div>
                    
                    <!-- Animals -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1612940960267-4549a58fb257?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1yZWxhdGVkfDV8fHxlbnwwfHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
        
                        <img src="https://images.unsplash.com/photo-1563210666-8e148d2f6480?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTR8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_portrait">
        
                        <img src="https://images.unsplash.com/photo-1520950134832-a75b08dd69a1?ixid=MnwxMjA3fDB8MHxzZWFyY2h8OTN8fGFuaW1hbHMlMjBtaW5pbWFsfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn animals animals_landscape">
                    </div>
                    
                    <!-- home -->
                    <div class="gallery_wrapper">
                        <img src="https://images.unsplash.com/photo-1622624671653-18a35aba747d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTY1fHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
                        
                        <img src="https://images.unsplash.com/photo-1499198116522-4a6235013d63?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTkzfHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_portrait">
        
                        <img src="https://images.unsplash.com/photo-1502920970741-47c1bafc8d49?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjUzfHxob21lJTIwbWluaW1hbHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" class="animate__animated animate__bounceIn home home_landscape">
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
        <script src="js/gallery.js"></script>
        <script src="js/main.js"></script>
    </body>
</html>
