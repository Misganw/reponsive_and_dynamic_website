<?php 
       foreach($team_list->result() as $row)
       {
        ?>
        <div class="col-xl-6 mt-4">
        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
          <div class="pic"><img src="<?php echo site_url();?>assets/team/<?php echo $row->image?>" class="img-fluid" alt=""></div>
          <div class="member-info">
            <h4><?php echo $row->first_name.' '.$row->middle_name.' '.$row->last_name;?></h4>
            <span><?php echo $row->role;?></span>
            <p>Explicabo voluptatem mollitia et repellat qui dolorum quasi</p>
            <div class="social">
              <a href=""><i class="ri-twitter-fill"></i></a>
              <a href=""><i class="ri-facebook-fill"></i></a>
              <a href=""><i class="ri-instagram-fill"></i></a>
              <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
            </div>
          </div>
        </div>
        </div>
        <?php
      }
      ?>