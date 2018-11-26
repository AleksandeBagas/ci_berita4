<!-- content -->
			<h4>Berita Terkini</h4>
			<hr>

			<div class="row justify-content-start">
					<?php foreach ($berita->result_array() as $i) :
						$id=$i['berita_id'];
						$judul=$i['berita_judul'];
						$image=$i['berita_image'];
						$isi=$i['berita_isi'];  
						$tgl=$i['berita_tanggal']; 
					?>
				<div class="card-deck col-4-lg col-md-4 my-4 " style="margin:0px">
				  	<div class="card">
				  		<div class="inner">
				  		<img class="card-img-top" src="<?php echo base_url();?>assets/images/upload/<?php echo $image; ?>" alt="Card image cap">
				  		</div>

				    	<div class="card-body">
				    		<div class="row">
				    		<h6 class="card-title"><?php echo $judul; ?></h6>
				    		</div>
				    		<div class="row">

				      			<a href="<?php echo base_url().'berita/view/'.$id;?>" class="btn btn-primary">Selengkapnya . . .</a>
				      			</div>

				    	</div>
				    	<div class="card-footer">
				      		<small class="text-muted"><?php echo $tgl; ?></small>
				    	</div>
				  	</div>

				</div>					
			<?php endforeach ?>
		</div>
			<!-- </div> -->
