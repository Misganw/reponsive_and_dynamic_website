<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portfolio Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_about">Home</a></li>
        <li>Portfolio Panel</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->



<!-- ======= Blog Section ======= -->
<section id="blog" class="blog" style="padding-top: 15px;">
  <div class="container" data-aos="fade-up">

    <center>
      <div class="row">


      <!--ABOUT SECTION-->
      <div class="col-lg-4">
        <div class="sidebar">
          <?php 
          if(isset($basic_info))
          {
            ?>
            <h5>Update Existing Description</h5>
            <form action="<?php echo base_url()?>A_about/update_about" method="post" role="form" class="row" enctype="multipart/form-data">
              <div class="form-group mt-3 ">
                <textarea class="form-control" name="description" id="description"><?php echo 
                $basic_info->description;?>
              </textarea>
            </div>
            <div class="form-group mt-3 ">
              <div class="img">
                <img src="<?php echo site_url();?>assets/about/<?php echo $basic_info->p_file;?>" class="img-fluid" alt="" style="">
              </div>
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-grou">
                  <button type="submit" name="update_about" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
          <h5>Add New Description</h5>
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
          <form action="<?php echo site_url()?>A_about/save_about" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3 ">
              <textarea class="form-control" name="description" id="description" placeholder="About the The Invetment Office" ></textarea>
            </div>
            <div class="form-group mt-3 ">
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-group">
                  <button type="submit" name="save_about" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
    <!--ABOUT SECTION-->

      <!--VISION SECTION-->
      <div class="col-lg-4">
        <div class="sidebar">
          <?php 
          if(isset($vision_info))
          {
            ?>
            <h5>Update Existing Vision</h5>
            <form action="<?php echo base_url()?>A_about/update_vision" method="post" role="form" class="row" enctype="multipart/form-data">
              <div class="form-group mt-3 ">
                <textarea class="form-control" name="description" id="description"><?php echo 
                $mission_info->description;?>
              </textarea>
            </div>
            <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-grou">
                  <button type="submit" name="update_vision" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
          <h5>Add New Vision</h5>
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
          <form action="<?php echo site_url()?>A_about/save_about" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3 ">
              <textarea class="form-control" name="description" id="description" placeholder="About the The Invetment Office" ></textarea>
            </div>
            <div class="form-group mt-3 ">
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-group">
                  <button type="submit" name="save_about" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
    <!--VISION SECTION-->


  </div>

  </center>

</div>
</section><!-- End Blog Section -->

<?php
include('footer2.php');
?>s