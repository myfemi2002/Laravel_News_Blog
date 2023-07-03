<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: Neninfo :: Forgot Password</title>
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
                        <strong>Newinfo</strong> <span>Global</span>
                    </div>
                    <div class="card">
                        <div class="header">
                            <p class="lead">Recover my password</p>
                        </div>
                        <div class="body">
                            <p>Please enter your email address below to receive instructions for resetting password.</p>
                            <form class="form-auth-small" method="POST" action="{{ route('password.email') }}"> @csrf
                                <div class="form-group">
                                    <input class="form-control" type="email" name="email" required autofocus placeholder="Email">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">RESET PASSWORD</button>
                                <div class="bottom">
                                    <span class="helper-text">Know your password? <a href="{{ route('login') }}">Login</a></span>
                                </div>
                            </form>
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