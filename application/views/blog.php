<?php
include('header.php');
?>

<section id="blog" class="blog">
  <div class="container" data-aos="fade-up">

    <div class="row g-5">
          <div class="col-lg-8">
            <article class="blog-details">

              <div class="post-img">
                <img src="<?php echo site_url();?>assets/blogs/<?php echo $blog_detail->image ?>" class="img-fluid">
            </div>
            <h2 class="title"><?php echo $blog_detail->title ?></h2>
            <div class="meta-top">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-details.html"><?php echo 'Posted By: '.$blog_detail->upload_by ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time datetime="2020-01-01"><?php echo $blog_detail->post_date ?></time></a></li>
              </ul>
          </div><!-- End meta top -->
          <div class="content">
            <p>
            <?php echo $blog_detail->description ?></p>

          <blockquote>
              <p>
               In South Gondar administartion the office of debre tabor town Industry and Investment.
            </p>
        </blockquote>
    </div><!-- End post content -->
</article><!-- End blog post -->

<div class="comments">
   <h4 class="comments-count"><?php ?></h4>
   <?php
     foreach($comment_detail as $row)
     {
        ?> 
  <div id="comment-1" class="comment">
    <div class="d-flex">
      <div class="comment-img"><img src="<?php echo site_url()?>assets/comment/<?php echo $row->image?>" alt=""></div>
      <div>
        <h5><a href=""><?php echo $row->name?></a> <a href="#" class="reply"><i class="bi bi-reply-fill"></i> Reply</a></h5>
        <time datetime="2020-01-01"><?php echo $row->post_date?></time>
        <p>
         <?php echo $row->comment?>
      </p>
  </div>
</div>
</div><!-- End comment #1 -->
 <?php
     }
    ?> 


<div class="reply-form">
    <h4>Leave a Reply</h4>
    <p></p>
    <form action="<?php echo site_url()?>A_comment/save_comment?I=<?php echo base64_encode($blog_detail->id); ?>" method="post" role="form" class="" enctype="multipart/form-data">
      <div class="row">
             <div class="col-md-6 form-group">
          <input name="name" type="text" class="form-control" placeholder="Your Name*">
      </div>
      <div class="col-md-6 form-group">
          <input name="email" type="text" class="form-control" placeholder="Your Email*">
      </div>
  </div>
<div class="row">
    <div class="col form-group">
      <textarea name="comment" class="form-control" placeholder="Your Comment*"></textarea>
  </div>
</div>
<div class="row">
    <div class="col form-group">
      <input name="post_date" type="date" class="form-control">
  </div>
</div>
<div class="row">
    <div class="col form-group">
                  <label>Commentary Photo</label>
                  <input type="file" class="form-control" name="image" id="image">
                 </div>
</div>
<button type="submit" name="save_comment" class="btn btn-primary">Post Comment</button>
</form>
</div>
</div><!-- End blog comments -->


</div>

<div class="col-lg-4">

    <div class="sidebar">

  <div class="sidebar-item categories">
    <h3 class="sidebar-title">Categories</h3>
    <ul class="mt-3">
      <li><a href="<?php echo site_url()?>/A_portfolio">Agriculture</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">Industry</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">Tourism</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">Hotel</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">Education</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">ICT</a></li>
      <li><a href="<?php echo site_url()?>/A_portfolio">Sport</a></li>
  </ul>
</div><!-- End sidebar categories-->

<div class="sidebar-item recent-posts">
    <h3 class="sidebar-title">Recent Commentaries</h3>

    <div class="mt-3">
          <?php
     foreach($recent_blog as $r)
     {
        ?> 
      <div class="post-item mt-3">
        <img src="<?php echo site_url()?>assets/comment/<?php echo $r->image ?>" alt="" class="flex-shrink-0">
        <div>
          <h4><a href=""><?php echo $r->name ?></a></h4>
          <time datetime="2020-01-01"><?php echo $r->post_date ?></time>
      </div>
  </div><!-- End recent post item-->
<?php }?>

</div><!-- End sidebar recent posts-->

</div><!-- End Blog Sidebar -->

</div>
</div>

</div>
</section><!-- End Blog Details Section -->
    


<?php
include('footer.php');
?>