@extends('layout')

@section('content')

<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to($all_sow_v->products_image)}}" alt="" />
								<h3>ZOOM</h3>
							</div>
							<div id="similar-product">
								  
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="{{asset('images/product-details/new.jpg')}}" class="newarrival" alt="" />
								<h2>{{$all_sow_v->product_name}}</h2>
								<p>color: {{$all_sow_v->products_color}}</p>
								<img src="{{asset('images/product-details/rating.png')}}" alt="" />
								<span>
									<span>{{$all_sow_v->products_price}} TK</span>
									<!-- add to card -->
									<form action="{{URL::to('/addtocard')}}" method="post">
										{{csrf_field()}}
									<label>Quantity:</label>
									<input type="text" value="3" name="countyty" />
									<input type="hidden" value="{{$all_sow_v->product_id}}" name="product_id" />
									<button type="Submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
									</form>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<p><b>Condition:</b> New</p>
								<p><b>Brand:</b>{{$all_sow_v->manufactur_nmae}}</p>
								<p><b>Category:</b>{{$all_sow_v->categorey_name}}</p>
								<p><b>size:</b>{{$all_sow_v->products_size}}</p>
								<a href=""><img src="{{asset('images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->

	<div class="category-tab shop-details-tab"><!--category-tab-->
	<div class="col-sm-12">
	<ul class="nav nav-tabs">
		<li><a href="#details" data-toggle="tab">Details</a></li>
		<li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>
		<li><a href="#tag" data-toggle="tab">Tag</a></li>
		<li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
	</ul>
	</div>
	<div class="tab-content">
	<div class="tab-pane fade" id="details" >
		
		<div class="col-sm-12">
			<div class="product-image-wrapper">
			<h3>{{$all_sow_v->products_long_description}}</h3>	
	       </div>
         </div>
     </div>
	<div class="tab-pane fade" id="companyprofile" >
		<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{asset('images/home/gallery4.jpg')}}" alt="" />
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="tag" >

		<div class="col-sm-3">
			<div class="product-image-wrapper">
				<div class="single-products">
					<div class="productinfo text-center">
						<img src="{{asset('images/home/gallery1.jpg')}}" alt="" />
						<h2>$56</h2>
						<p>Easy Polo Black Edition</p>
						<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="tab-pane fade active in" id="reviews" >
		<div class="col-sm-12">
			<ul>
				<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
				<li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
				<li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
			</ul>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			<p><b>Write Your Review</b></p>
			
			<form action="#">
				<span>
					<input type="text" placeholder="Your Name"/>
					<input type="email" placeholder="Email Address"/>
				</span>
				<textarea name="" ></textarea>
				<b>Rating: </b> <img src="{{asset('images/product-details/rating.png')}}" alt="" />
				<button type="button" class="btn btn-default pull-right">
					Submit
				</button>
			</form>
		</div>
	</div>

	</div>
	</div><!--/category-tab-->
@endsection					