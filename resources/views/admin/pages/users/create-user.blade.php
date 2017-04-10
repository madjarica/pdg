@extends('layouts.main')

@section('content')

    <section class="content-header">
        <h1>
            Users
            <small>Create user</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ URL::route('admin-home') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Users</a></li>
            <li class="active">Create User</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">
                            User details
                        </h3>
                    </div>
                    <form action="{{ URL::route('admin-create-user-post') }}" method="post">
                        <div class="box-body">

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="email">Email</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="password">Password</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input id="password" type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="confirm_password">Confirm password</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                        <input id="confirm_password" type="password" class="form-control" placeholder="Confirm password" name="confirm_password">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ">
                                        <label for="status">Status</label>
                                        <select id="status" name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Banned</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ">
                                        <label for="role">Role</label>
                                        <select id="role" name="role" class="form-control">
                                            <option value="1">Organizer</option>
                                            <option value="2">Invitee</option>
                                            <option value="3">Administrator</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group ">
                                        <label for="subscription">Subscription</label>
                                        <select id="subscription" name="subscription" class="form-control">
                                            <option value="1">Yes</option>
                                            <option value="0">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="first_name">First name</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="first_name" type="text" class="form-control" placeholder="First name" name="first_name" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="last_name">Last name</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input id="last_name" type="text" class="form-control" placeholder="Last name" name="last_name" value="">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="phone_number">Phone number</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input id="phone_number" type="text" class="form-control" placeholder="Phone number" name="phone_number" value="">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <label for="language">Language</label>
                                    <div class="input-group ">
                                        <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                                        <select id="language" name="language" class="form-control class-country" title="language">
											@foreach ($languages as $language)
												<option value={{ $language->id }}>{{ $language->language_name_eng }}</option>
											@endforeach
										</select>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									{{ csrf_field() }}
									<button class="btn btn-success pull-right">Create User</button>
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
@stop
