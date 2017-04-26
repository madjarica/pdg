@extends('layouts.main')

@section('content')

	<section class="content-header">
		<h1>
		   View Gifts
		   <small>gifts details</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
			<li><a href="#">Gifts</a></li>
			<li class="active">Create Gift</li>
		</ol>
	</section>

	<!--Main content-->
	<section class="content">
	    <div class="row">
		    <div class="col-xs-12">
			    <div class="box">
				    <div class="box-header">
					 	<h3 class="box-title">Gifts List</h3>
				    </div>
				    <!-- /.box-header -->
				    <div class="box-body">
					    <table id="users" class="table table-bordered table-hover">
						    <thead>
							    <tr>
									<th>Id</th>
									<th>Event Id</th>
									<th>Gift Name</th>
									<th>Gift Price</th>
									<th>Gift Count</th>
									<th>Gift Description</th>
									<th>Created At</th>
							    </tr>
						    </thead>
						    <tbody>
								@foreach ($gifts as $gift)
									<tr>
										<th>{{ $gift->id }}</th>
										<th>{{ $gift->event->event_name }}</th>
										<th>{{ $gift->gift_name }}</th>
										<th>{{ $gift->gift_price }}</th>
										<th>{{ $gift->gift_count }}</th>
										<th>{{ substr($gift->gift_description, 0 ,30) }} {{ strlen($gift->gift_description) > 30 ? '...' : '' }}</th>
										<th>{{ date('M j, Y', strtotime( $gift->created_at )) }}</th>
									</tr>
								@endforeach
						    </tbody>
					    </table>

					    {{-- pagination --}}
					    <div class="row">
							<div class="text-center">
								{!! $gifts->links() !!}
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
