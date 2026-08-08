<aside class="sidebar">

    <!-- Logo -->
    <div class="sidebar-header">
        <a href="{{ route('dashboard') }}" class="logo">
            <img src="{{ asset('assets/images/logo3.png') }}" alt="Logo">
            <span>Arasuvel CMS</span>
        </a>
    </div>

    <!-- Navigation -->
    <ul class="sidebar-menu">

        <li class="menu-title">MAIN</li>

        <li>
            <a href="{{route('dashboard')}}" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <i class="fa-solid fa-gauge-high"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="menu-title">CMS</li>

        <li>
            <a href="{{route('categories')}}" class="{{ request()->routeIs('categories') ? 'active' : '' }}">
                <i class="fa-solid fa-folder-tree"></i>
                <span>Categories</span>
            </a>
        </li>

        <li>
            <a href="{{route('mediapage')}}" class="{{ request()->routeIs('mediapage') ? 'active' : '' }}">
                <i class="fa-solid fa-images"></i>
                <span>Media Library</span>
            </a>
        </li>

        <li>
            <a href="{{route('feedbacklist')}}" class="{{ request()->routeIs('feedbacklist') ? 'active' : '' }}">
                <i class="fa-solid fa-images"></i>
                <span>Inquiry</span>
            </a>
        </li>

        <li class="menu-title">WEBSITE</li>

        <li>
            <a href="#">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <span>Services</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-building"></i>
                <span>Projects</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-blog"></i>
                <span>Blogs</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-envelope"></i>
                <span>Enquiries</span>
            </a>
        </li>

        <li>
            <a href="#">
                <i class="fa-solid fa-gear"></i>
                <span>Settings</span>
            </a>
        </li>
        <li>
            <a href="{{ route('logout') }}">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Logout</span>
            </a>
        </li>
    </ul>

</aside>
