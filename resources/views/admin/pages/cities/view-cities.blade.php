@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   View Cities
			   <small>cities details</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Cities</a></li>
			   <li class="active">View Cities</li>
		   </ol>
	</section>

	<!-- Main content -->
	 <section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Cities List</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="events" class="table table-bordered table-hover">
							<thead>
								<tr>
									  <th>Id</th>
									  <th>Country Id</th>
									  <th>City Name Eng</th>
									  <th>City Name Srb</th>
									  <th>Zip Code</th>
									  <th>Created At</th>
								</tr>
							</thead>
							<tbody>
								@foreach ( $cities as $city )
									<tr>
										<th>{{ $city->id }}</th>
										<th>{{ $city->country->country_name_eng }}</th>
										<th>{{ $city->city_name_eng }}</th>
										<th>{{ $city->city_name_srb }}</th>
										<th>{{ $city->zip_code }}</th>
										<th>{{ date('M j, Y', strtotime( $city->created_at )) }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>

						{{-- pagination --}}
						<div class="row">
							
							<div class="text-center">
								{!! $cities->links() !!}
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
