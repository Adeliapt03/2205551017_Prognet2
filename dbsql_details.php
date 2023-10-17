<?php
    $servername = "prognet.localnet";
    $username = "2205551017";
    $password = "2205551017";
    $dbname = "db_2205551017";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    $idtodetails=$_GET['nim'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>My DBSQL Task</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo-home-page.png" rel="icon">
  <link href="assets/img/logo-home-page.png" rel="logo-icon">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-image" style="background-image: url(assets/img/home-bg.jpg)">
    <div class="container d-flex align-items-center justify-content-between">
      <h1 class="logo"><a href="index.html">Adell</a></h1>
  <!-- ======= Start Navbar ======= -->
  <nav id="navbar" class="navbar">
    <ul>
      <li><a class="nav-link scrollto" href="index.html">Home</a></li>
      <li><a class="nav-link scrollto" href="index.html#taks">About</a></li>
      <li><a class="nav-link scrollto active" href="dbsql_select.php">Student Details</a></li>
    </ul>
    <i class="bi bi-list mobile-nav-toggle"></i>
  </nav>
  <!-- ======= End navbar ======= -->
    </div>
  </header>
  <!-- ======= End Header ======= -->

  <main id="main"><!-- Start main -->

  <!-- ======= Start Hasil Form ======= -->
  <section id="form" class="form-mf sect-pt4 route">
    <div class="container mt-5">
      <h1 class="text-center mb-5">Student's Biodata List</h1>
        <table class="table" border="2">
          <thead>
            <?php
                $sql = "SELECT * FROM tb_student WHERE nim='$idtodetails'";
                $result = $conn->query($sql);
                while($row = $result->fetch_assoc()) {
                    // kolom full name
                    echo "<tr>";
                    echo "<td>"."Full Name"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['full_name']."</td>";
                    echo "</tr>";
                    // kolom nick name
                    echo "<tr>";
                    echo "<td>"."Nick Name"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nick_name']."</td>";
                    echo "</tr>";
                    // kolom nim
                    echo "<tr>";
                    echo "<td>"."NIM"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['nim']."</td>";
                    echo "</tr>";
                    // kolom email
                    echo "<tr>";
                    echo "<td>"."Email"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                    // kolom batch of student
                    echo "<tr>";
                    echo "<td>"."Batch of Student"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['batch_of_student']."</td>";
                    echo "</tr>";
                    // kolom gender
                    echo "<tr>";
                    echo "<td>"."Gender"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['gender']."</td>";
                    echo "</tr>";
                    // kolom class day
                    echo "<tr>";
                    echo "<td>"."Class day"."</td>";
                    echo "<td>".":"."</td>";
                    echo "<td>".$row['class_day']."</td>";
                    echo "</tr>";
                    
                }
            ?>
          </thead>
        </table>
      <a href="dbsql_select.php" class="previous">&laquo; Previous</a>
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