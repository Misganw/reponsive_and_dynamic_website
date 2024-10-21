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
            <li><a href="<?php echo site_url()?>A_member/add_team" class="btn btn-primary"><i class="bi bi-plus"></i>Add Member</a></li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->
      
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>Our Team</h2>
          <h4 style="text-align: justify;">Talented members in design and development of wesites, web applications, mobile applications,AI applications, networks and graphics. These members can serve in breif and precise lectures, laboratory guids. we can also service in research and project advicing. </h4>
        </div>

        <div class="row gy-5">

            <center>
        <h4 class="text-danger"> 
          <?php echo $this->session->flashdata('delete_message');?>
        </h4>
      </center>
          <?php 
           foreach($team_list->result() as $row)
           {
            ?>
            <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="<?php echo site_url();?>assets/team/<?php echo $row->image?>" class="img-fluid" style="height: 400px;width: 400px;">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href="https://www.twitter.com" target="_blank"><i class="bi bi-twitter"></i></a>
                  <a href="https://www.facebook.com" target="_blank"><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name;?></h4>
                 <div class="button-group">
                  <center style="padding-top:;">
                <a href="<?php echo site_url();?>A_member/team_detail?I=<?php echo base64_encode($row->id); ?>" title="View Detaile " class="btn btn-sm btn-primary"><i class="bi bi-eye"></i></a>
                 <a href="<?php echo site_url()?>A_member/edit_team?I=<?php echo base64_encode($row->id); ?>" title="Update " class="btn btn-sm btn-warning"><i class="bi bi-pencil"></i></a>
                 <a href="<?php echo site_url()?>A_member/delete?I=<?php echo base64_encode($row->id); ?>" title="Delete " class="btn btn-sm btn-danger" onclick="return confirm('Are you sure to delete this data?')"><i class="bi bi-trash"></i></a>
              </center>
              </div>
              </div>
            </div>
          </div><!-- End Team Member -->
            <?php
           }
          ?>
          

        </div>

      </div>
    </section><!-- End Team Section -->

<?php
include('footer2.php');
?>