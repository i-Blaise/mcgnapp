<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-contact">
                    <h2>Our Head Office</h2>
                    @foreach ($contactus as $contactData )
                    <p><i class="fa fa-map-marker-alt"></i>{{ $contactData->location }}</p>
                    <p><i class="fa fa-phone-alt"></i>{{ $contactData->phone_num1 }}</p>
                    @if ($contactData->phone_num2)
                    <p><i class="fa fa-phone-alt"></i>{{ $contactData->phone_num2 }}</p> 
                    @endif
                    <p><i class="fa fa-envelope"></i>{{ $contactData->email }}</p>
                    <div class="footer-social">
                        @if ($contactData->sm_twitter_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_twitter_link }}" target="_blank"><i class="fab fa-twitter"></i></a>
                        @endif
                        @if ($contactData->sm_facebook_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_facebook_link }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        @endif
                        @if ($contactData->sm_youtube_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_youtube_link }}" target="_blank"><i class="fab fa-youtube"></i></a>
                        @endif
                        @if ($contactData->sm_instagram_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_instagram_link }}" target="_blank"><i class="fab fa-instagram"></i></a>
                        @endif
                        @if ($contactData->sm_linkedin_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_linkedin_link }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        @endif
                        @if ($contactData->sm_whatsapp_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_whatsapp_link }}" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        @endif
                        @if ($contactData->sm_snapchat_status)
                        <a class="btn btn-custom" href="{{ $contactData->sm_snapchat_link }}" target="_blank"><i class="fab fa-snapchat-ghost"></i></a>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Popular Links</h2>
                    <a href="{{ route('about') }}">About Us</a>
                    <a href="{{ route('contactPage') }}">Contact Us</a>
                    <a href="{{ route('donate-latest-cause') }}">Donate to Latest Cause</a>
                    <a href="{{ route('eventsPage', ['is_over' => true]) }}">Upcoming Events</a>
                    <a href="{{ route('latest-blog') }}">Latest Blog</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-link">
                    <h2>Useful Links</h2>
                    <a href="#">Terms of use</a>
                    <a href="#">Privacy policy</a>
                    <a href="#">Cookies</a>
                    <a href="#">Help</a>
                    <a href="#">FQAs</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-newsletter">
                    <h2>Newsletter</h2>
                    <form
                    action="{{ route('newsletter-subs') }}"
                    method="POST"
                    enctype="multipart/form-data">
                    @csrf
                        <input class="form-control" name="email" value="{{ old('email') }}" placeholder="Email goes here">
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
                <p>&copy; <a href="#">Massive Cheerful Giving Network</a>, All Right Reserved.</p>
            </div>
            <div class="col-md-6">
                <p>Developed By <a href="http://cv.sonzie.tech/" target="_blank">Blaise S. Mennia</a></p>
            </div>
        </div>
    </div>
</div>