<?php
include('header2.php');
?>



<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h2>Admin Panel</h2>
      <ol>
        <li><a href="<?php echo site_url()?>A_member">Home</a></li>
        <li>Admin Panel</li>
      </ol>
    </div>

  </div>
</div><!-- End Breadcrumbs -->



<!-- ======= Update and Insert member Section ======= -->
<section id="blog" class="blog" style="padding-top: 15px;">
  <div class="container" data-aos="fade-up">
    <div class="row g-5">
     <center>
      <div class="col-lg-8">

      <?php 
      if(isset($basic_info))
      {

        // $s_id = base64_decode($this->input->get('I'));
        // $basic_user=$this->team_model->get_user($s_id);
        ?>
        <!--Update MEMBER-->
        <form action="<?php echo site_url()?>A_member/update_team" method="post" role="form" class="" enctype="multipart/form-data">
          <div class="row gy-4 posts-list">
            <div class="col-lg-6">

              <div class="form-group mt-3">
                Office ID
                <input type="text" name="office_id" class="form-control" id="office_id" value="<?php echo $basic_info->office_id?>">
              </div>
              <div class="form-group mt-3">
                <label>First Name</label>
                <input type="text" name="first_name" class="form-control" id="first_name" value="<?php echo $basic_info->first_name?>">
              </div>
              <div class="form-group mt-3 ">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="middle_name" id="middle_name" value="<?php echo $basic_info->middle_name?>" >
              </div>
              <div class="form-group mt-3 ">
                <label>Last Name</label>
                <input type="text" class="form-control" name="last_name" id="last_name" value="<?php echo $basic_info->last_name?>">
              </div>
              <div class="form-group mt-3 ">
                <label>Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $basic_user->username?>">
              </div>
              <div class="form-group mt-3 ">
                <?php  
              // $this->load->library('encryption');
              // $pass=$this->encryption->decrypt($basic_user->password);
                ?>
                <label>Password</label>
                <input type="text" class="form-control" name="password" id="password" value="<?php echo $basic_user->password;?>" >

              </div>
              <div class="form-group mt-3 ">
                <label>User Type</label>
                <select class="form-control" name="user_level" id="user_level" >
                  <option value="<?php echo $basic_user->user_level?>"><?php echo $basic_user->user_level?></option>
                  <option value="admin">Administrator</option>
                  <option value="staff">Staff</option>                 
                </select>
              </div>
              <div class="form-group mt-3 ">
                <label>Gender</label>
                <select class="form-control" name="sex" id="sex" >
                  <option value="<?php echo $basic_info->sex?>"><?php echo $basic_info->sex?></option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>                 
                </select>
              </div>
              <div class="form-group mt-3 ">
                <label>Status</label>
                <select class="form-control" name="status" id="status" >
                  <option value="<?php echo $basic_user->status?>"><?php echo $basic_user->status?></option>
                  <option value="active">Active</option>
                  <option value="inactive">Inactive</option>                 
                </select>
              </div>
              <div class="form-group mt-3 ">
                <label>Age</label>
                <input type="text" class="form-control" name="age" id="age" value="<?php echo $basic_info->age?>" >
              </div>
              <div class="form-group mt-3 ">
                <label>Mobile</label>
                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $basic_info->phone?>">
              </div>

            </div>

            <div class="col-lg-6">
             <div class="form-group mt-3 ">
              <label>Email</label>
              <input type="email" class="form-control" name="email" id="email" value="<?php echo $basic_info->email?>" >
            </div>
            <div class="form-group mt-3 ">
              <label>Qebelie ID</label>
              <input type="text" class="form-control" name="qebelie_id" id="qebelie_id" value="<?php echo $basic_info->qebelie_id?>" >
            </div>
            <div class="form-group mt-3 ">
              <label>Department</label>
              <input type="text" class="form-control" name="department" id="department" value="<?php echo $basic_info->department?>" >
            </div>
            <div class="form-group mt-3 ">
              <label>Educational Level</label>
             <select class="form-control" name="education_level" id="education_level" >
              <option value="<?php echo $basic_info->education_level?>"><?php echo $basic_info->education_level?></option>
              <option value="diploma">Diploma</option>
              <option value="degree">Degree</option>    
              <option value="master">Master</option> 
              <option value="php">PHD</option> 
              <option value="above">Above</option>               
            </select>                
          </div>
          <div class="form-group mt-3 ">
            <label>Major Skill</label>
            <select class="form-control" name="major_skill" id="exprience" >
              <option value="<?php echo $basic_info->major_skill?>"><?php echo $basic_info->major_skill?></option>
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
          <div class="form-group mt-3 ">
            <label>Moderate Skill</label>
            <select class="form-control" name="moderate_skill" id="exprience" >
              <option value="<?php echo $basic_info->moderate_skill?>"><?php echo $basic_info->moderate_skill?></option>
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
          <div class="form-group mt-3 ">
            <label>Minner Skill</label>
            <select class="form-control" name="minner_skill" id="exprience" >
              <option value="<?php echo $basic_info->minner_skill?>"><?php echo $basic_info->minner_skill?></option>
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
          <div class="form-group mt-3 ">
            <label>Details</label>
            <textarea class="form-control" name="description" id="description" placeholder="" ><?php echo $basic_info->description;?></textarea>
          </div>
          <div class="form-group mt-3 ">
            <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
          </div>
          <div class="form-group mt-3 ">s
            <img src=" <?php echo site_url()?>assets/team/<?php echo $basic_info->image?>" style ="max-height: 200px; max-width: 200px;" media="screen" class="img-round">
          </div>
          <div class="form-group mt-3 ">
            <label>Photo</label>
            <input type="file" class="form-control" name="image" id="image">
          </div>
        </div>

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <div class="button-grou">
              
              <button type="submit" name="update_team" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
              <button type="reset" class="btn btn-danger"><i class="bi bi-trash"></i>cancle</button>
            </div>
          </ul>
        </div>

      </div>
    </form>
    <!--......Update MEMBER-->
    <?php
  }
  else
  {
    ?>
           
      <h5>Add New Staff</h5>
       <?php
           echo validation_errors();
       if($this->uri->segment(2)=='insert_success')
       {
        echo '<h4 class="text-success">Data Inserted Successfully!!!</h4>';
      }
      ?>
      <h5 class="text-success">
        <?php echo $this->session->flashdata('message') 
        ?>        
      </h5>
      <center>
        <h4 class="text-danger"> 
          <?php echo $this->session->flashdata('duplicated_email_and_username');?>
        </h4>
        <h4 class="text-danger"> 
          <?php echo $this->session->flashdata('duplicated_id');?>
        </h4>
        <h4 class="text-danger"> 
          <?php echo $this->session->flashdata('duplicated_email');?>
        </h4>
      </center>
    <!--INSERT MEMBER-->
    <form action="<?php echo site_url()?>A_member/save_team" method="post" role="form" class="php-email-form" enctype="multipart/form-data">
      <div class="row gy-4 posts-list">
        <div class="col-lg-6">
          <div class="form-group mt-3">
            <input type="text" name="office_id" class="form-control" id="office_id" placeholder="Official ID">
          </div>
          <div class="form-group mt-3">
            <input type="text" name="first_name" class="form-control" id="first_name" placeholder="First name">
          </div>
          <div class="form-group mt-3 ">
            <input type="text" class="form-control" name="middle_name" id="middle_name" placeholder="Middle name" >
          </div>
          <div class="form-group mt-3 ">
            <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last name" >
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" >
          </div>
          <div class="form-group mt-3 ">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" >
          </div>
          <div class="form-group mt-3 ">
            <select class="form-control" name="user_level" id="user_level" >
              <option value="">Select User Type</option>
              <option value="admin">Administrator</option>
              <option value="staff">Staff</option>                 
            </select>
          </div>
          <div class="form-group mt-3 ">
            <select class="form-control" name="sex" id="sex" >
              <option value="">Select Gender</option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>                 
            </select>
          </div>
          <div class="form-group mt-3 ">
            <select class="form-control" name="status" id="status" >
              <option value="">Select Status</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>                 
            </select>
          </div>
          <div class="form-group mt-3 ">
            <input type="text" class="form-control" name="age" id="age" placeholder="Age" >
          </div>
          <div class="form-group mt-3 ">
            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" >
          </div>
        </div>

        <div class="col-lg-6">
         <div class="form-group mt-3 ">
          <input type="email" class="form-control" name="email" id="email" placeholder="email" >
        </div>
        <div class="form-group mt-3 ">
          <input type="text" class="form-control" name="qebelie_id" id="qebelie_id" placeholder="Qebelie Id" >
        </div>
        <div class="form-group mt-3 ">
          <input type="text" class="form-control" name="department" id="department" placeholder="Department of Graduation" >
        </div>
        <div class="form-group mt-3 ">
         <select class="form-control" name="education_level" id="education_level" >
          <option value="">Select Educational Level</option>
          <option value="diploma">Diploma</option>
          <option value="degree">Degree</option>    
          <option value="master">Master</option> 
          <option value="php">PHD</option> 
          <option value="above">Above</option>               
        </select>                
      </div>
      <div class="form-group mt-3 ">
        <input type="text" class="form-control" name="role" id="role" placeholder="Role (Responsibility)" >
      </div>
      <div class="form-group mt-3 ">
            <label>Major Skill</label>
            <select class="form-control" name="major_skill" id="exprience" >
              <option value="Select major"></option>
              <option value="Web development">Web development</option>
              <option value="Mobile Application">Mobile Applications</option>    
              <option value="AI application">AI applications</option> 
              <option value="Networking">Networking</option> 
              <option value="Electronics">Electronics</option> 
              <option value="Graphics">Graphics</option>             
            </select>
          </div>
          <div class="form-group mt-3 ">
            <label>Moderate Skill</label>
            <select class="form-control" name="moderate_skill" id="exprience" >
              <option value="Select moderate_skill"></option>
              <option value="Web development">Web development</option>
              <option value="Mobile Application">Mobile Applications</option>    
              <option value="AI application">AI applications</option> 
              <option value="Networking">Networking</option> 
              <option value="Electronics">Electronics</option> 
              <option value="Graphics">Graphics</option>             
            </select>
          </div>
          <div class="form-group mt-3 ">
            <label>Minner Skill</label>
            <select class="form-control" name="minner_skill" id="exprience" >
              <option value="Select minner_skill"></option>
              <option value="Web development">Web development</option>
              <option value="Mobile Application">Mobile Applications</option>    
              <option value="AI application">AI applications</option> 
              <option value="Networking">Networking</option> 
              <option value="Electronics">Electronics</option> 
              <option value="Graphics">Graphics</option>             
            </select>
          </div>
      <div class="form-group mt-3 ">
        <textarea class="form-control" name="description" id="description" placeholder="About the staff" ></textarea>
      </div>
      <div class="form-group mt-3 ">
        <input type="date" class="form-control" name="post_date" id="post_date" placeholder="Date" >
      </div>
      <div class="form-group mt-3 ">
        <label>Photo</label>
        <input type="file" class="form-control" name="image" id="image">
      </div>
    </div>

    <div class="blog-pagination">
      <ul class="justify-content-center">
        <div class="button-grou">
          <button type="submit" name="save_team" class="btn btn-primary"><i class="bi bi-save"></i> Save</button>
          <button type="reset" class="btn btn-danger"><i class="bi bi-trash"></i>cancle</button>
        </div>
      </ul>
    </div>

  </div>
</form>
<!--......INSERT MEMBER-->
<?php }?>
</div>
</center>
</div>

</div>
</section>
<!-- Update and Insert member Section -->

<?php
include('footer2.php');
?>s