<div class="col-md-2">
    <div class="card">
        <div class="card-header sidebar-card-header">{{ __('sidebar') }}</div>

        <div class="card-body sidebar-card-body">
            <ul class="sidebar-menu">
                <li>
                    <a class="{{ Request::is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                        <i class="fa fa-home"></i>
                        <span class="ps-2">Dashboard</span> </a>
                </li>
                <li>
                    <a class="{{ Request::is('property*') ? 'active' : '' }}" href="{{ route('property.index') }}">
                        <i class="fa fa-home"></i>
                        <span class="ps-2">Property</span> </a>
                </li>
                <li>
                    <a class="{{ Route::is('carousel*') ? 'active' : '' }}" href="{{ route('carousel.index') }}">
                        <i class="fa fa-home"></i>
                        <span class="ps-2">Carousel Img</span> </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-user-circle-o" aria-hidden="true"></i>
                        <span class="ps-2">User Profile</span> </a>
                </li>
                <li>
                    <a class="{{ Request::is('user*') ? 'active' : '' }}" href="{{ route('user.index') }}">
                        <i class="fa fa-user"></i>
                        <span class="ps-2">User List</span> </a>
                </li>

                <li>
                    <a class="{{ Request::is('employee*') ? 'active' : '' }}" href="{{ route('employee.index') }}">
                        <i class="fa fa-home"></i>
                        <span class="ps-2">Employee</span> </a>
                </li>
                <li>
                    <a href="{{ url('https://dashboard.tawk.to/#/dashboard/656c7e1fbfb79148e599a514') }}" target="_blank">
                        <i class="fa fa-comment"></i>
                        <span class="ps-2">Live chat</span> </a>


                </li>
                <li>
                    <a class="{{ Request::is('contact*') ? 'active' : '' }}" href="{{ route('contact.index') }}">
                        <i class="fa fa-home"></i>
                        <span class="ps-2">Support </span> </a>
                </li>

            </ul>
        </div>
    </div>
</div>
