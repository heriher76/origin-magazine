<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <!-- Optionally, you can add icons to the links -->
      <li><a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
      <li class="treeview">

        <a href="#"><i class="fa fa-edit"></i> <span>Profil</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/profile/coffee-shops') }}">Kedai Kopi</a></li>
          <li><a href="{{ url('/admin/profile/communities') }}">Komunitas</a></li>
          <li><a href="{{ url('/admin/profile/figures') }}">Sosok</a></li>
        </ul>
      </li>
      <li class="treeview">

        <a href="#"><i class="fa fa-file"></i> <span>Berita</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/news') }}">List Berita</a></li>
          <li><a href="{{ url('/admin/news/create') }}">Tulis Berita</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-play"></i> <span>Event</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/events') }}">List Event</a></li>
          <li><a href="{{ url('/admin/events/create') }}">Tambah Event</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-chain"></i> <span>Promosi</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/promotions') }}">List Promosi</a></li>
          <li><a href="{{ url('/admin/promotions/create') }}">Tambah Promosi</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-paragraph"></i> <span>Opini</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/opinions') }}">Lihat Opini</a></li>
          <li><a href="{{ url('/admin/opinions/create') }}">Tambah Opini</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#"><i class="fa fa-user"></i> <span>Administrator</span>
          <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/users') }}">Lihat Admin</a></li>
          <li><a href="{{ url('/admin/users/create') }}">Tambah Admin</a></li>
        </ul>
      </li>
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>