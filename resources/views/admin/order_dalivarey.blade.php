@extends('admin.admin_layout')

			
@section('dasbord_content')

<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>coustomer Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
									  <th>Coustomer name</th>
									  <th>Mobile</th>                                          
								  </tr>
							  </thead>   
							  <tbody>
								<tr>
									
									<td class="center">{{ $all_sow->coustomer_name}}</td>
									<td class="center">{{ $all_sow->coustomer_number}}</td>                                       
								</tr>                          
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div><!--/span-->


				<div class="row-fluid sortable">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon align-justify"></i><span class="break"></span>Shiping Details</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table">
							  <thead>
								  <tr>
								  	
									  <th>Username</th>
									  <th>Address</th>
									  <th>Mobile</th>                                         
								  </tr>
							  </thead>   
							  <tbody>
								<tr>

									<td class="center">{{ $all_sow->siping_name}}</td>
									<td class="center">{{ $all_sow->siping_address}} {{ $all_sow->siping_city}} {{ $all_sow->siping_zip}}</td> 
									<td class="center">{{ $all_sow->siping_mobile}}</td>                                     
								</tr>                          
							  </tbody>
						 </table>  
						 <div class="pagination pagination-centered">
						  <ul>
							<li><a href="#">Prev</a></li>
							<li class="active">
							  <a href="#">1</a>
							</li>
							<li><a href="#">2</a></li>
							<li><a href="#">Next</a></li>
						  </ul>
						</div>     
					</div>
				</div>


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
						  <thead>
							  <tr>
							  	  <th>ID</th>
								  <th>Product name</th>
								  <th>Product Price</th>
								  <th>Product Sels quantity</th>
								  <th>Product sub total</th>
							  </tr>
						  </thead>   
						  <tbody>
							<tr>
								<td class="center">{{ $all_sow->product_id}}</td>
								<td class="center">{{ $all_sow->product_name}}</td>
								<td class="center">{{ $all_sow->products_price}}</td>
								<td class="center">{{ $all_sow->products_sels_quntity}}</td>
								<td class="center">{{ $all_sow->order_total}}.TK</td>
							</tr>
						  </tbody>
					  </table>            
					</div>
				</div><!--/span-->
			
			</div>
@endsection