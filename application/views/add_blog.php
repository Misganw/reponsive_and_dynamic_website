<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Blog Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_blog">Home</a></li>
        <li>Blog Panel</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->



<!-- ======= Blog Section ======= -->
<section id="blog" class="blog" style="padding-top: 15px;">
  <div class="container" data-aos="fade-up">

    <center>
      <div class="col-lg-12">
        <div class="sidebar">
          <?php 
          if(isset($basic_info))
          {
            ?>
            <h5>Update Existing Blog</h5>
            <form action="<?php echo base_url()?>A_blog/update_blog" method="post" role="form" class="row" enctype="multipart/form-data">
             <div class="row">
              <div class="col-lg-6">
              <div class="form-group mt-3">
                <label>Category</label>
                <select name="category" class="form-control" id="category">
                  <option value="<?php echo $basic_info->category?>"><?php echo $basic_info->category?></option>
                  <option value="Programming">Programming Language</option>
                  <option value="Framwork">Frameworks</option>
                  <option value="Skill">Skills</option>
                  <option value="AI">Artificial Intelligence</option>
                  <option value="Technology">General Technology</option>
                  <option value="Social">Social Affaires</option>
                  <option value="Marketing">Marketing</option>
                  <option value="History">Histories</option>
                  <option value="Entertainment">Entertainment</option>
                </select>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group mt-3">
                <label>Sub Category</label>
                <select name="sub_category" class="form-control" id="sub_category">
                  <option value="<?php echo $basic_info->sub_category?>"><?php echo $basic_info->sub_category?></option>
                  <h6>Programming Languages</h6>
                  <hr>
                  <option value="Assembly">Assembly Language</option>
                  <option value="C">C</option>
                  <option value="C++">C++</option>
                  <option value="Java">Java</option>
                  <option value="C#">C#</option>
                  <option value="Python">Python</option>
                  <option value="HTML_CSSL">HTML & CSS</option>
                  <option value="JavaScript">JavaScript</option>
                  <option value="Android">Android</option>
                  <option value="Arduino">Arduino</option>
                  <option value="React">React</option>
                  <option value="AngularJS">Angular JS</option>
                  <option value="ExpressJS">Express JS</option>
                  <h6>Frameworks</h6>
                  <hr>
                  <option value="Cootstrap">Bootstrap</option>
                  <option value="Codeigniter">Codeigniter</option>
                  <option value="Laravel">Laravel</option>
                  <option value="Basic_computer_skill">Basic Computer Skilles</option>
                  <option value="NodeJs">Node JS</option>
                </select>
              </div>
            </div>
            </div>
              <div class="form-group mt-3">
                <label>Title</label>
                <input type="text" name="title" class="form-control" id="title" value="<?php echo 
                $basic_info->title;?>">
              </div>
              <div class="form-group mt-3 ">
                <textarea class="form-control" name="description" id="default"><?php echo 
                $basic_info->description;?>
              </textarea>
            </div>
            <div class="row">
            <div class="col-lg-4">
            <div class="form-group mt-3">
              <label>Who Post The content?</label>
              <select name="upload_by" id="upload_by" class="form-control">
                <option value="<?php echo $basic_info->upload_by?>">
                  <?php 
                  $id=$basic_info->upload_by;
                  $info =$this->Blog_model->get_member_by_blogid($id);
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
          </div>
          <div class="col-lg-4">
            <div class="form-group mt-3 ">
              <label>Date</label>
              <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group mt-3 ">
              <div class="img">
                <img src="<?php echo site_url();?>assets/blogs/<?php echo $basic_info->image;?>" class="img-fluid" alt="" style="">
              </div>
              <label>Photo</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
          </div>
        </div>
            <input type="hidden" name="id" value="<?php echo $basic_info->id; ?>">
            <div class="blog-pagination">
              <ul class="justify-content-center">
                <div class="button-grou">
                  <button type="submit" name="update_blog" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
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
          <h4>Add new Blog (News)</h4>
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
          <form action="<?php echo site_url()?>A_blog/save_blog" method="post" role="form" class="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group mt-3">
                  <select name="category" class="form-control" id="category">
                    <option value="">Select Category</option>
                    <option value="Programming">Programming Language</option>
                    <option value="Framwork">Frameworks</option>
                    <option value="Skill">Skills</option>
                    <option value="AI">Artificial Intelligence</option>
                    <option value="Technology">General Technology</option>
                    <option value="Social">Social Affaires</option>
                    <option value="Marketing">Marketing</option>
                    <option value="History">Histories</option>
                    <option value="Entertainment">Entertainment</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
               <div class="form-group mt-3">
                <select name="sub_category" class="form-control" id="sub_category">
                  <option value="">Select Sub category</option>
                  <h6>Programming Languages</h6>
                  <hr>
                  <option value="Assembly">Assembly Language</option>
                  <option value="C">C</option>
                  <option value="C++">C++</option>
                  <option value="Java">Java</option>
                  <option value="C#">C#</option>
                  <option value="Python">Python</option>
                  <option value="HTML_CSSL">HTML & CSS</option>
                  <option value="JavaScript">JavaScript</option>
                  <option value="Android">Android</option>
                  <option value="Arduino">Arduino</option>
                  <option value="React">React</option>
                  <option value="AngularJS">Angular JS</option>
                  <option value="ExpressJS">Express JS</option>
                  <h6>Frameworks</h6>
                  <hr>
                  <option value="Cootstrap">Bootstrap</option>
                  <option value="Codeigniter">Codeigniter</option>
                  <option value="Laravel">Laravel</option>
                  <option value="Basic_computer_skill">Basic Computer Skilles</option>
                  <option value="NodeJs">Node JS</option>
                </select>
              </div>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" name="title" class="form-control" id="title" placeholder="Blog (News) Title">
          </div>
          <div class="form-group mt-3 ">
            <textarea class="form-control" name="description" id="default" placeholder="About the blog (News)" ></textarea>
          </div>
          <div class="row">
            <div class="col-lg-4">
              <div class="form-group mt-3 ">
               <select name="upload_by" id="upload_by" class="form-control">
                <option value="">Who Upload this Blog??</option>
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
          </div>
          <div class="col-lg-4">
            <div class="form-group mt-3 ">
              <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
            </div>
          </div>
          <div class="col-lg-4">
            <div class="form-group mt-3 ">
              <label>Photo</label>
              <input type="file" class="form-control" name="image" id="image">
            </div>
          </div>
        </div>
        <div class="blog-pagination">
          <ul class="justify-content-center">
            <div class="button-grou">
              <button type="submit" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
              <button type="reset" class="btn btn-danger"><i class="bi bi-trash"></i>cancle</button>
            </div>
          </ul>
        </div><!-- End blog pagination -->
      </form>
    <?php } ?>
  </div><!-- End Blog Sidebar -->
</div>

</center>

</div>
</section><!-- End Blog Section -->

<?php

include('footer2.php');

?>s