@extends('layout')

@section('content')

	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div>
			<div class="register-req">
				<p>PLEASE FILEUP THE FORM............</p>
			</div>

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Shiping details</p>
							<div class="form-one">
								<form method="post" action="{{URL::to('/save_shipping')}}">
									{{csrf_field()}}
									<input type="text" placeholder="Email*" name="siping_email">
									<input type="text" placeholder="First Name *" name="siping_name">
									<input type="text" placeholder="Address 1 *" name="siping_address">
									<input type="text" placeholder="mobile" name="siping_mobile">
									<input type="text" placeholder="city *" name="siping_city">
									<input type="text" placeholder="Zip / Postal Code *" name="siping_zip">
									<input type="submit" placeholder="submit" class="btn btn-warning " style="color: black;">
								</form>
							</div>
						</div>
					</div>					
				</div>
			</div>
			<div class="review-payment">
				<h2>Review & Payment</h2>
			</div>

			
		</div>
	</section> 
@endsection