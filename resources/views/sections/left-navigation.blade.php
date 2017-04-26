<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                <img src="" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li @if($title == 'Admin | Homepage') class="active" @endif>
                <a href="{{ URL::route('admin-home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>

            <li @if($title == 'Admin | Create User' || $title == 'Admin | View Users' || $title == 'Admin | View User' || $title == 'Admin | Edit User') class="active treeview" @else class="treeview" @endif>
                <a href="#">
                    <i class="fa fa-users"></i> <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li @if($title == 'Admin | Create User') class="active" @endif><a href="{{ URL::route('admin-create-user') }}"><i class="fa fa-circle-o"></i> Create User</a></li>
                    <li @if($title == 'Admin | View Users') class="active" @endif><a href="{{ URL::route('admin-view-users') }}"><i class="fa fa-circle-o"></i> View Users</a></li>
                </ul>
            </li>


			<!-- Create Events -->

			<li @if($title == 'Admin | Create Event' || $title == 'Admin | Create Event Type' || $title == 'Admin | View Events') class="active treeview" @else class="treeview" @endif>
                <a href="#">
					<i class="fa fa-calendar" aria-hidden="true"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
					<li @if($title == 'Admin | Create Event Type') class="active" @endif><a href="{{ URL::route('admin-create-event-type') }}"><i class="fa fa-circle-o"></i> Create Event Type</a></li>
                    <li @if($title == 'Admin | Create Event') class="active" @endif><a href="{{ URL::route('admin-create-event') }}"><i class="fa fa-circle-o"></i> Create Event</a></li>
					<li @if($title == 'Admin | View Events') class="active" @endif><a href="{{ URL::route('admin-view-events') }}"><i class="fa fa-circle-o"></i> View Events</a></li>
                </ul>
            </li>

			<!-- Create Languages -->

			<li @if($title == 'Admin | View Languages' || $title == 'Admin | Create Language') class="active treeview" @else class="treeview" @endif>
				<a href="#">
					<i class="fa fa-language" aria-hidden="true"></i> <span>Languages</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li @if($title == 'Admin | Create Language') class="active" @endif><a href="{{ URL::route('admin-create-language') }}"><i class="fa fa-circle-o"></i> Create Language</a></li>
					<li @if($title == 'Admin | View Languages') class="active" @endif><a href="{{ URL::route('admin-view-languages') }}"><i class="fa fa-circle-o"></i> View Languages</a></li>
				</ul>
			</li>

			<!-- Create Countries -->

			<li @if($title == 'Admin | Create Country' ||  $title == 'Admin | View Countries') class="active treeview" @else class="treeview" @endif>
				<a href="#">
					<i class="fa fa-globe" aria-hidden="true"></i> <span>Countries</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li @if($title == 'Admin | Create Country') class="active" @endif><a href="{{ URL::route('admin-create-country') }}"><i class="fa fa-circle-o"></i> Create Country</a></li>
					<li @if($title == 'Admin | View Countries') class="active" @endif><a href="{{ URL::route('admin-view-countries') }}"><i class="fa fa-circle-o"></i> View Countries</a></li>
				</ul>
			</li>

			<!-- Create Cities -->

			<li @if($title == 'Admin | Create City' || $title == 'Admin | View Cities') class="active treeview" @else class="treeview" @endif>
				<a href="#">
					<i class="fa fa-building-o" aria-hidden="true"></i> <span>Cities</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li @if($title == 'Admin | Create City') class="active" @endif><a href="{{ URL::route('admin-create-city') }}"><i class="fa fa-circle-o"></i> Create City</a></li>
					<li @if($title == 'Admin | View Cities') class="active" @endif><a href="{{ URL::route('admin-view-cities') }}"><i class="fa fa-circle-o"></i> View Cities</a></li>
				</ul>
			</li>

			<!-- Create Gifts -->

			<li @if($title == 'Admin | Create Gift' ||  $title == 'Admin | View Gifts') class="active treeview" @else class="treeview" @endif>
				<a href="#">
					<i class="fa fa-gift" aria-hidden="true"></i><span>Gifts</span> <i class="fa fa-angle-left pull-right"></i>
				</a>
				<ul class="treeview-menu">
					<li @if($title == 'Admin | Create Gift') class="active" @endif><a href="{{ URL::route('admin-create-gift') }}"><i class="fa fa-circle-o"></i> Create Gift</a></li>
					<li @if($title == 'Admin | View Gifts') class="active" @endif><a href="{{ URL::route('admin-view-gifts') }}"><i class="fa fa-circle-o"></i> View Gifts</a></li>
				</ul>
			</li>
		</ul>
	</section>
</aside>
