@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   View Languages
			   <small>languages details</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Languages</a></li>
			   <li class="active">View Languages</li>
		   </ol>
	</section>

	<!-- Main content -->
	 <section class="content">
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-header">
					  <h3 class="box-title">Languages List</h3>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table id="events" class="table table-bordered table-hover">
							<thead>
								<tr>
									  <th>Id</th>
									  <th>Language Code</th>
									  <th>Language Name Eng</th>
									  <th>Language Name Srb</th>
									  <th>Created At</th>
								</tr>
							</thead>
							<tbody>
								@foreach ($languages as $language)
									<tr>
										<th>{{ $language->id }}</th>
										<th>{{ $language->language_code }}</th>
										<th>{{ $language->language_name_eng }}</th>
										<th>{{ $language->language_name_srb }}</th>
										<th>{{ date('M j , Y', strtotime( $language->created_at)) }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>

						{{-- pagination --}}
						<div class="row">
							<div class="text-center">
								{!! $languages->links() !!}
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
