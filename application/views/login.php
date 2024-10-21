<?php
include('header3.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>User Login</h2>
      <ol>
        <li><a href="<?php echo site_url()?>E_tech">Home</a></li>
        <li>User Login</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->


<!-- ======= Login Section ======= -->

<div class="container" style="padding-top: 15px; padding-bottom: 25px;">
  <center>
    <div class="col-lg-4">
      <form action="<?php echo site_url()?>Login/auth" method="post" role="form" class="">
        <p style="color: red"><b><?php echo $this->session->flashdata('Activate');?></b> </p>
        
        <strong style="color: red"><?php echo $this->session->flashdata('msg')?></strong>
        <div class="form-group mt-3">
         <?php 
         ?>
         <h3>Provide Credencial to get started</h3>
       </div>                
       <div class="form-group mt-3">
        <b style="color: red"><?php echo form_error('username');?></b>
        <input type="text" name="username" class="form-control" id="username" placeholder="Your Username" required>
      </div>
      <div class="form-group mt-3 ">
        <b style="color: red"><?php echo form_error('password');?></b>
        <input type="password" class="form-control" name="password" id="password" placeholder="Your password" required>
      </div>
      <div class="form-group mt-3">
        <div class="text-center"><button type="submit" class="btn btn-primary">Login</button></div>
      </div>
    </form>
  </div><!-- End Contact Form -->
</center>

</div>
<!-- End login Section -->

<?php
include('footer3.php');
?>