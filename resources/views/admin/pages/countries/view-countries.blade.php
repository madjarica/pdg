@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   View Countries
			   <small>countries details</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Countries</a></li>
			   <li class="active">View Countries</li>
		   </ol>
	</section>

	<!-- Main content -->
	 <section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Countries List</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="events" class="table table-bordered table-hover">
							<thead>
								<tr>
									  <th>Id</th>
									  <th>Country Code</th>
									  <th>Country Name Eng</th>
									  <th>Country Name Srb</th>
									  <th>Created At</th>
								</tr>
							</thead>
							<tbody>
								@foreach ( $countries as $country)
									<tr>
										<th>{{ $country->id }}</th>
										<th>{{ $country->country_code }}</th>
										<th>{{ $country->country_name_eng }}</th>
										<th>{{ $country->country_name_srb }}</th>
										<th>{{ date('M j, Y', strtotime( $country->created_at)) }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>
						{{-- pagination --}}

							<div class="text-center">
								{!! $countries->links() !!}
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
