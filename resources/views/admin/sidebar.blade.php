<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>DASHMIN</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                @if (auth()->user()->image == null)
                    <img class="rounded-circle" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="" style="width: 40px; height: 40px;">
                @else
                    <img class="rounded-circle" src="{{URL::asset("storage/image/".auth()->user()->image)}}" alt="" style="width: 40px; height: 40px;">
                @endif
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{auth()->user()->name}}</h6>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="/admin/index" class="nav-item nav-link @yield('Dashboard')"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @yield('Items')" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Items</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/rentOnSite" class="dropdown-item @yield('Items-Rent')">Rent</a>
                    <a href="/admin/sellOnSite" class="dropdown-item @yield('Items-Sell')">Sell</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle @yield('Requests')" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Requests</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="/admin/rr" class="dropdown-item @yield('Requests-Rent')">Rent</a>
                    <a href="/admin/sr" class="dropdown-item @yield('Requests-Sell')">Sell</a>
                </div>
            </div>
            <a href="/admin/admins" class="nav-item nav-link @yield('Admins')"><i class="fa fa-table me-2"></i>Admins</a>
            <a href="/admin/users" class="nav-item nav-link @yield('Users')"><i class="fa fa-chart-bar me-2"></i>Users</a>
        </div>
    </nav>
</div>
