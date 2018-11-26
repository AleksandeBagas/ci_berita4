<!DOCTYPE html>
<html>
  <head>
    <title>Berita Online</title>
    <!-- meta -->
    <?php $this->load->view('_frontend/layout/_meta');?>

    <!-- css --> 
    <?php $this->load->view('_frontend/layout/_css'); ?>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  </head>

  <body>
    <?php $this->load->view('_frontend/layout/_header'); ?>
      <!-- header -->
       <!-- nav -->
      
      <!-- sidebar -->
      <?php $this->load->view('_frontend/layout/_nav'); ?>
      
      <!-- content -->

      <div class="container">
            <?php $this->load->view('_frontend/_newpost'); ?>
          <div class="row">
          <div class="col-md-9 mb-5">
              <?php $this->load->view($content);?>
        </div>
        <div class="col-md-3 mb-3">
              <?php $this->load->view('_frontend/_sidebar'); ?>
        </div>
          </div>
      </div>
 <!-- headerContent --><!-- mainContent -->
    
      <!-- footer -->
      <?php $this->load->view('_frontend/layout/_footer'); ?>
    <!-- js -->
    <?php $this->load->view('_frontend/layout/_js'); ?>
  </body>
</html>

