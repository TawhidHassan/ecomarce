<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
	<meta name="description" content="Metro Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{{asset('admin/css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{asset('admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
	<link id="base-style" href="{{asset('admin/css/style.cs')}}s" rel="stylesheet">
	<link id="base-style-responsive" href="{{asset('admin/css/style-responsive.css')}}" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="{{asset('admin/img/favicon.ico')}}">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url({{URL::to('admin/img/bg-login.jpg')}}) !important; }
		</style>
</head>
<body>
		<div class="container-fluid-full">
		<div class="row-fluid">			
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="index.html"><i class="halflings-icon home"></i></a>
						<a href="#"><i class="halflings-icon cog"></i></a>
					</div>
					<h2>Login to your account</h2>
					<p class="alert-danger">
					@php
					$massage=Session::get('massage');
                      if($massage){
                      	echo $massage;
                      	Session::put('massage',null);
                      }
					@endphp
                    </p>
					<form class="form-horizontal" action="{{URL::to('/admin_login_dasbord')}}" method="post">
						{{csrf_field()}}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="admin_email" id="username" type="text" placeholder="type username"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="admin_password" id="password" type="password" placeholder="type password"/>
							</div>
							<div class="clearfix"></div>
							<div class="button-login">	
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
						}
					</form>
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			

	</div><!--/.fluid-container-->
	
		</div><!--/fluid-row-->
	
	<!-- start: JavaScript-->

		<script src="{{asset('admin/js/jquery-1.9.1.min.js')}}"></script>
	    <script src="{{asset('admin/js/jquery-migrate-1.0.0.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>	
		<script src="{{asset('admin/js/modernizr.js')}}"></script>
		<script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('admin/js/jquery.cookie.js')}}"></script>
		<script src="{{asset('admin/js/excanvas.js')}}"></script>
		<script src="{{asset('admin/js/jquery.uniform.min.js')}}"></script>
		<script src="{{asset('admin/js/custom.js')}}"></script>
</body>
</html>
