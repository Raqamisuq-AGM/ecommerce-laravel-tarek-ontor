@extends('partials.frontend.app')
@section('title')
{{ 'Products' }}
@endsection

@section('content')
<main class="main">
    <nav class="breadcrumb-nav">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('home')}}"><i class="d-icon-home"></i></a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </nav>
    <div class="page-header" style="background-image: url({{asset('frontend/images/page-header/contact-us.jpg')}})">
        <h1 class="page-title font-weight-bold text-capitalize ls-l">Contact Us</h1>
    </div>
    <div class="page-content mt-10 pt-7">
        <section class="contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-6 ls-m mb-4">
                        <div class="grey-section d-flex align-items-center h-100">
                            <div>
                                <h4 class="mb-2 text-capitalize">Headquarters</h4>
                                <p>1600 Amphitheatre Parkway<br>New York WC1 1BA</p>
                                <h4 class="mb-2 text-capitalize">Phone Number</h4>
                                <p>
                                    <a href="tel:#">1.800.458.56</a><br>
                                    <a href="tel:#">1.800.458.56</a>
                                </p>
                                <h4 class="mb-2 text-capitalize">Support</h4>
                                <p class="mb-4">
                                    <a href="#"><span class="__cf_email__"
                                            >email@gmail.com</span></a><br>
                                    <a href="#"><span class="__cf_email__"
                                            >email@gmail.com</span></a><br>
                                    <a href="#">Sale</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 d-flex align-items-center mb-4">
                        <div class="w-100">
                            <form class="pl-lg-2" action="#">
                                <h4 class="ls-m font-weight-bold">Let’s Connect</h4>
                                <p>Your email address will not be published. Required fields are
                                    marked *</p>
                                <div class="row mb-2">
                                    <div class="col-12 mb-4">
                                        <textarea class="form-control" required placeholder="Comment*"></textarea>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input class="form-control" type="text" placeholder="Name *" required>
                                    </div>
                                    <div class="col-md-6 mb-4">
                                        <input class="form-control" type="email" placeholder="Email *" required>
                                    </div>
                                </div>
                                <button class="btn btn-dark btn-rounded">Post Comment<i
                                        class="d-icon-arrow-right"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="store-section mt-6 pt-10 pb-8">
            <div class="container">
                <h2 class="title title-center mb-7 text-normal">Our store</h2>
                <div class="row cols-sm-2 cols-lg-4">
                    <div class="store">
                        <figure class="banner-radius">
                            <img src="{{asset('frontend/images/subpages/store-1.jpg')}}" alt="store" width="280" height="280">
                            <h4 class="overlay-visible">New York</h4>
                            <div class="overlay overlay-transparent">
                                <a class="mt-8" href="mail:#"><span class="__cf_email__"
                                        >email@gmail.com</span></a>
                                <a href="tel:#">Phone: (123) 456-7890</a>
                                <div class="social-links mt-1">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="store">
                        <figure class="banner-radius">
                            <img src="{{asset('frontend/images/subpages/store-2.jpg')}}" alt="store" width="280" height="280">
                            <h4 class="overlay-visible">London</h4>
                            <div class="overlay overlay-transparent">
                                <a class="mt-8" href="mail:#"><span class="__cf_email__"
                                        >email@gmail.com</span></a>
                                <a href="tel:#">Phone: (123) 456-7890</a>
                                <div class="social-links mt-1">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="store">
                        <figure class="banner-radius">
                            <img src="{{asset('frontend/images/subpages/store-3.jpg')}}" alt="store" width="280" height="280">
                            <h4 class="overlay-visible">Oslo</h4>
                            <div class="overlay overlay-transparent">
                                <a class="mt-8" href="mail:#"><span class="__cf_email__"
                                        >email@gmail.com</span></a>
                                <a href="tel:#">Phone: (123) 456-7890</a>
                                <div class="social-links mt-1">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                    <div class="store">
                        <figure class="banner-radius">
                            <img src="{{asset('frontend/images/subpages/store-4.jpg')}}" alt="store" width="280" height="280">
                            <h4 class="overlay-visible">Stockholm</h4>
                            <div class="overlay overlay-transparent">
                                <a class="mt-8" href="mail:#"><span class="__cf_email__"
                                        >email@gmail.com</span></a>
                                <a href="tel:#">Phone: (123) 456-7890</a>
                                <div class="social-links mt-1">
                                    <a href="#" class="social-link social-facebook fab fa-facebook-f"></a>
                                    <a href="#" class="social-link social-twitter fab fa-twitter"></a>
                                    <a href="#" class="social-link social-linkedin fab fa-linkedin-in"></a>
                                </div>
                            </div>
                        </figure>
                    </div>
                </div>
            </div>
        </section>


        <div class="grey-section google-map" id="googlemaps" style="height: 386px"></div>

    </div>
</main>
@endsection

@section('styles')
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/sticky-icon/stickyicon.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('frontend/css/style.min.css')}}">
@endsection

@section('scripts')
<script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('frontend/vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>

<script src="{{asset('frontend/js/main.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key="></script>
<script>
    /*
    Map Settings

        Find the Latitude and Longitude of your address:
            - https://www.latlong.net/
            - http://www.findlatitudeandlongitude.com/find-address-from-latitude-and-longitude/

    */

    // Map Markers
    var mapMarkers = [{
        address: "New York, NY 10017",
        html: "<strong>New York Office<\/strong><br>New York, NY 10017",
        popup: true
    }];

    // Map Initial Location
    var initLatitude = 40.75198;
    var initLongitude = -73.96978;

    // Map Extended Settings
    var mapSettings = {
        controls: {
            draggable: !window.Riode.isMobile,
            panControl: true,
            zoomControl: true,
            mapTypeControl: true,
            scaleControl: true,
            streetViewControl: true,
            overviewMapControl: true
        },
        scrollwheel: false,
        markers: mapMarkers,
        latitude: initLatitude,
        longitude: initLongitude,
        zoom: 11
    };

    var map = $('#googlemaps').gMap(mapSettings);

    // Map text-center At
    var mapCenterAt = function(options, e) {
        e.preventDefault();
        $('#googlemaps').gMap("centerAt", options);
    }
</script>
@endsection