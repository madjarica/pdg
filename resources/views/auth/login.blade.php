<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>PDG | Login</title>

	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <link type="text/css" rel="stylesheet" href="{{ URL::asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/AdminLTE.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/skins/_all-skins.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ URL::asset('css/main.css') }}">

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading"><h4>Login</h4></div>
					<div class="panel-body">
						<form action="{{ route( 'login-post' ) }} " class="form-horizontal" role="form" method="POST">
							{{ csrf_field() }}

							<div class="form-group has-feedback{{ $errors->has('email') ? ' has email' : '' }}">
								<label for="email" class="col-md-4 control-label">E-mail Address:</label>

								<div class="col-md-6">
									<input id="email" type="email" class="form-control" name='email' value="{{ old('email') }}" required autofocus>
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>

									@if($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group has-feedback{{ $errors->has('password') ? ' has password' : '' }}">
								<label for="password" class="col-md-4 control-label">Password:</label>

								<div class="col-md-6">
									<input id="password" type="password" class="form-control" name='password' value="{{ old('password') }}" required autofocus>
									<span class="glyphicon glyphicon-lock form-control-feedback"></span>

									@if($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
											Rememeber Me
										</label>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-8 col-md-offset-4">
									{{ csrf_field() }}
									<button type="submit" class="btn btn-primary">
										Login
									</button>

									<a href="#" class="btn btn-link">
										Forgot Your Password?
									</a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
