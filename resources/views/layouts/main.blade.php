<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>

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
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    @include('sections.main-header')
    @include('sections.left-navigation')

    <div class="content-wrapper">

        @if(Session::has('notice'))
            <br/>
			<div class="alert alert-info" role="alert">
				<strong>Info:</strong> {{ Session::get('notice')}}
			</div>
        @endif

        @if(Session::has('error'))
            <br/>
			<div class="alert alert-danger" role="alert">
				<strong>Error:</strong> {{ Session::get('error')}}
			</div>
        @endif

        @if(Session::has('success'))
            <br/>
			<div class="alert alert-success" role="alert">
				<strong>Success:</strong> {{ Session::get('success')}}
			</div>
        @endif

        @yield('content')
    </div>

    @include('sections.footer')
</div>

<script src="{{ URL::asset('plugins/jQuery/jQuery-2.2.3.min.js') }}"></script>
<script src="{{ URL::asset('bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ URL::asset('plugins/fastclick/fastclick.js') }}"></script>
<script src="{{ URL::asset('js/app.js') }}"></script>
<script src="{{ URL::asset('js/pages/dashboard.js') }}"></script>
</body>
</html>