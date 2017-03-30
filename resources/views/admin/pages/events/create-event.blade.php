@extends('layouts.main')

@section('content')
 <section class="content-header">
        <h1>
            Events
            <small>Create Event</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Events</a></li>
            <li class="active">Create Event</li>
        </ol>
    </section>

	<!-- Main content -->

	<section class="content">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            Event details
                        </h3>
                    </div>
                    <form action="{{ URL::route('admin-create-event-post') }}" method="post">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label for="event_name">Event name</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
                                        <input id="event_name" type="event_name" class="form-control" placeholder="Event name" name="event_name" value="">
                                    </div>
                                </div>
                            </div>

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
								   	<div class="form-group ">
									   	<label for="event_type_id">Event Type ID</label>
									   	<select id="event_type_id" name="event_type_id" class="form-control">
										   	@foreach($event_types as $event_type)
										   		<option value={{ $event_type->id }}>{{ $event_type->event_display_name }}</option>
										   	@endforeach
									   	</select>
								   	</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
									<div class="form-group ">
										<label for="event_status">Event Status</label>
										<select id="event_status" name="event_status" class="form-control">
											<option value="1">Active</option>
											<option value="0">Finished</option>
										</select>
									</div>
								</div>
							</div>

							<!--Event cities and countries id-->
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="event_countries_id">Event Country ID</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
										<select id="event_country_id" name="event_country_id" class="form-control class-country" title="event_country_id">
											@foreach($countries as $country)
												<option value={{ $country->id }}>{{ $country->country_name_eng }}</option>
											@endforeach
										</select>
									</div>
								</div>

								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="event_cities_id">Event City ID</label>
									<div class="input-group ">
										<span class="input-group-addon"><i class="fa fa-globe"></i></span>
										<select id="event_city_id" name="event_city_id" class="form-control class-country" title="event_city_id">
											@foreach($cities as $city)
												<option value={{ $city->id }}>{{ $city->city_name_eng }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<label for="event_date">Event Date</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
										<input id="event_date" type="datetime" class="form-control" placeholder="Year - Month - Day" name="event_date" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<label for="event_start">Event Start</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
										<input id="event_start" type="datetime" class="form-control" placeholder="Year - Month - Day" name="event_start" value="">
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
									<label for="event_end">Event End</label>
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-calendar-o" aria-hidden="true"></i></span>
										<input id="event_end" type="datetime" class="form-control" placeholder="Year - Month - Day" name="event_end" value="">
									</div>
								</div>
							</div>

							<!--textarea event_description and event_address-->

							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="event_address">Event Address</label>
									<div class="form-group">
										<textarea class="form-control" id="event_address" rows="5" name="event_address"></textarea>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									<label for="event_description">Event Description</label>
									<div class="form-group">
										<textarea class="form-control" id="event_description" rows="5" name="event_description"></textarea>
									</div>
								</div>
							</div>

							<!--end of textarea-->

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									{{ csrf_field() }}
									<button class="btn btn-success pull-right">Create Event</button>
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
