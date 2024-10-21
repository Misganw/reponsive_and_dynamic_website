<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Service Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_service">Home</a></li>
        <li>Service Panel</li>
        <li><a href="<?php echo site_url()?>a_service/add_service" class="btn btn-primary"><i class="bi bi-plus"></i>Add service</a></li>
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
        <h5>Service Registration and Modification Page</h5>
       <div class="sidebar">
        <?php 
        if(isset($basic_info))
        {
          ?>
          <h5>Update Existing Service</h5>
          <form action="<?php echo base_url()?>A_service/update_service" method="post" role="form" class="row" enctype="multipart/form-data">
            <div class="form-group mt-3">
              <input type="text" name="title" class="form-control" id="title" value="<?php echo 
              $basic_info->title;?>">
            </div>
            <div class="form-group mt-3 ">
              <textarea class="form-control" name="discription" id="discription"><?php echo 
              $basic_info->discription;?>
            </textarea>
          </div>
          <div class="form-group mt-3 ">
            <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
          </div>
          <div class="form-group mt-3 ">
            <div class="img">
              <img src="<?php echo site_url();?>assets/services/<?php echo $basic_info->image;?>" class="img-fluid" alt="" style="">
            </div>
            <label>Photo</label>
            <input type="file" class="form-control" name="image" id="image">
          </div>
          <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <div class="button-grou">
                <button type="submit" name="update_service" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
                <button type="reset" class="btn btn-danger"><i class="bi bi-trash"></i>cancle</button>
              </div>
            </ul>
          </div><!-- End blog pagination -->
        </form>
        <?php
      }


      else
      {
        ?>
        <h5>Add New Service</h5>
        <?php
        if($this->uri->segment(2)=='insert_success')
        {
          echo '<h4 class="text-success">Data Inserted Successfully!!!</h4>';
        }
        ?>
        <h5 class="text-success">
        <?php echo $this->session->flashdata('message') 
          ?>        
          </h5>


        <form action="<?php echo site_url()?>A_service/save_service" method="post" role="form" class="row" enctype="multipart/form-data">
          <div class="form-group mt-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Service Title">
          </div>
          <div class="form-group mt-3 ">
            <textarea class="form-control" name="discription" id="discription" placeholder="About the Service" ></textarea>
          </div>
          <div class="form-group mt-3 ">
            <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
          </div>
          <div class="form-group mt-3 ">
            <label>Photo</label>
            <input type="file" class="form-control" name="image" id="image">
          </div>
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <div class="button-group">
                <button type="submit" name="save_service" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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