<nav class="navbar navbar-expand-lg bg-white shadow-sm border-bottom sticky-top px-4">

    <!-- Sidebar Toggle -->
    <button class="btn btn-light me-3" id="sidebarToggle">
        <i class="fa-solid fa-bars"></i>
    </button>

    <!-- Page Title -->
    <h4 class="mb-0 fw-bold">
        @yield('page-title','Dashboard')
    </h4>

    <div class="ms-auto d-flex align-items-center">

        <!-- Search -->
        <div class="position-relative me-3 d-none d-md-block">

            <input type="text" class="form-control ps-5" placeholder="Search...">

            <i class="fa-solid fa-magnifying-glass position-absolute top-50 start-0 translate-middle-y ms-3 text-muted"></i>

        </div>

        <!-- Notification -->
        <button class="btn btn-light position-relative me-3">

            <i class="fa-regular fa-bell"></i>

            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                3
            </span>

        </button>

        <!-- User Dropdown -->
        <div class="dropdown">

            <a class="d-flex align-items-center text-decoration-none dropdown-toggle" href="#" data-bs-toggle="dropdown">

                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=f59e0b&color=fff" class="rounded-circle" width="42" height="42">

                <div class="ms-2 d-none d-md-block">

                    <div class="fw-semibold">
                        {{ Auth::user()->name }}
                    </div>

                    <small class="text-muted">
                        Administrator
                    </small>

                </div>

            </a>

            <ul class="dropdown-menu dropdown-menu-end shadow">

                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-user me-2"></i>
                        Profile
                    </a>
                </li>

                <li>
                    <a class="dropdown-item" href="#">
                        <i class="fa-solid fa-gear me-2"></i>
                        Settings
                    </a>
                </li>

                <li>
                    <hr class="dropdown-divider">
                </li>

                <li>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button class="dropdown-item text-danger">

                            <i class="fa-solid fa-right-from-bracket me-2"></i>

                            Logout

                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</nav>
