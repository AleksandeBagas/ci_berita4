<div id="carouselExampleIndicators" class="carousel slide mb-5" data-ride="carousel">
  <div class="carousel-inner" >

      <?php 
      foreach ($newpost->result_array() as $i) 
      {?>
        <?php if($i['active']){ ?>
        <div class="carousel-item active">
        <img width="100%" height="370" src="<?php echo base_url();?>/assets/images/upload/<?php echo $i['berita_image']; ?>" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $i['berita_judul']; ?></h5>
        <p><?php echo word_limiter($i['berita_isi'],5); ?></p>
        </div>
        </div>
        <?php } else { ?>
        <div class="carousel-item">
        <img width="100%" height="370" src="<?php echo base_url();?>/assets/images/upload/<?php echo $i['berita_image']; ?>" alt="First slide">
        <div class="carousel-caption d-none d-md-block">
        <h5><?php echo $i['berita_judul']; ?></h5>
        <p><?php echo word_limiter($i['berita_isi'],5); ?></p>
        </div>
      </div>
  <?php } ?>
  <?php } ?>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>