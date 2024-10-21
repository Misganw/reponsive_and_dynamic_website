<?php
include('header.php');
?>
<!-- ======= Testimonials Section ======= -->
<section id="testimonials" class="testimonials">
  <div class="container" data-aos="fade-up">

    <div class="testimonials-slider swiper">
      <div class="swiper-wrapper">

       <?php 
       foreach($team_list->result() as $row)
       {
        ?>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <img src="<?php echo site_url()?>assets/team/<?php echo $row->image?>" class="testimonial-img" alt="">
            <h3><?php echo $row->first_name.' '.$row->middle_name ?></h3><br>
            <h4><?php echo 'Role: '.$row->role?></h4>
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <?php echo $row->description?>.
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
          </div>
        </div><!-- End testimonial item -->
        <?php 
      }?>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>
</section><!-- End Testimonials Section -->



<!-- ======= About Section ======= -->
<section id="about" class="about">
  <div class="container" data-aos="fade-up">

    <div class="section-header">
      <h2>የደ/ታቦር ከተማ አጠቃለይ ገጽታ</h2>
      <p>
       የደ/ታቦር ከተማ በአማራ ብሄራዊ ክልላዊ መንግስት በደቡብ ጐንደር መስተዳድር ዞን የምትገኝ ከተማ ስትሆን በ1327ዓ/ም  በአፄ ሰይፈ አርዕድ እንደተቆረቆረች ይነገርላታል፡፡ ከተማዋ ከአዲስ አበባ ከተማ 667 ኪ/ሜ፣ ከባህርዳር ከተማ 97 ኪ/ሜ ርቀት ላይ ትገኛለች፡፡ በአሁኑ ጊዜ ከተማዋ የደቡብ ጎንደር መስተዳደር ዞን፣ የፋርጣ ወረዳ እና የደ/ታቦር ከተማ አስተዳደር መዲና እንዲሁም በዞንና በክልል ደረጃ የኮንፈረንስ ቱሪዝም ማዕከል በመሆን በማገልገል ላይ ነች፡፡ የህዝብ ቁጥርም ወንድ 54219  ሴት 59016  ድምር 113235  ነው ፡፡
       የደ/ታቦር ከተማ ከባህር ወለል በላይ ከፍተኛ 2884 ዝቅተኛ 2440 ሜትር ከፍታ ላይ .0ስትገኝ 1553.7 ሚ/ሜ አመታዊ አማካይ የዝናብ መጠንና 15co አማካይ የሙቀት መጠን ታስተናግዳለች፡፡
       የከተማዋ መልከዓ ምድራዊ ገፅታ 14 በመቶ ሜዳማ፣ 20 በመቶ ተራራማ፣ 66 በመቶ ወጣገባ ሲሆን የከተማዋ የአየር ሁኔታ  ወይና ደጋና ለጤና እጅግ ተስማሚ ነው፡፡
       በአጠቃላይ ከተማዋ ካለፉት ጥቂት አመታት ጀምሮ ፈጣን የማህበራዊና ኢኮኖሚያዊ ለውጥ የሚታይባት ሲሆን ምቹ የንግድ፤ የኢንቨስትመንትና የመኖሪያ ከተማ ለመሆን ሁለንተናዊ እድገት በማስመዝገብ ላይ ትገኛለች ፡፡
     </p>
   </div>

   <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

    <div class="col-lg-5">
      <div class="about-img">
        <img src="<?php echo site_url();?>assets/img/dt_circle.png" class="img-fluid" alt="">
        <img src="<?php echo site_url();?>assets/img/dt_town.png" class="img-fluid" alt="">
        <img src="<?php echo site_url();?>assets/img/dt_town2.png" class="img-fluid" alt="">
      </div>
    </div>

    <div class="col-lg-7">
      <h3 class="pt-0 pt-lg-5">በደ/ታቦር ከተማ አስተዳደር  ኢንዱስትሪና ኢንቨስትመንት መምሪያ 

      <!-- Tabs -->
      <ul class="nav nav-pills mb-3">
         <li><a class="nav-link active" data-bs-toggle="pill" href="#tab_m">Director Message</a></li>
        <li><a class="nav-link " data-bs-toggle="pill" href="#tab">Adout DT Ivetment Office</a></li>
        <li><a class="nav-link" data-bs-toggle="pill" href="#vision">Vision</a></li>
        <li><a class="nav-link" data-bs-toggle="pill" href="#mission">Mission</a></li>
        <li><a class="nav-link" data-bs-toggle="pill" href="#values">Values</a></li>
      </ul><!-- End Tabs -->

      <!-- Tab Content -->
      <div class="tab-content">
        <div class="tab-pane fade show active" id="tab_m">
          <div class="row" >
            <div class="col-lg-4">
              <img src="assets/img/director.jpg" style="max-width: 100%;">
            </div>
            <div class="col-lg-8">
              <div class="d-flex align-items-center mt-4">
                <i class="bi bi-check2"></i>
                <h4>Message from Director of tabor town inductry and invetment office</h4>
              </div>
              <p>Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.Making Debre tabor town the preceeding Invetment Access of the country.v.Making Debre tabor town the preceeding Invetment Access of the country</p>
            </div>
          </div>
        </div><!-- End Tab 2 Content -->
        <div class="tab-pane fade show active" id="tab">
          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>የከተማዋ የኢንዱስትሪና ኢንቨ እንቅስቃሴ</h4>
          </div>
          <p>የከተማዋን የኢንቨስትመንት ፍስት ለማሳደግ በከተማ አስተዳደር በኩል በተለያዩ ጊዜያት በተደረጉ ተከታታይ ጥረቶች በርካታ ኘሮጀክቶችን መሳብ የተቻለ ቢሆንም ከተማዋ ካላት እምቅ የኢንቨስትመንት አቅም አንፃር ሲታይ ግን አብዛኛዎቹ የኢንቨስትመንት አማራጮች ምንም ያልተሰራባቸው እና እጅጉንም አዋጭ ሆነው ይገኛሉ፡፡                                                           
            በደ/ታቦር ከተማ አስተዳደር በአሁኑ ሰዓትየአገልግሎት ዘርፍን ጨምሮ 162  በላይ ኘሮጀክቶች የኢንቨስትመንት ፈቃድ ወስደው በመንቀሳቀስ ላይ ያሉ ሲሆን ከ641489208 ብር በላይ ካፒታል በማስመዝገብ ለ7455 ዜጐች ቋሚና ጊዜያዊ የሥራ ዕድል ይፈጥረሉ ተብሎ ይጠበቃል፡፡ለሚቀርቡ፡፡ በዚህም መሰረት ቁጥር 1 ኢንዱስትሪ መንደር የለማ 41.56 ሄ/ር ቁጥር 2 የለማና የተዘጋጀ ኢነዱስትሪ መንደር 20 ሄ/ር ሲሆን 80 ሄ/ር ደግሞ የተከለለ እና የካሳ ግምት መረጃ የተዘጋጀለት ነው፡፡
          ኘሮጀክቶቹም በሆቴልና ቱሪዝም፣ በአገልግሎት ሰጭ ተቋማት፣ በትምህርት ፣በእንሰሳት እርባታና ማድለብ፣ በደን ልማት፣ በኮንስትራክሽን መሳሪያዎች ኪራይ፣ በአትክልትና ፍራፍሬ ልማትና ማቀነባበር፣ በዱቄት ፋብሪካ፤ ፓስታና መኮረኒ ማቀነባበሪያ፤ በችፑድ ማምረቻ ፋብሪካ፣ በእንሰሳት መኖ ማቀነባበር፣በነዳጅ ማደያ እና በሌሎች የኢንቨስትመንት አማራጮች በመንቀሳቀስ ላይ ናቸው፡፡</p>

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>በደ/ታቦር ከተማ የሚገኙ ምቹ ሁኔታዎች</h4>
          </div>
          <p>
            <ol>
              <li>ከተማዋ በክልሉ መሃከላዊ(center) ቦታ ላይ መገኘቷ የሌሎች አካባቢዎችን የጥሬ እቃ እና የገበያ ዕድሎች በቀላሉ መጠቀም ማስቻሉ</li>

              <li> የስለጠነና በቀላሉ ሊሰለጥን የሚችል የሰው ኃይል ጉልበት በተመጣጣኝ የጉልበት ዋጋ  መገኘቱ</li>
              <li>አስተማማኝ ሰላም፣ ልማት ወዳድና ደጋፊ ህብረተሰብ መኖሩ</li>
              <li>የከተማዋ የአየር ፀባይ እጅግ ለጤና ተስማሚ መሆኑ</li>
              <li>የተሟላ መሰረተ ልማት /የመንገድ፣ የመብራት፣ የስልክ፣በተፈጥሮ ከታደለው የጉና ተራራ የምንጭ ውሃ/ አገልግሎት በከተማዋ መኖሩ፡፡በከተማ ከተጠናቀቁ የአስፖልት፣ የኮብልስቶን እና የጠጠር መንገዶች በተጨማሪ በርካታ የመንገድ እና የተፋሰስ ቦይዎች ግንባታ በመከናወን ላይ መሆኑ </li>
              <li>አግሮኘሮሰሲግና ለማንፋክቸሪንግ ለኢንዱስትሪዎች  የሚሆን ግብዓት የደን ምርት፣ የስጋ፣የወተት፣የቆዳና ሌጦ ፣የድንችና እና ሌሎች ምርቶች በብዛት መገኘት</li>
              <li>በከተማዋ ከሶስተኛ ወገን ነፃ የሆነ 40.33 ሄ/ር ነባር የኢንዱስትሪ መንደር ተዘጋጅቶ አገልግሎት እየሰጠ ያለ </li>
            </ol>
          </p>

        </div><!-- End Tab 1 Content -->


        <div class="tab-pane fade show" id="vision">

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Vision of Debre tabor town inductry and invetment office</h4>
          </div>
          <p>Making Debre tabor town the preceeding Invetment Access of the country</p>

        </div><!-- End Tab 2 Content -->

        <div class="tab-pane fade show" id="mission">

          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Mission of Debre tabor town inductry and invetment office</h4>
          </div>
          <p>Expanding Debre Tabor town investment and realizing the utility of people</p>

        </div><!-- End Tab 3 Content -->

        <div class="tab-pane fade show" id="values">
          <div class="d-flex align-items-center mt-4">
            <i class="bi bi-check2"></i>
            <h4>Values of Debre tabor town inductry and invetment office</h4>
          </div>
          <p>
          <ul>
            <li>Costomer satisfaction</li>
            <li>Cooprational work</li>
            <li>Motivation of work</li>
            <li>Survitude (Service delivery)</li>
            <li>Group work</li>
            <li>Readyness for learning and change</li>
            </ul>
        </p>

        </div><!-- End Tab 3 Content -->
      </div>
    </div>
  </div>
</div>
</section><!-- End About Section -->
    
<?php
include('footer.php');
?>