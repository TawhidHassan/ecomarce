@extends('layout')

@section('content')
<p class="alert-danger">
					@php
					$massage=Session::get('massage');
                      if($massage){
                      	echo $massage;
                      	Session::put('massage',null);
                      }
					@endphp
                    </p>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{URL::to('/coustomer_login')}}" method="post">
							{{csrf_field()}}
							<input type="email" placeholder="Enter your email" name="coustomer_email" required="required" />
							<input type="password" placeholder="Enter your password" name="coustomer_password" required="required" />
							<button type="submit" name="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="{{URL::to('/coustomer_sinup')}}" method="post">
							{{csrf_field()}}
							<input type="text" placeholder="Full Name" name="coustomer_name" required="required"/>
							<input type="email" placeholder="Email Address" name="coustomer_email" required="required"/>
							<input type="text" placeholder="mobile number" name="coustomer_number" required="required"/>
							<input type="password" placeholder="Password" name="coustomer_password" required="required"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection