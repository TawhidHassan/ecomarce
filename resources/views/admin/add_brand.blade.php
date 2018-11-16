@extends('admin.admin_layout')

			
@section('dasbord_content')


			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.html">Home</a>
					<i class="icon-angle-right"></i> 
				</li>
				<li>
					<i class="icon-edit"></i>
					<a href="#">Add Brand</a>
				</li>
			</ul>
			
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Brand</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<h1 class="alert-success">
					@php
					$massage=Session::get('massage');
                      if($massage){
                      	echo $massage;
                      	Session::put('massage',null);
                      }
					@endphp
                    </h1>
						<form class="form-horizontal" method="post" action="{{URL::to('/savebrand')}}">
							{{csrf_field()}}
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Brand Name</label>
							  <div class="controls">
								<input type="text" class="input-xlarge" id="" value="" name="manufactur_nmae">
							  </div>
							</div>  

							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Brand Discription</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" rows="3" name="manufactur_description"></textarea>
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Public Statas</label>
							  <div class="controls">
								<input type="checkbox" class="input-xlarge" id="" value="1" name="public_states">
							  </div>
							</div>  

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Add Brand</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   

					</div>
				</div><!--/span-->

			@endsection