@extends('layouts.main')

@section('content')

	<section class="content-header">
		<h1>
			Gifts
			<small>Create Gift</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Gift</a></li>
			<li class="active">Create Gift</li>
		</ol>
	</section>

	<!--Main content-->

	<section class="content">
		<div class="row">
			<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
				<div class="box box-primary">
					<div class="box-header with-border">
						<h3 class="box-title">
							Gift details
						</h3>
					</div>
					<form action="{{ URL::route('admin-create-gift-post') }}" method="post">
						<div class="box-body">

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="gift_name">Gift Name</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-gift" aria-hidden="true"></i></span>
										<input id="gift_name" type="text" class="form-control" placeholder="Gift Name" name="gift_name" value="">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="gift_price">Gift Price</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-money" aria-hidden="true"></i></span>
										<input id="gift_price" type="text" class="form-control" placeholder="Gift Price" name="gift_price">
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="event_id">Event Id</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
										<select id="event_id" name="event_id" class="form-control class-country" title="event_id">
											@foreach ($events as $event)
												<option value={{ $event->id }}>{{ $event->event_name }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
									<div class="form-group ">
										<label for="gift_count">Gift Count</label>
										<select id="gift_count" name="gift_count" class="form-control">
											<option value="1">One</option>
											<option value="2">Two</option>
											<option value="3">Three</option>
										</select>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
									<div class="form-group ">
										<label for="gift_status">Gift Status</label>
										<select id="gift_status" name="gift_status" class="form-control">
											<option value="1">Active</option>
											<option value="0">Banned</option>
										</select>
									</div>
								</div>
							</div>

							<!--textarea  gift_description and gift_purchase_location -->

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="gift_description">Gift Description</label>
									<div class="form-group">
										<textarea class="form-control" id="gift_description" rows="5" name="gift_description"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="gift_purchase_location">Gift Purchase Location</label>
									<div class="form-group">
										<textarea class="form-control" id="gift_purchase_location" rows="5" name="gift_purchase_location"></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									{{ csrf_field() }}
									<button class="btn btn-success pull-right">Create Gift</button>
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
