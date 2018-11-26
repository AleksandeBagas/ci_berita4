<!-- content -->
				<div class="card-deck">
					<?php 
					$count = -2;
					$arraySize = count($berita);
					foreach ($berita->result_array() as $i) :
						$id=$i['berita_id'];
						$judul=$i['berita_judul'];
						$image=$i['berita_image'];
						$isi=$i['berita_isi'];  
						$tgl=$i['berita_tanggal']; 

						if($count++ < $arraySize)
						{
					?>
					<div class="card-deck col-md-4 my-2">
				  	<div class="card">
				    	<img class="card-img-top" src="<?php echo base_url();?>assets/images/upload/<?php echo $image; ?>" alt="Card image cap">
				    	<div class="card-body">
				      			<h5 class="card-title"><?php echo $judul; ?></h5>
				     		    <a href="<?php echo base_url().'berita/view/'.$id;?>" class="btn btn-primary">Go somewhere</a>
				    	</div>
				    	<div class="card-footer">
				      		<small class="text-muted"><?php echo $tgl; ?></small>
				    	</div>
				  	</div>
				  </div>
					<?php }endforeach ?>
				</div>

