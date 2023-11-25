<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <div class="bg-light text-center">
            <a class="sidebar-brand" href="{{route('admin-index')}}">
                <!-- <span class="align-middle">SSL Spaces</span> -->
                <img class="img-fluid" style="height: 48px;" src="{{asset('images/SSL logo-01.png')}}" alt="">
            </a>
        </div>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('admin-index')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>


            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('pages-profile')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                </a>
            </li>

            <!-- <li class="sidebar-item">
                 <a class="sidebar-link" href="{{route('pages-sign-in')}}">
                     <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="{{route('pages-sign-up')}}">
                     <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
                 </a>
             </li> -->

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-features')}}">
                    <i class="align-middle" data-feather="book"></i> <span class="align-middle">Features</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-lern&grow')}}">
                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Lern & Grow</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-gallery')}}">
                    <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Gallery</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{ route('dashboard_blogs.index') }}">
                    <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Blogs</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-pricing')}}">
                    <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Pricing</span>
                </a>
            </li>

            <!-- <li class="sidebar-header">
                 Tools & Components
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="">
                     <i class="align-middle" data-feather="square"></i> <span class="align-middle">Buttons</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href=" ">
                     <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Forms</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="ui-cards.html">
                     <i class="align-middle" data-feather="grid"></i> <span class="align-middle">Cards</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="ui-typography.html">
                     <i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Typography</span>
                 </a>
             </li>

             <li class="sidebar-item">
                 <a class="sidebar-link" href="icons-feather.html">
                     <i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Icons</span>
                 </a>
             </li> -->

            <li class="sidebar-header">
                Plugins & Addons
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-charts')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Charts</span>
                </a>
            </li>

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('index-map')}}">
                    <i class="align-middle" data-feather="map"></i> <span class="align-middle">Maps</span>
                </a>
            </li>
        </ul>
    </div>
</nav>