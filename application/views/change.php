<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Change User Credencial</h2>
      <ol>
        <li><a href="<?php echo site_url()?>E_tech/admin_home">Home</a></li>
        <li>Credencial Panel</li>
      </ol>
    </div>
  </div>
</div><!-- End Breadcrumbs -->
<div class="message"></div>

<!-- ======= Service Section ======= -->
<section id="blog" class="blog" style="padding-top: 15px;">
  <div class="container" data-aos="fade-up">
    <center>
      <div class="col-lg-4">
       <div class="sidebar">
        <h5 class="text-success">
              <?php echo $this->session->flashdata('message') 
              ?>        
            </h5>
        <?php 
        if(isset($basic_info))
        {
          ?>
          <h5>Update Existing Credencials</h5>
          <form action="<?php echo base_url()?>login/update_user" method="post" role="form" class="row" enctype="multipart/form-data">
            <div class="form-group mt-3">
              <label>Username</label>
              <input type="text" name="username" class="form-control" id="username" value="<?php echo 
              $basic_info->username;?>">
            </div>
            <div class="form-group mt-3 ">
              <label>Password</label>
              <input type="text" class="form-control" name="password" id="password" value="<?php echo 
              $basic_info->password;?>">
          </div>
          <div class="form-group mt-3 ">
                <label>User Type</label>
                <select class="form-control" name="user_level" id="user_level" >
                  <option value="<?php echo $basic_info->user_level?>"><?php echo $basic_info->user_level?></option>
                  <option value="admin">Administrator</option>
                  <option value="staff">Staff</option>                 
                </select>
              </div>
             <div class="form-group mt-3 ">
                <label>Status</label>
                <select class="form-control" name="status" id="status" >
                  <option value="<?php echo $basic_info->status?>"><?php echo $basic_info->status?></option>
                  <option value="active">Active</option>
                  <option value="incative">Inactive</option>                 
                </select>
              </div>
          <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <div class="button-grou">
                <button type="submit" name="update_user" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                <button type="reset" class="btn btn-danger"><i class="bi bi-trash"></i>cancle</button>
              </div>
            </ul>
          </div><!-- End blog pagination -->
        </form>
        <?php
      }
      ?>
    </div><!-- End Blog Sidebar -->
  </div>
</center>
</div>
</section><!-- End Blog Section -->

<?php
include('footer2.php');
?>s