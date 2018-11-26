<!-- content -->

		<div class="col-md-8">
			<?php foreach ($berita->result_array() as $i) :
				$id=$i['berita_id'];
				$judul=$i['berita_judul'];
				$image=$i['berita_image'];
				$isi=$i['berita_isi'];  
			?>

			<div class="row">
				<div class="col-md-6">
					<img src="<?php echo base_url();?>assets/images/<?php echo $image; ?>" alt="images" class="img-thumbnail">
				</div>
				<div class="col-md-6">
					<a href=""><?php echo $judul; ?></a>
					<p><?php echo word_limiter($isi,20); ?></p>
				</div>
			</div>
		<?php endforeach ?>
		</div>