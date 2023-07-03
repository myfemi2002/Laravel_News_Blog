<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: Newinfo :: Register</title>
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('backend/assets/vendor/fontawesome/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{ asset('backend/assets/css/main.css')}}" type="text/css">
<link rel="stylesheet" href="{{ asset('backend/assets/css/dark.css')}}" type="text/css">
</head>

<body class="theme-black full-dark">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{ asset('backend/assets/images/brand/icon_black.svg')}}" width="48" height="48" alt="ArrOw"></div>
            <p>Please wait...</p>
        </div>
    </div>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle auth-main">
				<div class="auth-box">
                    <div class="top">
                        <img src="{{ asset('backend/assets/images/brand/icon.svg')}}" alt="Lucid">
                        <strong>Newinfo</strong> <span>Global</span>
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Create an account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small method="POST" action="{{ route('register') }}">@csrf
                                <div class="form-group">
                                    <label for="signup-name" class="control-label sr-only">Name</label>
                                    <input type="text" class="form-control" placeholder="Your name" name="name" required autofocus autocomplete="name" >
                                </div>
                                <div class="form-group">
                                    <label for="signup-email" class="control-label sr-only">Email</label>
                                    <input type="email" class="form-control"  name="email"  required  placeholder="Your email">
                                </div>
                                <div class="form-group">
                                    <label for="signup-password" class="control-label sr-only">Password</label>
                                    <input type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="signup-confirm-password" class="control-label sr-only">Confirm Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">REGISTER</button>
                                <div class="bottom">
                                    <span class="helper-text">Already have an account? <a href="{{ route('login') }}">Login</a></span>
                                </div>
                            </form>
                            <div class="separator-linethrough"><span></span></div>
                        </div>
                    </div>
				</div>
			</div>
		</div>
	</div>
    <!-- END WRAPPER -->
    
<!-- Core -->
<script src="{{ asset('backend/assets/bundles/libscripts.bundle.js')}}"></script>
<script src="{{ asset('backend/assets/bundles/vendorscripts.bundle.js')}}"></script>

<script src="{{ asset('backend/assets/js/theme.js')}}"></script>
</body>
</html>