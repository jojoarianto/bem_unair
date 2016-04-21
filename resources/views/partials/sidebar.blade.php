<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="http://res.cloudinary.com/timdonat/image/upload/c_scale,w_136/v1460912092/dummy_photo.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Main Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li @yield('dashboard_sidebar', 'active')><a href="{{ url('home') }}"><i class='fa fa-link'></i> <span>Dashboard</span></a></li>
            <li ><a href="#"><i class='fa fa-link'></i> <span>List Proker</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>Anggota BEM</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#">Link in level 2</a></li>
                    <li><a href="#">Link in level 2</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
