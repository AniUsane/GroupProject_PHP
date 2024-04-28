<?php include "./categories/header.php";?>
<?php include "./functions/MyFunctions.php";?>
    <!-- end header section -->
  </div>

  <!-- team section -->

  <section class="team_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Our <span>Doctors</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel team_carousel">
        <?php OurDoctors(); ?>
    </div>
  </section>

  <!-- end team section -->


  <!-- info section -->
   <?php include './categories/info.php'; ?>
  <!-- end info_section -->


  <!-- footer section -->
  <?php include './categories/footer.php'; ?>