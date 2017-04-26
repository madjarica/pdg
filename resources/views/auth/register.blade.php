<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDG | Register</title>

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
                    <div class="panel-heading"><h4>Register</h4></div>
                    <div class="panel-body">
                        <form action="{{ route('register-post') }}" class="form-horizontal" role="form" method="POST">
                            {{ csrf_field() }}

                            <div class="form-group has-feedback{{ $errors->has('name') ? ' has error' : '' }}">
                                <label for="first_name" class="col-md-4 control-label">First Name:</label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ old('first_name') }}" required autofocus>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                    @if($errors->has('first_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('last_name') ? ' has errors' : '' }}">
                                <label for="last_name" class="col-md-4 control-label">Last Name:</label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ old('last_name') }}" required autofocus>
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>

                                    @if($errors->has('last_name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                             <div class="form-group has-feedback{{ $errors->has('email') ? ' has errors' : '' }}">
                                <label for="email" class="col-md-4 control-label">E-mail Address:</label>

                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>

                                    @if($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('phone_number') ? ' has errors' : '' }}">
                                <label for="phone_number" class="col-md-4 control-label">Phone Number:</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="Phone Number" value="{{ old('phone_number') }}" required autofocus>
                                    <span class="glyphicon glyphicon-phone form-control-feedback"></span>

                                    @if($errors->has('phone_number'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password') ? ' has errors' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password:</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>

                                    @if($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group has-feedback{{ $errors->has('password-confirm') ? ' has errors' : '' }}">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password:</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required>
                                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
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
