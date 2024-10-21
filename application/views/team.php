<?php
include('heade1.php');
?>


  <main id="main">
        <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="<?php echo site_url();?>">Home</a></li>
          <li>Personnel Details</li>
        </ol>
        <h2>Personnel Details</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <?php
  if(isset($team_detail))
  {
    ?>
          <div class="col-lg-6">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                  <img src="<?php echo site_url();?>assets/team/<?php echo $team_detail->image?>" class="img-fluid" alt="">
                </div>
              </div>
              <div class="member-info">
                <center>
                <h4><?php echo $team_detail->first_name.' '.$team_detail->middle_name.' '.$team_detail->last_name;?></h4>
              </center>
                </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="portfolio-info">
              <h3>Personnel Details</h3>
                  <h5><?php echo 'Gender: '.$team_detail->sex;?></h5>
                  <h5><?php echo 'Age: '.$team_detail->age;?></h5>
                  <h5><?php echo 'Mobile: '.$team_detail->phone;?></h5>
                  <h5><?php echo 'Email: '.$team_detail->email;?></h5>
                  <!--<h5><?php echo 'Qebelie Id: '.$team_detail->qebelie_id;?></h5>-->
                  <h5><?php echo 'Department: '.$team_detail->department;?></h5>
                  <h5><?php echo 'Educational level: '.$team_detail->education_level;?></h5>
                  <h5><?php echo 'Role: '.$team_detail->role;?></h5>
                  <h5><?php echo 'Major Skill: '.$team_detail->major_skill;?></h5>
                  <h5><?php echo 'Medium Skill: '.$team_detail->moderate_skill;?></h5>
                  <h5><?php echo 'Minner Skill: '.$team_detail->minner_skill;?></h5>
            </div>
            <div class="portfolio-description">
              <h2> Spark about: <?php echo $team_detail->first_name.' '.$team_detail->middle_name.' '.$team_detail->last_name;?></h2>
              <h5 style="text-align: justify;"><?php echo $team_detail->description; ?></h5>
            </div>
          </div>
             <?php 
            }
           ?>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
<?php
include('footer1.php');
?>
