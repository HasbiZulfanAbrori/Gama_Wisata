<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8"> -->
        <span class="brand-text font-weight-light">Gamawisata</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <!-- <div class="image">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    </div> -->
            <!-- <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div> -->
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column " data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Starter Pages
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('dashboard')}}" class="nav-link">
                                <i class="bi bi-house-door"></i> &nbsp;
                                <p>
                                    Halaman Admin
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('adminnews')}}" class="nav-link">
                                <i class="bi bi-newspaper"></i> &nbsp;
                                <p>
                                    Data News
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('adminproduk')}}" class="nav-link">
                                <i class="bi bi-box-seam"></i> &nbsp;
                                <p>
                                    Data Produk
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('admindownload')}}" class="nav-link">
                                <i class="bi bi-file-earmark-fill"></i> &nbsp;
                                <p>
                                    Data File Download
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('admincontact')}}" class="nav-link">
                                <i class="bi bi-telephone-fill"></i> &nbsp;
                                <p>
                                    Data Contact Us
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('adminprofile')}}" class="nav-link">
                                <i class="bi bi-person-square"></i> &nbsp;
                                <p>
                                    Data Profile
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('adminindex')}}" class="nav-link">
                                <i class="bi bi-play-btn-fill"></i> &nbsp;
                                <p>
                                    Data Header Index
                                </p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview mt-1">
                        <li class="nav-item">
                            <a href="{{route('adminhighlight')}}" class="nav-link">
                                <i class="bi bi-tags-fill"></i> &nbsp;
                                <p>
                                    Data Highlight Index
                                </p>
                            </a>
                        </li>
                    </ul>
                    {{-- <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('adminindex')}}" class="nav-link">
                                Data Header
                            </a>
                        </li>
                    </ul> --}}
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>