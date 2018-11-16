@extends('layout')

@section('content')


<section id="cart_items">
		<div class="container col-sm-12">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<?php
				$contens=Cart::content();
				?>
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Image</td>
							<td class="description">Name</td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td>Action</td>
						</tr>
					</thead>
					<tbody>
						@foreach($contens as $data)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{URL::to($data->options->image)}}" alt="" style="height: 80px;width: 80px;"></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$data->name}}</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>{{$data->price}}</p>
							</td>
							<td class="cart_quantity">
								<!-- countyty update proseger -->
								<div class="cart_quantity_button">
	                                 <form action="{{URL::to('/updatecart')}}" method="post">
	                                 	{{csrf_field()}}
									<input class="cart_quantity_input" type="text" name="qty" value="{{$data->qty}}" autocomplete="off" size="2">
									<input type="hidden"  value="{{$data->rowId}}" name="rowId">
								     <input type="submit" value="update" class="btn btn-sm btn-danger" name="submit">
								     </form>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">{{$data->total}}</p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/delet_cart/'.$data->rowId)}}"><i class="fa fa-times"></i></a><!--  rowId it is auto built hoy cart vendor thaka .ar ata neddisto prodect delet kora jai -->
							</td>
						</tr>
                       @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

<section id="do_action">
	<div class="container">
		<div class="heading">
			<h3>What would you like to do next?</h3>
			<p>Choose if you have a discount code or reward points you want to use or would like to estimate your delivery cost.</p>
		</div>
		<div class="breadcrumbs">
			<ol class="breadcrumb">
			  <li><a href="#">Home</a></li>
			  <li class="active">Payment method</li>
			</ol>
		</div>
		<div class="paymentCont col-sm-8">
					<div class="headingWrap">
							<h3 class="headingTop text-center">Select Your Payment Method</h3>	
							<p class="text-center">Created with bootsrap button and using radio button</p>
					</div>
					<div class="paymentWrap">
						<form action="{{URL::to('/order_place')}}" method="post">
							{{csrf_field()}}
						<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
				            <label class="btn paymentMethod active">
				            	<div class="method visa"></div>
				                <input type="radio" name="payment_method" checked value="visa"> 
				            </label>
				            <label class="btn paymentMethod active"><b>Hand cash</b>
				            	<div class="method"></div>
				                <input type="radio" name="payment_method" checked value="hand_cash"> 
				            </label>
				            <label class="btn paymentMethod">
				            	<div class="method master-card"></div>
				                <input type="radio" name="payment_method" value="master"> 
				            </label>
				            <label class="btn paymentMethod">
			            		<div class="method amex"></div>
				                <input type="radio" name="payment_method" value="amex">
				            </label>

				            </div> 
				            <div class="footerNavWrap clearfix" style="margin-top: 20px;">
						<input type="submit" name="submit" role="button" value="submit" class="btn btn-success pull-left btn-fyi">
					</div>      
				         </form> 
					</div>
					
				</div>
	</div>
</section><!--/#do_action-->



@endsection