<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <!-- Optionally, you can add icons to the links -->

       <li <?php if ($page == 'berita') {echo 'class="active"';} ?>>
        <a href="<?php echo base_url('berita'); ?>">
          <i class="fa fa-home"></i>
          <span>Home</span>
        </a>
      </li>
	</ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>