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

			<li @if($title == 'Admin | Create Event' || $title == 'Admin | View Users' || $title == 'Admin | Create Event Type' || $title == 'Admin | Edit User') class="active treeview" @else class="treeview" @endif>
                <a href="#">
					<i class="fa fa-calendar" aria-hidden="true"></i> <span>Events</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
					<li @if($title == 'Admin | Create Event Type') class="active" @endif><a href="{{ URL::route('admin-create-event-type') }}"><i class="fa fa-circle-o"></i> Create Event Type</a></li>
                    <li @if($title == 'Admin | Create Event') class="active" @endif><a href="{{ URL::route('admin-create-event') }}"><i class="fa fa-circle-o"></i> Create Event</a></li>
                </ul>
            </li>
		</ul>
	</section>
</aside>
