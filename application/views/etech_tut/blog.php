
<?php //include('b_header.php');?>

<main id="main">
  <!-- ======= Breadcrumbs ======= -->
  <div class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Blog</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Blog</li>
        </ol>
      </div>

    </div>
  </div><!-- End Breadcrumbs -->

  <!-- ======= Blog Section ======= -->
  <section id="blog" class="blog">

    <div class="container" data-aos="fade-up">
      <div class="row g-5">
        <div class="col-lg-8">
          <div class="row gy-4 posts-list">
            <?php  
            foreach($blog_list->result() as $row)
            {
              ?>
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
               <article class="d-flex flex-column">
                  <div class="post-img">
                    <img src="<?php echo site_url();?>assets/blogs/<?php echo $row->image ?>" class="img-fluid" alt="">
                  </div>
                  <div class="meta-top">
                  <ul>
                    <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html">Posted By:
                  <?php  
                  //echo $row->upload_by;
                    $id_user=$row->upload_by;
                    $info =$this->Blog_model->get_member_by_blogid($id_user);
                    echo $info->first_name.' '.$info->middle_name.' '.$info->last_name;
                  ?>
                  </a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2022-01-01"><?php echo $row->post_date ?></time></a></li>
                    <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-details.html">12 Comments</a></li>
                  </ul>
                </div>
                 <hr>
                <h2 class="title">
                  <a href="blog-details.html"><?php echo $row->title ?></a>
                </h2>

                <div class="content">
                  <p>
                    Click on Read more to see detail about the post.
                  </p>
                </div>
                  <center>
                    <div class="read-more mt-auto align-self-end">
                  <a href="<?php echo site_url()?>Etech_tut/blog_detail2?I=<?php echo base64_encode($row->id); ?>" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                </div>
                  </center>
                </article>
              </div>
              <?php
            }
            ?>
          </div>
          
          <div class="blog-pagination">
            <ul class="justify-content-center">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
            </ul>
          </div><!-- End blog pagination -->
        </div>


      <div class="col-lg-4">
        <div class="sidebar">
          <div class="sidebar-item search-form">
            <h3 class="sidebar-title">Search</h3>
            <form action="" class="mt-3">
              <input type="text">
              <button type="submit"><i class="bi bi-search"></i></button>
            </form>
          </div><!-- End sidebar search formn-->

          <div class="sidebar-item categories">
            <h3 class="sidebar-title">Categories</h3>
            <ul class="mt-3">
                <hr>
              <li><a href="#">General Technology<span>(25)</span></a></li>
              <hr>
              <li><a href="#">Lifestyle <span>(12)</span></a></li>
                  <hr>
              <li><a href="#">Appplication Development <span>(22)</span></a></li>
              <hr>
              <li><a href="#">Website Design <span>(22)</span></a></li>
              <hr>
              <li><a href="#">Graphics Design <span>(22)</span></a></li>
              <hr>
              <li><a href="#">Creativity <span>(8)</span></a></li>
              <hr>
              <li><a href="#">Programming Language <span>(8)</span></a></li>
              <hr>
              <li><a href="#">Skill Boosing <span>(22)</span></a></li>
              <hr>
              <li><a href="#">Educaion <span>(14)</span></a></li>
              <hr>
              <li><a href="#">Business <span>(14)</span></a></li>
              <hr>
            </ul>
          </div><!-- End sidebar categories-->

          <div class="sidebar-item recent-posts">
            <h3 class="sidebar-title">Recent Posts</h3>

            <div class="mt-3">
              <div class="post-item mt-3">
                <img src="assets/img/blog/blog-recent-1.jpg" alt="" class="flex-shrink-0">
                <div>
                  <h4><a href="blog-post.html">Recent comment</a></h4>
                  <time datetime="2020-01-01">Jan 1, 2020</time>
                </div>
              </div><!-- End recent post item-->

            </div>

          </div><!-- End sidebar recent posts-->


        </div><!-- End Blog Sidebar -->
      </div>

      </div>
    </div>
  </section><!-- End Recent Blog Posts Section -->

</main><!-- End #main -->

<?php //include('b_footer.php')?>