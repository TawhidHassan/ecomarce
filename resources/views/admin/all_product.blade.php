@extends('admin.admin_layout')

			
@section('dasbord_content')
			
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">All Category</a></li>
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
						  	 <th>Products ID</th>
						     <th>Products Nmae</th>
					   	     <th>Products sort Discription</th>
						     <th>Products long Discription</th>
						     <th>Category Name</th>
						     <th>Brand Nmae</th>
						     <th>Products Image</th>
							 <th>Products size</th>
						     <th>Products color</th>
				    	     <th>Products price</th>
							 <th>Public Statas</th>
							 <th>Actions</th>
							  </tr>
						  </thead>  
						  @foreach($all_sow as $data) 
						  <tbody>
							<tr>
								<td>{{$data->product_id}}</td>
								<td class="center">{{$data->product_name}}</td>
								<td class="center">{{$data->products_sort_description}}</td>
								<td class="center">{{$data->products_long_description}}</td>
								<td class="center">{{$data->categorey_name}}</td>
								<td class="center">{{$data->manufactur_nmae}}</td>
								<td class="center"><img src="{{URL::to($data->products_image)}}" style="height: 80 px;width: 80px;border-radius: 50%;"></td>
								<td class="center">{{$data->products_size}}</td>
								<td class="center">{{$data->products_color}}</td>
								<td class="center">{{$data->products_price}}</td>
								<td class="center">
									@if($data->products_pulic_statas==1)
									<span class="label label-success">Active</span>
								    @elseif($data->products_pulic_statas==0)
                                    <span class="label label-danger">Unactive</span>
								    @endif
								</td>
								<td class="center">
									@if($data->products_pulic_statas==1)
									<a class="btn btn-success" href="{{URL::to('/unactive_pro/'.$data->product_id)}}">
										<i class="halflings-icon white thumbs-up"></i>                                            
									</a>
									@else
									<a class="btn btn-danger" href="{{URL::to('/active_pro/'.$data->product_id)}}">
										<i class="halflings-icon white thumbs-down"></i>                                            
									</a>
									@endif
									<a class="btn btn-info" href="{{URL::to('/edit_pro/'.$data->product_id)}}">
										<i class="halflings-icon white edit"></i>                                            
									</a>
									<a class="btn btn-danger" href="{{URL::to('/delet_pro/'.$data->product_id)}}"  id="delet">
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