<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Tugas Javascript - Adell Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
      <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Kelly
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
  <main id="main"><!-- Start main -->

<!-- ======= Start Hasil Form ======= -->
<section id="form" class="form-mf sect-pt4 route">
  <div class="container mt-5">
    <h1 class="text-center">Form Result</h1>
      <table class="table" border="2">
        <thead>
          <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              // kolom full name
              echo "<tr>";
              echo "<td>"."Full Name"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$fullname = $_POST['fullname']."</td>";
              echo "</tr>";
              // kolom nick name
              echo "<tr>";
              echo "<td>"."Nick Name"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$nickname = $_POST['nickname']."</td>";
              echo "</tr>";
              // kolom NIM
              echo "<tr>";
              echo "<td>"."NIM"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$nim = $_POST['nim']."</td>";
              echo "</tr>";
              // kolom email
              echo "<tr>";
              echo "<td>"."Email"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$email = $_POST['email']."</td>";
              echo "</tr>";
              // kolom batch of Student
              echo "<tr>";
              echo "<td>"."Batch of Student"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$batchofstudent = $_POST['batchofstudent']."</td>";
              echo "</tr>";
              // kolom gender
              echo "<tr>";
              echo "<td>"."Gender"."</td>";
              echo "<td>".":"."</td>";
              echo "<td>".$gender = $_POST['gender']."</td>";
              echo "</tr>";
              // kolom class day
              if (isset($_POST['classday'])) {
                  $classday = $_POST['classday'];
                  echo "<tr>";
                  echo "<td>"."Class day"."</td>";
                  echo "<td>".":"."</td>";
                  echo "<td>"."Which day your class day :"."</td>";
                  echo "</tr>";
                  for ($i=0; $i < count($classday) ; $i++){
                      echo "<tr>";
                      echo "<td>".""."</td>";
                      echo "<td>".""."</td>";
                      echo "<td>"."- ".$classday[$i]."</td>";
                      echo "</tr>";
                  }
              }
            }
          ?>
        </thead>
      </table>
  </div>
</section>
<!-- ======= End Hasil Form ======= -->

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Adell</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/kelly-free-bootstrap-cv-resume-html-template/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>