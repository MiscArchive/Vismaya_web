<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <a href="#" class="logo logo-dark">
            {{-- <span class="logo-sm">
                <img src="{{ asset('uploads/' . $settings->logo) }}" alt="" height="22">
            </span> --}}
            <span class="logo-lg">
                @if (filled($settings))
                    <img src="{{ asset('uploads/' . $settings->logo) }}" alt="" width="50%">
                @endif
            </span>
        </a>
        <a href="#" class="logo logo-light">
            {{-- <span class="logo-sm">
                <img src="{{ asset('uploads/' . $settings->logo) }}" alt="" height="22">
            </span> --}}
            <span class="logo-lg">
                @if (filled($settings))
                    <img src="{{ asset('uploads/' . $settings->logo) }}" alt="" width="50%">
                @endif
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
                    <a href="{{ route('admin.dashboard') }}" class="nav-link menu-link"> <i class="ph-gauge"></i>
                        <span data-key="t-file-manager">Dashboard</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('establishments.index') }}" class="nav-link menu-link"> <i
                            class="ph-buildings"></i>
                        <span data-key="t-file-manager">Establishments</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('branches.index') }}" class="nav-link menu-link"> <i class="bi bi-share"></i>
                        <span data-key="t-file-manager">Branches</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('banners.index') }}" class="nav-link menu-link"> <i class="ph-file-text"></i>
                        <span data-key="t-file-manager">Banners</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonials.index') }}" class="nav-link menu-link"> <i class="ph-table"></i>
                        <span data-key="t-file-manager">Testimonials</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}" class="nav-link menu-link"> <i class=" ph-image-thin
                        "></i>
                        <span data-key="t-file-manager">Gallery</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('card-items.index') }}" class="nav-link menu-link"> <i class="ph-folder-open"></i>
                        <span data-key="t-file-manager">Card Items</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('enquiry.index') }}" class="nav-link menu-link"> <i class="ph-phone-call"></i>
                        <span data-key="t-file-manager">Enquiries</span>
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
