<?php
include('header2.php');
?>

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs">
  <div class="container">

    <div class="d-flex justify-content-between align-items-center">
      <h3>Portfolio Panel</h3>
      <ol>
        <li><a href="<?php echo site_url()?>E_tech/admin_home">Home</a></li>
        <li>Admin Panel</li>
        <li><a href="<?php echo site_url()?>A_portfolio/add_portfolio" class="btn btn-primary"><i class="bi bi-plus"></i>Add Portfolio</a></li>
        <li>
         <div class="btn-group">  
           <form  action="<?php echo base_url()?>A_portfolio/search_portfolio" method="post" enctype="multipart/form-data">
            <input class="btn btn-primary" type="text" class="form-group col-md-4 m-t-10" 
            id="title"  name="title" placeholder ="Search portfolio" required style="max-width: 150px;">
            <button type="submit"  class="btn btn-primary"><i class="bi bi-search"></i></button>
          </form>
        </div>
      </li>
    </ol>
  </div>

</div>
</div><!-- End Breadcrumbs -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio" data-aos="fade-up" style="padding-top: 2px;">
  <div class="container">
    <div class="section-header">
          <h2>Portfolio</h2>
          <h4 style="text-align: justify;">The following pictures are sparks that tells about what we did before and doing now. We are experienced on the development of websites, web applications, Mobile applications, AI applications. We are also talented on network installation and configration, offering clear and precise lectures, research and project advising. Please hover (click) on a portfolio photo you want to see what type of skill and work is incorporated. To Zoom in the photo click on the plus (+) sign on the photo. you can get this sign while hovering the mous over the photo. You can also see detail about the portfolio photo by clicking on the eye sign.</h4>
    </div>
  </div>
  <center>
    <h4 class="text-success"> 
      <?php echo $this->session->flashdata('delete_message');?>
    </h4>
  </center>
  <div class="container-fluid" data-aos="fade-up" data-aos-delay="200">
    <?php 
    if(isset($s_portfolio))
    {
      ?>
      <!--VIEW SINGLE SERVICE-->
      <center>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-ict">
      <img src="<?php echo site_url();?>assets/portfolio/<?php echo $s_portfolio->p_file;?>" class="img-fluid"  style="height: 300px; width: 400px;">
      <div class="portfolio-info">
        <h4><?php echo $s_portfolio->skill;?></h4>
        <a href="assets/portfolio/<?php echo $s_portfolio->p_file;?>" title="<?php echo $s_portfolio->skill;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($s_portfolio->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
        <center>
         <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($s_portfolio->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
         <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($s_portfolio->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
       </center>
     </div>
   </div><!-- End Portfolio Item -->
 </center>
     <!--...//VIEW SINGLE SERVICE-->
     <?php 
   }
   else
   {
   ?>
   <!--NAVIGATE PORTFOLIO-->
   <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry" data-portfolio-sort="original-order">
    <ul class="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-webapps">Web development</li>
          <li data-filter=".filter-mobileapps">Mobile Apps</li>
          <li data-filter=".filter-aiapps">AI Apps</li>
          <li data-filter=".filter-network">Networking</li>
          <li data-filter=".filter-graphics">Graphics </li>
          <li data-filter=".filter-advising">Project Advising</li>
          <li data-filter=".filter-lecture">Lecture</li>
           <li data-filter=".filter-other">other</li>
    </ul><!-- End Portfolio Filters -->

    <div class="row g-0 portfolio-container">
     <?php
     foreach($portfolio_list->result() as $row)
     {
      $r=$row->skill;
      if($r=='Web application development')
      {
        ?>
        <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-webapps">
          <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
          <div class="portfolio-info">
            <h4><?php echo $row->skill;?></h4>
            <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
            <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
            <center>
             <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
             <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
           </center>
         </div>
       </div><!-- End Portfolio Item -->
       <?php 
     }
   }?>

   <?php
   foreach($portfolio_list->result() as $row)
   {
    $r=$row->skill;
    if($r=='Mobile application development')
    {
      ?>
      <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-mobileapps">
        <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
        <div class="portfolio-info">
          <h4><?php echo $row->skill;?></h4>
          <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
          <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
          <center>
           <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
           <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
         </center>
       </div>
     </div><!-- End Portfolio Item -->
     <?php 
   }
 }?>

 <?php
 foreach($portfolio_list->result() as $row)
 {
  $r=$row->skill;
  if($r=='AI application development')
  {
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-aiapps">
      <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
      <div class="portfolio-info">
        <h4><?php echo $row->skill;?></h4>
        <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
        <center>
         <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
         <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
       </center>
     </div>
   </div><!-- End Portfolio Item -->
   <?php 
 }
}?>

<?php
foreach($portfolio_list->result() as $row)
{
  $r=$row->skill;
  if($r=='Network installation and configration')
  {
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-network">
      <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
      <div class="portfolio-info">
        <h4><?php echo $row->skill;?></h4>
        <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
        <center>
         <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
         <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
       </center>
     </div>
   </div><!-- End Portfolio Item -->
   <?php 
 }
}?>

<?php
foreach($portfolio_list->result() as $row)
{
  $r=$row->skill;
  if($r=='Graphics design')
  {
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-graphics">
      <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
      <div class="portfolio-info">
        <h4><?php echo $row->skill;?></h4>
        <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
        <center>
         <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
         <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
       </center>
     </div>
   </div><!-- End Portfolio Item -->
   <?php 
 }
}?>

<?php
foreach($portfolio_list->result() as $row)
{
  $r=$row->skill;
  if($r=='Project and research advising')
  {
    ?>
    <div class="col-xl-3 col-lg-4 col-md-6 portfolio-item filter-advising">
      <img src="<?php echo site_url();?>assets/portfolio/<?php echo $row->p_file;?>" class="img-fluid" style="height: 300px; width: 400px;">
      <div class="portfolio-info">
        <h4><?php echo $row->skill;?></h4>
        <a href="assets/portfolio/<?php echo $row->p_file;?>" title="<?php echo $row->title;?>" data-gallery="portfolio-gallery" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
        <a href="<?php echo base_url();?>A_portfolio/portfolio_detail?I=<?php echo base64_encode($row->id); ?>" title="More Details" class="details-link"><i class="bi bi-eye"></i></a>
        <center>
         <a href="<?php echo base_url();?>A_portfolio/edit_portfolio?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i></a>
         <a href="<?php echo base_url();?>A_portfolio/delete?I=<?php echo base64_encode($row->id); ?>" title="Update" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this data?')" ><i class="bi bi-trash"></i></a>
       </center>
     </div>
   </div><!-- End Portfolio Item -->
    <!--......NAVIGATE PORTFOLIO-->
   <?php 
 }
}?>



</div><!-- End Portfolio Container -->
</div>
<?php }?>

</div>
</section><!-- End Portfolio Section -->

<?php
include('footer2.php');
?>
<script type="text/javascript" charset="utf-8" async defer>
 var BASE_URL = "<?php echo base_url(); ?>";
 $(document).ready(function() {
  $( "#title" ).autocomplete({

    source: function(request, response) {
      $.ajax({
        url: BASE_URL + "A_portfolio/search",
        data: {
          term : request.term
        },
        dataType: "json",
        success: function(data){
         var resp = $.map(data,function(obj){
          return obj.name;
        }); 
         response(resp);
       }
     });
    },
    minLength: 1
  });
});
</script>