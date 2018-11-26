<section class="mb-3">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url(); ?>">NEWS<span class="sr-only">(current)</span></a>
      </li>

      <?php foreach ($listKategori->result_array() as $kategori):

        
      ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('berita/kategori/').$kategori['cat_id']; ?>"><?php echo $kategori['name'];?></a>
      </li>
    <?php endforeach ?>

    </ul>

    <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo base_url(); ?>berita/cari/">
      <input class="form-control mr-sm-2" type="search" name="cari" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>
</section>