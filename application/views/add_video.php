<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Video Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_video">Home</a></li>
        <li>video Panel</li>
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
            <h5>Update Existing Video</h5>
            <form action="<?php echo base_url()?>A_video/update_video" method="post" role="form" class="row" enctype="multipart/form-data">
               <div class="form-group mt-3">
                <select name="skilled_id" id="skilled_id" class="form-control">
                  <option value="<?php echo $basic_info->skilled_id?>">
                    <?php 
                    $id=$basic_info->skilled_id;
                    $info =$this->Video_model->get_member_by_portfolioid($id);
                    echo $info->first_name.' '.$info->middle_name.' '.$info->last_name;
                    ?>
                </option>
                   <?php 
                     foreach($member_list->result() as $m)
                     {
                  ?>
                  <option value="<?php echo $m->id?>"><?php echo $m->first_name.' '.$m->middle_name.' '.$m->last_name?></option>
                  <?php
                     }
                  ?>
              </select>
              </div>
              <div class="form-group mt-3">
                <select name="skill" id="skill" class="form-control">
                  <option vlaue="<?php echo $basic_info->skill?>"><?php echo $basic_info->skill?></option>
                  <option value="Web application development">Web application development</option>
                <option value="Mobile application development">Mobile application development</option>
                <option value="AI application development">AI application development</option>
                <option value="Network installation and configration">Netwok installation and Configration</option>
                <option value="Graphics design">Graphics design</option>
                <option value="Electronics design and maintenance">Electronics design and maintainance</option>
                <option value="Project and research advising">Project and research advising</option>
                <option value="Lecturing and laboratory work">Lecturing and laboratory work</option>
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
               <video src="<?php echo site_url();?>assets/video/<?php echo $basic_info->p_file;?>" class="img-fluid" alt="" contrls width='250px' height='150px'></video>
              </div>
              <label>Photo</label>
              <input type="file" class="form-control" name="p_file" id="p_file">
            </div>
            <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-grou">
                  <button type="submit" name="update_video" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
          <h5>Add New Video</h5>
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
          <form action="<?php echo site_url()?>A_video/save_video" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <select name="skilled_id" id="skilled_id" class="form-control">
                  <option value="">Who did the project?</option>
                  <?php 
                     foreach($member_list->result() as $m)
                     {
                  ?>
                  <option value="<?php echo $m->id?>"><?php echo $m->first_name.' '.$m->middle_name.' '.$m->last_name?></option>
                  <?php
                     }
                  ?>
              </select>
              </div>
            <div class="form-group mt-3">
              <select name="skill" id="skill" class="form-control">
                <option vlaue="">Select Skill Type</option>
                <option value="Web application development">Web application development</option>
                <option value="Mobile application development">Mobile application development</option>
                <option value="AI application development">AI application development</option>
                <option value="Network installation and configration">Netwok installation and Configration</option>
                <option value="Graphics design">Graphics design</option>
                <option value="Electronics design and maintenance">Electronics design and maintainance</option>
                <option value="Project and research advising">Project and research advising</option>
                <option value="Lecturing and laboratory work">Lecturing and laboratory work</option>
              </select>
            </div>
            <div class="form-group mt-3">
              <input type="text" name="title" class="form-control" id="title" placeholder="Title">
            </div>
            <div class="form-group mt-3 ">
              <textarea class="form-control" name="description" id="description" placeholder="About the video" ></textarea>
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
                  <button type="submit" name="save_video" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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