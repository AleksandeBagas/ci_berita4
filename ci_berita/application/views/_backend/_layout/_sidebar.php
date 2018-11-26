<div class="col-md-2">
    <div class="card bg-primary mb-3 text-center text-white">
    <div class="card-block">
      <h3> TOTAL POST </h3>
      <?php foreach ($jumlahBerita->result_array() as $j): ?>
      <h1 class="display-4"><i class="fas fa-pencil-alt"> <?php echo $j['total']; ?></i></h1>
      <?php endforeach ?>
    </div>
	</div>
    <div class="card bg-primary mb-3 text-center text-white">    
    <div class="card-block">
      <h3> TOTAL KATEGORI </h3>
      <?php foreach ($jumlahKategori->result_array() as $k): ?>
      <h1 class="display-3"><i class="fas fa-pencil-alt"> <?php echo $k['total']; ?></i></h1>
      <?php endforeach ?>
    </div>
  </div>
</div>