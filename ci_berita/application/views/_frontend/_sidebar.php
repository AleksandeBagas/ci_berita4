

      <h4>MOST POPULAR</h4>
      <hr>
	<div class="list-group list-group-flush">

	<?php 
	$count = -3;
	$arraySize = count($sidebar);
	foreach ($sidebar->result_array() as $i) : 
		if($count++ < $arraySize)
			{ ?>
  		<a href="<?php echo base_url().'berita/view/'.$i['berita_id'];?>" class="list-group-item list-group-item-action"><h6><?php echo $i['berita_judul']; ?></h6>
  		<span class="badge badge-primary badge-pill">Dilihat <?php echo $i['berita_count'];?> Kali</span>	
  		</a>

 	<?php } endforeach ?>
	</div>








