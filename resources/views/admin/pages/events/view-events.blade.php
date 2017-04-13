@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   View Events
			   <small>events details</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Events</a></li>
			   <li class="active">View Events</li>
		   </ol>
	</section>

	<!-- Main content -->
	 <section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Events List</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="events" class="table table-bordered table-hover">
							<thead>
								<tr>
									  <th>Id</th>
									  <th>Event Name</th>
									  <th>Event Description</th>
									  <th>Event Address</th>
									  <th>Event Date</th>
									  <th>Created At</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($events as $event)
									<tr>
										<th>{{ $event->id }}</th>
										<th>{{ $event->event_name }}</th>
										<th>{{ substr($event->event_description, 0, 35) }} {{ strlen($event->event_description) > 35 ? '...' : '' }}</th>
										<th>{{ substr($event->event_address, 0, 30) }} {{ strlen($event->event_address) > 30 ? '...' : '' }}</th>
										<th>{{ $event->event_date }}</th>
										<th>{{ date('M j , Y', strtotime( $event->created_at)) }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>

						{{-- pagination --}}
						<div class="row">
							<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
								<br>
								{{ (count($id)) ? 'Showing ' . $events->first()->id . ' to ' . $event->id . ' of ' . count($id) . ' entries.' : 'No results.'}}
							</div>

							<div class="text-center">
								{!! $events->links() !!}
							</div>
						</div>
						<!-- /.row -->
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</section>
	<!-- /.content -->
@endsection
