@vite([''])



<header id="header-navbar">
    <div id="header-navbar-container">
        <a href="{{route('home')}}"><img src="{{URL::asset("storage/image/logo.png")}}" id="header-logo"></a>
        <div id="header-navbar-middle-tabs">
            <a class="header-links-to-pages" href="{{route('home')}}" >Home</a>
            <a class="header-links-to-pages" href="{{route('show-items')}}">Services</a>
            <a class="header-links-to-pages" href="{{route('aboutUS')}}">About us</a>
            <a class="header-links-to-pages" href="{{route('contactUS')}}">Contact us</a>
            <a class="header-links-to-pages" href="{{route('aqabaCity')}}">Aqaba City</a>
        </div>
        @if(auth()->check())
            <div id="header-navbar-users">
                <a class="header-links-to-pages" href="{{route('profile.edit')}}">Profile</a>
                <a class="header-links-to-pages" href="{{route('logout')}}">Logout</a>
                @if(auth()->user()->is_admin)
                    <a class="header-links-to-pages" href="/admin/index" style="color: gold">Dashboard</a>
                @endif
            </div>
        @else
            <div id="header-navbar-users">
                <a class="header-links-to-pages" href="{{route('register')}}" style="margin-right: 25px;">Register</a>
                <a class="header-links-to-pages" href="{{route('login')}}">Login</a>
            </div>
        @endif
    </div>
    <nav id="for-small-screens">
            <nav class="navbar navbar-dark bg-dark bg-color-home" aria-label="Dark offcanvas navbar">
                <div class="container-fluid">
                  <a href="./home.php"><img src="{{URL::asset("/storage/image/logo.png")}}" id="header-logo"></a>
                  <button class="navbar-toggler border-color-btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbarDark" aria-controls="offcanvasNavbarDark">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbarDark" aria-labelledby="offcanvasNavbarDarkLabel">
                    <div class="offcanvas-header">
                      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                      <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a  class="nav-link" href="./home" >Home</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="./services">Services</a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="./about_us">About us</a>
                        </li>
                        <li class="nav-item">
                        <a  class="nav-link" href="./contact_us">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a  class="nav-link" href="./aqaba-city">Aqaba City</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Contact with me</a>
                        </li>
                        <li>
                            <hr style="color: aliceblue !important;">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('login')}}">Login</a>
                        </li>
                      </ul>
                    </div>
                  </div>
              </nav>

        </nav>
</header>
