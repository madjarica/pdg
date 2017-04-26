@extends('layouts.main')

@section('content')

	<section class="content-header">
		   <h1>
			   View Users
			   <small>users details</small>
		   </h1>
		   <ol class="breadcrumb">
			   <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			   <li><a href="#">Users</a></li>
			   <li class="active">View Users</li>
		   </ol>
	</section>

	<!-- Main content -->
	 <section class="content">
	    <div class="row">
	        <div class="col-xs-12">
	        	<div class="box">
		            <div class="box-header">
		              <h3 class="box-title">Users List</h3>
		            </div>
		            <!-- /.box-header -->
		            <div class="box-body">
			            <table id="users" class="table table-bordered table-hover">
			                <thead>
				                <tr>
					                  <th>Id</th>
					                  <th>Email</th>
					                  <th>First Name</th>
					                  <th>Last Name</th>
					                  <th>Phone Number</th>
									  <th>Language</th>
									  <th>Created At</th>
				                </tr>
			                </thead>
			                <tbody>
								@foreach ($users as $user)
									<tr>
										<th>{{ $user->id }}</th>
										<th>{{ $user->email }}</th>
										<th>{{ $user->first_name }}</th>
										<th>{{ $user->last_name }}</th>
										<th>{{ $user->phone_number }}</th>
										<th>{{ $user->language->language_name_eng }}</th>
										<th>{{ date('M j , Y', strtotime( $user->created_at)) }}</th>
									</tr>
								@endforeach
							</tbody>
						</table>

						{{-- pagination --}}
						<div class="row">
							<div class="text-center">
								{!! $users->links() !!}
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
