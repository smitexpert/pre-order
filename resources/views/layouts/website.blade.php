<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>VEX Bootstrap 4 Product Landing Page </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <!-- Fonts -->
    <!-- Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">

    <!-- CSS -->
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="{{ asset('/website') }}/plugins/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/website') }}/plugins/themefisher-fonts/themefisher-fonts.css">
    <link rel="stylesheet" href="{{ asset('/website') }}/plugins/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="{{ asset('/website') }}/plugins/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/website') }}/css/style.css">
    <!-- Responsive Stylesheet -->
</head>

<body id="body">

    <div id="preloader-wrapper">
        <div class="pre-loader"></div>
    </div>

    <!-- navigation -->
    @yield('contents')
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-12">
                    <div class="block">
                        <a href="{{ url('/') }}" class="footer-logo mb-4">স্ক্রাস রিমুভার</a>
                        <ul class="list-inline footer-menu">
                            <li class="list-inline-item">
                                <a href="{{ route('order.verify') }}">আপনার অর্ডারটি দেখুন</a>
                            </li>
                        </ul>
                        <p class="copyright-text">Copyright &copy; <a href="http://www.shobi.com.bd/">SHOBI.COM.BD</a>|
                            All right reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Js -->
    <script src="{{ asset('/website') }}/plugins/jquery-2.1.1.min.js"></script>
    <script src="{{ asset('/website') }}/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="{{ asset('/website') }}/plugins/owl-carousel/owl.carousel.min.js"></script>
    <script src="{{ asset('/website') }}/plugins/magnific-popup/jquery.magnific.popup.min.js"></script>
    <script src="{{ asset('/website') }}/js/main.js"></script>

    @stack('scripts')

</body>
</html>