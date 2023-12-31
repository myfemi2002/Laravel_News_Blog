@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: 404 :: Newinfo News</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome/css/font-awesome.min.css') }}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('backend/assets/css/dark.css') }}" type="text/css">
</head>

<body class="theme-black full-dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('backend/assets/images/brand/icon_black.svg') }}" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="{{ asset('backend/assets/images/brand/icon.svg') }}" alt="Lucid">
                        <strong>Newinfo</strong> <span>News</span>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h3 class="w-100 text-center">
                                <span class="clearfix title">
                                    <span class="number left">404</span>
                                    <span class="text">Oops! Page Not Found</span>
                                </span>
                            </h3>
                        </div>
                        <div class="body">
                            <p>The page you were looking for could not be found, please <a href="javascript:void(0);">contact us</a> to report this
                                issue.</p>
                            <div class="margin-top-30">
                                <a href="javascript:history.go(-1)" class="btn btn-default"><i class="fa fa-arrow-left"></i> <span>Go
                                        Back</span></a>
                                <!-- <a href="index.html" class="btn btn-primary"><i class="fa fa-home"></i> <span>Home</span></a> -->
                            </div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <!-- END WRAPPER -->

<!-- Core -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js') }}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js') }}"></script>

<script src="{{ asset('backend/assets/js/theme.js') }}"></script>
</body>
</html>
