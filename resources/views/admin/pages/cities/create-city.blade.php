@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   Cities
			   <small>Create City</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Event</a></li>
			   <li class="active">Create Event</li>
		   </ol>
	</section>

	<!--Main content-->
	<section class="content">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">
							User details
						</h3>
					</div>
					<form action="{{ URL::route('admin-create-city-post') }}" method="post">
						<div class="box-body">

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								   	<div class="form-group ">
									   	<label for="country_id">Country ID</label>
									   	<select id="country_id" name="country_id" class="form-control" title="countries">
										   	@foreach($countries as $country)
										   		<option value={{ $country->id }}>{{ $country->country_name_eng }}</option>
										   	@endforeach
									   	</select>
								   	</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="city_name_eng">City Name English</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true"></i></span>
										<input id="city_name_eng" type="text" class="form-control" placeholder="City Name English" name="city_name_eng">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="city_name_srb">City Name Serbian</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-building-o" aria-hidden="true"></i></span>
										<input id="city_name_srb" type="text" class="form-control" placeholder="City Name Serbian" name="city_name_srb">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="zip_code">Zip Code</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-code" aria-hidden="true"></i></span>
										<input id="zip_code" type="text" class="form-control" placeholder="Zip Code Textual" name="zip_code">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									{{ csrf_field() }}
									<button class="btn btn-success pull-right">Create City</button>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-hidden-sm col-hidden-xs">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">
							Explanation
						</h3>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, rerum?</p>
								<ul>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
									<li>Lorem ipsum.</li>
								</ul>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam cupiditate labore neque odio odit possimus reiciendis rerum sed tenetur vero.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection
