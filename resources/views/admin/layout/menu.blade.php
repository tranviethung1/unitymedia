<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('adminlte/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('adminlte/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin/')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>General setting</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>
                            Works
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin/work/')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Work list</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin/work/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Work</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-music"></i>
                        <p>
                            Library music
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin/library-music/')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List library</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin/library-music/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add library</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-play"></i>
                        <p>
                            Radio
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{asset('admin/radio/')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>List radio</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{asset('admin/radio/create')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Radio</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="{{asset('admin/about-us')}}" class="nav-link">
                        <i class="nav-icon fas fa-address-card"></i>
                        <p>
                            About us
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
