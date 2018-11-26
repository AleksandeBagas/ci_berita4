<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="<?php echo base_url("Admin"); ?>">Admin Panel</a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item <?php if ($page=="Berita") {echo 'active';};?>">
              <a class="nav-link" href="<?php echo base_url("Admin"); ?>">Berita</a> 
            </li>

            <?php  if($group->id =="1" )
            {
              ?>
            <li class="nav-item <?php if ($page=="Kategori") {echo 'active';};?>">
              <a class="nav-link" href="<?php echo base_url("Admin/listKategori"); ?>">Kategori </a>
            </li>

              <li class="nav-item <?php if ($page=="Penulis") {echo 'active';};?>">
              <a class="nav-link" href="<?php echo base_url("Admin/listPenulis"); ?>">Penulis</a>

          </li>
          <?php } ?>

            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>">Portal Berita</a>
            </li>  
          </ul>
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">Logout</a>
          </li>
          </ul>
          <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="#"><?php echo $group->name;?></a>
          </li>
          </ul>

    </div>
</nav>