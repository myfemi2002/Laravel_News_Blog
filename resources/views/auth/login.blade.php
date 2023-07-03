<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="ThemeMakker">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>:: Newinfo :: Login</title>
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
                        <strong>Big</strong> <span>Bucket</span>
                    </div>
					<div class="card">
                        <div class="header">
                            <p class="lead">Login to your account</p>
                        </div>
                        <div class="body">
                            <form class="form-auth-small"  method="POST" action="{{ route('login') }}"> @csrf
                                <div class="form-group">
                                    <label for="signin-email" class="control-label sr-only">Email</label>
                                    <input  type="email" name="email"  class="form-control"  value="user@domain.com" placeholder="Email">
                                    <small class="form-control-feedback">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                                <div class="form-group">
                                    <label for="signin-password" class="control-label sr-only">Password</label>
                                    <input type="password" name="password" class="form-control" value="thisisthepassword" placeholder="Password">
                                    <small class="form-control-feedback">
                                    @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                    </small>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="fancy-checkbox element-left">
                                        <input type="checkbox"  name="remember">
                                        <span>Remember me</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
                                <div class="bottom">
                                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
                                    <span>Don't have an account? <a href="{{ route('register') }}">Register</a></span>
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
