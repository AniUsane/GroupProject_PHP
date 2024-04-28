<?php include "./categories/header.php";?>
<?php include "./functions/MyFunctions.php";?>
    <!-- end header section -->
  </div>


  <!-- treatment section -->

  <section class="treatment_section layout_padding">
    <div class="side_img">
      <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Hospital <span>Treatment</span>
        </h2>
      </div>
      <div class="row">
      <?php TreatmentServices(); ?>
      </div>
    </div>
  </section>

  <!-- end treatment section -->

  <!-- info section -->
  <?php include './categories/info.php'; ?>
  <!-- end info_section -->


  <!-- footer section -->
  <?php include './categories/footer.php'; ?>