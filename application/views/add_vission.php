<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Portfolio Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_portfolio">Home</a></li>
        <li>Portfolio Panel</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->



<!-- ======= Blog Section ======= -->
<section id="blog" class="blog" style="padding-top: 15px;">
  <div class="container" data-aos="fade-up">

    <center>
      <div class="col-lg-4">
        <div class="sidebar">
          <?php 
          if(isset($basic_info))
          {
            ?>
            <h5>Update Existing Investment</h5>
            <form action="<?php echo base_url()?>A_portfolio/update_portfolio" method="post" role="form" class="row" enctype="multipart/form-data">
               <div class="form-group mt-3">
                <select name="investment_type" id="investment_type" class="form-control">
                  <option vlaue="<?php echo $basic_info->investment_type?>"><?php echo $basic_info->investment_type?></option>
                  <?php foreach($portfolio->result() as $r)
                   {
                    ?>
                    <option vlaue="<?php echo $r->investment_type?>"><?php echo $r->investment_type?></option>
                    <?php
                   }
                  ?>
              </select>
              </div>
              <div class="form-group mt-3">
                <input type="text" name="title" class="form-control" id="title" value="<?php echo 
                $basic_info->title;?>">
              </div>
              <div class="form-group mt-3 ">
                <textarea class="form-control" name="description" id="description"><?php echo 
                $basic_info->description;?>
              </textarea>
            </div>
            <div class="form-group mt-3 ">
              <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
            </div>
            <div class="form-group mt-3 ">
              <div class="img">
                <img src="<?php echo site_url();?>assets/portfolio/<?php echo $basic_info->p_file;?>" class="img-fluid" alt="" style="">
              </div>
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-grou">
                  <button type="submit" name="update_portfolio" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
          <h5>Add New Invetment</h5>
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
          <form action="<?php echo site_url()?>A_portfolio/save_portfolio" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3">
              <select name="investment_type" id="investment_type" class="form-control">
                <option vlaue="">Select Investment Type</option>
                <option value="agriculture">Agricultures</option>
                <option value="industry">Industries</option>
                <option value="tourism">Tourism</option>
                <option value="hotel">Hotels</option>
                <option value="sport">Sports</option>
                <option value="education">Education</option>
                <option value="ict">Information Technology</option>
              </select>
            </div>
            <div class="form-group mt-3">
              <input type="text" name="title" class="form-control" id="title" placeholder="Service Title">
            </div>
            <div class="form-group mt-3 ">
              <textarea class="form-control" name="description" id="description" placeholder="About the portfolio" ></textarea>
            </div>
            <div class="form-group mt-3 ">
              <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
            </div>
            <div class="form-group mt-3 ">
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-group">
                  <button type="submit" name="save_portfolio" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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