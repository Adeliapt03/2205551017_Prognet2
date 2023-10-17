<?php
    $servername = "prognet.localnet";
    $username = "2205551017";
    $password = "2205551017";
    $dbname = "db_2205551017";

    // membentuk koneksi ke database mysql
    $conn = new mysqli($servername, $username, $password, $dbname);

    if(isset($_POST['update'])){
        //mengambil data dari form//
        $full_name=$_POST['fullname'];
        $nick_name=$_POST['nickname'];
        $nim=$_POST['nim'];
        $email=$_POST['email'];
        $batch_of_student=$_POST['batchofstudent'];
        $gender=$_POST['gender'];
        $class_day=$_POST['classday'];


    // proses update
    $sql = "UPDATE tb_student SET
            full_name ='$full_name',nick_name ='$nick_name',nim ='$nim',email ='$email',batch_of_student ='$batch_of_student',gender ='$gender',class_day ='$class_day'
            WHERE nim ='$nim'";
    if ($conn->query($sql) === TRUE) {
        header("Location:dbsql_select.php");
        }
    }

    $idtoupdate=$_GET['nim'];

    $sql = "SELECT * FROM tb_student WHERE nim='$idtoupdate'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
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
      <li><a class="nav-link scrollto active" href="index.html#taks">Edit Data</a></li>
      <li><a class="nav-link scrollto" href="dbsql_select.php">Student's Biodata List</a></li>
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
  <h1 class="text-center">Please Fill the Form bellow</h1>
              <form name="formbio" action="dbsql_insert.php" method="POST" onsubmit="return validateForm()">
                <div class="form-group mb-4">
                  <label for="fullname">Full Name :</label>
                  <input type="text" class="form-control" name="fullname">
                </div>

                <div class="form-group mb-4">
                  <label for="nickname">Nick Name :</label>
                  <input type="text" class="form-control" name="nickname">
                </div>
              
                <div class="form-group mb-4">
                    <label for="nim">NIM :</label>
                    <input type="text" class="form-control" name="nim">
                </div>
                <div class="form-group mb-4">
                  <label for="email">Email :</label>
                  <input type="text" class="form-control" name="email">
              </div>
                <div class="form-group mb-4">
                  <label>Batch of Student :</label>
                  <select class="form-select" name="batchofstudent">
                    <option selected>Select this option bellow</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                  </select>
                </div>
                <div>
                  <label>Gender :</label>
                  <p><input class="me-1" type='radio' name='gender' value='Male'>Male</p>
                  <p><input class="me-1" type='radio' name='gender' value='Female'>Female</p>
                </div>

          <div class="form-group mb-3">
            <label>Class Day :</label>
            <input type="text" name="classday" id="classday" class="form-control" placeholder="classday">
          </div>
          <div>
            <button type="send" name="send" class="btn btn-primary mb-4">Send</button>
          </div>
          </form>
      </div>
      <script>
        function validateForm() {
          // Validasi Full Name
          if (document.forms["formbio"]["fullname"].value == "") {
              alert("Write your full name here");
              document.forms["formbio"]["fullname"].focus();
              return false;
          }
          // Validasi Nick Name
          if (document.forms["formbio"]["nickname"].value == "") {
              alert("Write your nick name here");
              document.forms["formbio"]["nickname"].focus();
              return false;
          }
          // Validasi Nick Name
          if (document.forms["formbio"]["nim"].value == "") {
              alert("Write your nim here");
              document.forms["formbio"]["nim"].focus();
              return false;
          }
          // Validasi Email
          if (document.forms["formbio"]["email"].value == "") {
              alert("Your active email");
              document.forms["formbio"]["email"].focus();
              return false;
          }
          // Validasi Batch of Student
          if (document.forms["formbio"]["batchofstudent"].selectedIndex < 1){
              alert("Fill the batch first!");
              document.forms["formbio"]["batchofstudent"].focus();
              return false;   
              }
            
          // Validasi Gender
          var gender = document.getElementsByName('gender');
          var genValue = false;
            for(var i=0; i<gender.length;i++){
              if(gender[i].checked == true){
                  genValue = true;    
              }
            }
            if(!genValue){
              alert("Choose your gender!");
              return false;
            }
          // Validasi Class Day
        if (document.forms["formBiodata"]["classday"].value == "") {
            alert("What day is your class day?");
            document.forms["formbio"]["classday"].focus();
            return false;
        }
      }
      </script>
    </section>
    <!-- ======= End Form ======= -->

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