<!-- content -->
<?php 
	$b=$beritautama->row_array();
?>
			<h3><?php echo $b['berita_judul'];?></h3><hr/>
			<h6>Total Pembaca : <?php echo $b['berita_count']; ?></h6>
			<img src="<?php echo base_url().'assets/images/upload/'.$b['berita_image'];?>" width="100%"><hr>
			<p class="text-justify"><?php echo $b['berita_isi'];?></p>
			<p>Kategori : <button type="button" class="btn btn-primary"><?php echo $b['name'];?></button></p>

			<h3>Terkini Lainnya</h3>
			<hr>
			<?php $this->load->view('_frontend/_bottomviews'); ?>
