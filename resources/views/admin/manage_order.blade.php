@extends('admin.admin_layout')

			
@section('dasbord_content')
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Manage order</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Order</a></li>
			</ul>

			<div class="row-fluid sortable">		
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
							<p class="alert-success">
					@php
					$massage=Session::get('massage');
                      if($massage){
                      	echo $massage;
                      	Session::put('massage',null);
                      }
					@endphp
                    </p>
						  <thead>
							  <tr>
							  	 <th>Order ID</th>
								  <th>Coustomer Nmae</th>
								  <th>Order total</th>
								  <th>order Statas</th>
								  <th>Actions</th>
							  </tr>
						  </thead>  
						  @foreach($all_sow as $data) 
						  <tbody>
							<tr>
								<td>{{$data->order_id}}</td>
								<td class="center">{{$data->coustomer_name}}</td>
								<td class="center">{{$data->order_total}}</td>
								<td class="center">{{$data->order_statas}}</td>
								<td class="center">
									@if($data->order_statas=='')
									<a class="btn btn-success" href="{{URL::to('/unactive_order/'.$data->order_id)}}">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('/active_order/'.$data->order_id)}}">
										<i class="halflings-icon white thumbs-down"></i>                                           
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/view_order/'.$data->order_id)}}">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delet_order/'.$data->order_id)}}"  id="delet">
										<i class="halflings-icon white trash"></i> 
										
									</a>
								</td>
							</tr>
						  </tbody>
						  @endforeach
					  </table>            
					</div>
				</div><!--/span-->
			
			</div><!--/row-->

@endsection