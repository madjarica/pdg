@extends('layouts.main')

@section('content')
    @if(Auth::check())
		<div class="alert alert-success" role="alert">
			<strong>{{ 'Hello ' . Auth::user()->first_name . '! You are logged in!'  }}</strong>
		</div>
    @else
        <div class="alert alert-warning" role="alert">
			<strong>{{ 'You are not logged in.' }}</strong>
		</div>
    @endif
@stop
