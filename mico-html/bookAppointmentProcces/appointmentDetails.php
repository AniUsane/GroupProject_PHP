<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>appointment Details</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />
  
  <style>
    html{
      height:100%;
    }
    body{
      display: flex;
      flex-direction: column;
      height: 100%;
      justify-content: space-between;
    }
  </style>


</head>

<body>

  <!-- header section-->

  <?php include '../functions/header_contact_function.php';?>
  <?php include '../categories/header.php';?>

  <!-- end  header section -->

  <!-- book detail information  -->

  <section class="book_section layout_padding">
    <div class="container">
      <?php
        if (isset($_GET['patientName'], $_GET['doctorName'], $_GET['departmentName'], $_GET['phoneNumber'], $_GET['symptoms'], $_GET['date'])) {
          $patientName = $_GET['patientName'];
          $doctorName = $_GET['doctorName'];
          $departmentName = $_GET['departmentName'];
          $phoneNumber = $_GET['phoneNumber'];
          $symptoms = $_GET['symptoms'];
          $date = $_GET['date'];

          // Display confirmation message
          echo "<h4>YOUR <span>APPOINTMENT IS CONFIRMED</span></h4>";

          // Display the filled information
          echo "<h5 style='font-weight: bold; font-size: 20px;'>Details</h5>";
          echo "<p>Patient Name: $patientName</p>";
          echo "<p>Doctor's Name: $doctorName</p>";
          echo "<p>Department's Name: $departmentName</p>";
          echo "<p>Phone Number: $phoneNumber</p>";
          echo "<p>Symptoms: $symptoms</p>";
          echo "<p>Date: $date</p>";
        }
      ?>
      <div class="btn-box">
        <button class="btn" style="background-color: #00c6a9; padding: 10px 45px; border-radius: 5px; margin-top: 10px;
          text-transform: uppercase"><a href="..index.php" style="text-decoration: none; color: #ffffff">Back to Homepage</a></button>
      </div>
    </div>
  </section>

  <!-- end book confirmation -->


  <!-- footer section -->
  <?php include '../categories/footer.php';?>
  <!-- end footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <!-- datepicker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>