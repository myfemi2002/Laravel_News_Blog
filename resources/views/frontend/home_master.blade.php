<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Newinfo Online News Site</title>
        <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/menu.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/font-awesome.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('frontend/style.css') }}" rel="stylesheet">

        <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=6246375abf1ff50019da8d64&product=inline-share-buttons" async="async"></script>


    </head>
    <body>

        <!-- Header -->
        @include('frontend.body.header')
        <!-- /Header Ends -->


                <!-- Body -->
                @yield('content')
                <!-- /Body Ends -->

    <!-- Footer -->
    @include('frontend.body.footer')
    <!-- /Footer Ends -->



		<script src="{{ asset('frontend/assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
		<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
	</body>
</html>
