<?php
include('header2.php');
?>
    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h3>Admin Panel</h3>
          <ol>
            <li><a href="<?php echo site_url()?>A_member">Home</a></li>
            <li>Admin Panel</li>
            <li><a href="add_team" class="btn btn-primary"><i class="bi bi-plus"></i>Add Member</a></li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
      
    <!-- ======= Team Section ======= -->
    <section id="team" class="team" style="padding-top:2px">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Team</h2>
          <h4 style="text-align: justify;">Talented members in design and development of wesites, web applications, mobile applications,AI applications, networks and graphics. These members can serve in breif and precise lectures, laboratory guids. we can also service in research and project advicing. </h4>
        </div>

        <div class="row gy-5">
          <?php 
           if(isset($team_detail))
           {
            ?>
            <div class="row" style="padding-top:30px">
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo site_url();?>assets/team/<?php echo $team_detail->image?>" class="img-fluid" style="height: 400px;width: 400px;">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4><?php echo $team_detail->first_name.' '.$team_detail->middle_name.' '.$team_detail->last_name;?></h4>
                </div>
                </div>
            </div>
                 <div class="col-xl-4">
                  <h5><?php echo 'Gender: '.$team_detail->sex;?></h5>
                  <h5><?php echo 'Age: '.$team_detail->age;?></h5>
                  <h5><?php echo 'Mobile: '.$team_detail->phone;?></h5>
                  <h5><?php echo 'Email: '.$team_detail->email;?></h5>
                  <!--<h5><?php echo 'Qebelie Id: '.$team_detail->qebelie_id;?></h5>-->
                  <h5><?php echo 'Department: '.$team_detail->department;?></h5>
                  <h5><?php echo 'Educational level: '.$team_detail->education_level;?></h5>
                  <h5><?php echo 'Role: '.$team_detail->role;?></h5>
                  <h5><?php echo 'Major Skill: '.$team_detail->major_skill;?></h5>
                  <h5><?php echo 'Moderate Skill: '.$team_detail->moderate_skill;?></h5>
                  <h5><?php echo 'Minner Skill: '.$team_detail->minner_skill;?></h5>
              </div>
              <h4>About the Person</h4><br>
              <h5 style="text-align: justify;"><?php echo $team_detail->description; ?></h5>
          </div>
          <!-- End Team Member -->
            <?php
           }
          ?>
        </div>

      </div>
    </section><!-- End Team Section -->

<?php
include('footer2.php');
?>