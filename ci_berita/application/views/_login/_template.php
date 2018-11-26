<!DOCTYPE html>
<html>
  <head>
    <title>Login Berita</title>
    <!-- meta -->
    <?php $this->load->view('_login/layout/_meta');?>

    <!-- css --> 
    <?php $this->load->view('_login/layout/_css');?>

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
  </head>

  <body class="body-auth">

      
      <!-- content -->
    <?php $this->load->view('_login/_content');?> <!-- headerContent --><!-- mainContent -->
    
      <!-- footer -->
    


    <!-- js -->
    <?php $this->load->view('_login/layout/_js');?>
  </body>
</html>