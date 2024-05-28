<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>@yield('title')</title>
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Poster Art - Ultimate eCommerce Template">
    <meta name="author" content="D-THEMES">

    <link rel="icon" type="image/png" href="{{asset('frontend/images/icons/favicon.png')}}">

    <link rel="preload" href="{{asset('frontend/fonts/riode115b.ttf')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <link rel="preload" href="{{asset('frontend/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font"
        type="font/woff2" crossorigin="anonymous">
    <script>
        WebFontConfig = {
            google: {
                families: ['Poppins:300,400,500,600,700,800']
            }
        };
        (function(d) {
            var wf = d.createElement('script'),
                s = d.scripts[0];
            wf.src = 'js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore(wf, s);
        })(document);
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/animate/animate.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/magnific-popup/magnific-popup.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/vendor/sticky-icon/stickyicon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/demo1.min.css')}}">

    @yield('styles')
</head>

<body class="home">
    <div class="page-wrapper">
        <h1 class="d-none">Poster Art</h1>
        @include('layouts.frontend.header')
        @yield('content')
        @include('layouts.frontend.footer')
    </div>

    @include('layouts.frontend.mobile')

    <div class="newsletter-popup newsletter-pop1 mfp-hide" id="newsletter-popup"
        style="background-image: url({{asset('frontend/images/newsletter-popup.jpg')}})">
        <div class="newsletter-content">
            <h4 class="text-uppercase text-dark">Up to <span class="text-primary">20% Off</span></h4>
            <h2 class="font-weight-semi-bold">Sign up to <span>Poster Art</span></h2>
            <p class="text-grey">Subscribe to the Poster Art eCommerce newsletter to receive timely updates from your
                favorite
                products.</p>
            <form action="#" method="get" class="input-wrapper input-wrapper-inline input-wrapper-round">
                <input type="email" class="form-control email" name="email" id="email2"
                    placeholder="Email address here..." required="">
                <button class="btn btn-dark" type="submit">SUBMIT</button>
            </form>
            <div class="form-checkbox justify-content-center">
                <input type="checkbox" class="custom-checkbox" id="hide-newsletter-popup" name="hide-newsletter-popup"
                    required />
                <label for="hide-newsletter-popup">Don't show this popup again</label>
            </div>
        </div>
    </div>

    {{-- <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script> --}}
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/elevatezoom/jquery.elevatezoom.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/owl-carousel/owl.carousel.min.js')}}"></script>

    <script src="{{asset('frontend/js/main.min.js')}}"></script>
    @yield('scripts')
</body>

</html>