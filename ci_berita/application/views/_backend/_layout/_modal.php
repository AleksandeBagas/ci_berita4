<div class="navbar navbar-light mb-2 bg-light navbar-expand-lg">
		<div class="col-md-3">
			<ul  class="navbar-nav mr-auto">

            <?php  if($group->id =="1" )
            {
              ?>
 				<li class="nav-item mr-2">
			<a class="btn btn-primary" href="<?php echo base_url('admin/insertBerita'); ?>"><i class="fas fa-plus">Tambah Berita</i></a>					
				</li>
				<li class="nav-item mr-2">
			<a class="btn btn-primary" href="<?php echo base_url('admin/insertKategori'); ?>" ><i class="fas fa-plus">Tambah Kategori</i></a>					
				</li>

			<li class="nav-item mr-2">
				<a class="btn btn-primary" href="<?php echo base_url('admin/insertPenulis'); ?>" ><i class="fas fa-plus">Tambah Penulis</i></a>					
			</li>
			<?php } ?>
			</ul>
		</div>
</div>


