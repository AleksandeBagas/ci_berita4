<!DOCTYPE html>
<html>
  <head>
    <title>Portal Admin</title>
    <!-- meta -->
    <?php $this->load->view('_backend/_layout/_meta');?>

    <!-- css --> 
    <?php $this->load->view('_backend/_layout/_css');?>

    <!-- jQuery 2.2.3 -->
  </head>

  <body>
    <header>
    <div class="row">
      <div class="col-md-12">
             <?php $this->load->view('_backend/_layout/_nav');?>
      </div>
 
    </div>

    <div class="row">
      <div class="col-md-12">
             <?php $this->load->view('_backend/_layout/_modal');?>
      </div>
    </div>
    </header>
    <div class="row justify-content-center">
          <?php $this->load->view($content);?>
          <?php $this->load->view('_backend/_layout/_sidebar');?>
    </div>
  <!-- footer -->
    <?php $this->load->view('_backend/_layout/_footer'); ?>
    <!-- js -->
    <?php $this->load->view('_backend/_layout/_js'); ?>
    <?php $this->load->view('_backend/_layout/_jscript'); ?>
  </body>
</html>