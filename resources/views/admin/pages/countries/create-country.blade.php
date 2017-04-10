@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   Countries
			   <small>Create Country</small>
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
							Country details
						</h3>
					</div>
					<form action="{{ URL::route('admin-create-country-post') }}" method="post">
						<div class="box-body">
							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label for="country_code">Country Code</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-code" aria-hidden="true"></i></span>
										<input id="country_code" type="text" class="form-control" placeholder="Country Code - Textual" name="country_code" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label for="country_name_eng">Country Name English</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
										<input id="country_name_eng" type="text" class="form-control" placeholder="Country Name English" name="country_name_eng" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<label for="country_name_srb">Country Name Serbian</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-globe" aria-hidden="true"></i></span>
										<input id="country_name_srb" type="text" class="form-control" placeholder="Country Name Serbian" name="country_name_srb" value="">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									{{ csrf_field() }}
									<button class="btn btn-success pull-right">Create Country</button>
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
