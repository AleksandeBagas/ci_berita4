<div class="modal-dialog text-center">
  <div class="container-fluid">
    <div class="col-sm-9 main-section">
    <div class="modal-content">
      <form action="<?php echo base_url(); ?>auth/login" method="post" accept-charset="utf-8">
          <div class="col-md-12 user-img">
            <img src="<?php echo base_url(); ?>/assets/images/user1.png" width="40%" alt="">
          </div>
          <div class="col-md-12">
              <div class="form-group">
              <label>Username</label><br>
              <?php echo form_input($identity);?>
              </div>
              <div class="form-group">

              <label>Password</label><br>
              <?php echo form_input($password);?>
              </div>
              <div class="form-input">
                <button type="submit" class="btn button-success"><i class="fas fa-sign-in-alt"></i>Login</button>
              </div>  
              <div class="form-group forgot">
                <a href="#">Lupa Password</a>
              </div>
          </div>
      </form>
    </div>
  </div> 
  </div>
 
</div>