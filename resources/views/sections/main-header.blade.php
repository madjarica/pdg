<header class="main-header">

    <a href="{{ URL::route('admin-home') }}" class="logo">
        <span class="logo-mini"><b>E</b>F</span>
        <span class="logo-lg"><b>Errand</b> Fellow</span>
    </a>

    <nav class="navbar navbar-static-top" role="navigation">
		<ul class="nav navbar-nav navbar-right">
				<li><a href="{{ route('register') }}"><strong>Register</strong></a></li>
			@if(Auth::check())
		        <li class="dropdown">
		            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
					  {{ Auth::user()->first_name . ' ' . Auth::user()->last_name }}<span class="caret"></span></a>
		            <ul class="dropdown-menu">
			            {{-- <li><a href="#">Action</a></li> --}}
						<li role="separator" class="divider"></li>
						<li><a href="{{ route( 'logout' ) }}">Logout</a></li>
					</ul>
				</li>
			@else

				<a href="{{ route( 'login' ) }}" class="btn btn-info btn-lg active" role="button" aria-pressed="true">Login</a>

			@endif
		</ul>
		
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">

				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">

					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">

						</li>


						<li class="user-footer">
							<div class="pull-left">
							</div>
							<div class="pull-right">
							</div>
						</li>
					</ul>
				</li>

			</ul>
		</div>

	</nav>
</header>
