<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li><a href="{{ route('admin.dashboard') }}"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
        <li class="header">LABELS</li>
        <li><a href="{{ route('admin.author.index')}}"><i class="fa fa-user"></i> <span>Penulis</span></a></li>
        <li><a href="{{ route('admin.book.index')}}"><i class="fa fa-book"></i> <span>Buku</span></a></li>
        <li><a href="{{ route('admin.borrow.index')}}"><i class="fa fa-pencil"></i> <span>Histori Pinjaman</span></a></li>
        <li><a href="{{ route('admin.user.show')}}"><i class="fa fa-users"></i> <span>User</span></a></li>
      </ul>

      <span ></span>
    </section>
    <!-- /.sidebar -->
  </aside>