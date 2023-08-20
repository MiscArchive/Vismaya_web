<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="22">
            </span>
        </a>
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="22">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-3xl header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav mt-5" id="navbar-nav">




                {{-- <li class="menu-title"><span data-key="t-menu">Menu</span></li> --}}
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('establishments.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Establishments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('branches.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Branches</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('banners.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Banners</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Testimonials</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Card Items</span>
                    </a>
                </li>



            </ul>
        </div>
        </li>



        </ul>
    </div>
    <!-- Sidebar -->
</div>

<div class="sidebar-background"></div>
</div>
