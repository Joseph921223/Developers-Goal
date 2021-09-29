<?php 



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Developers Goal</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="index.html">Developers Goal</h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto">
      <img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="learner.php">Cadidate</a></li>
          <li><a href="teacher.php">Teacher</a></li>
          <li><a href="principal.php">Manager</a></li>
          <li><a href="subjects.php">tool</a></li>
          <li class="drop-down"><a href="">Admin</a>
            <ul>
             <!-- <li><a href="#">Drop Down 1</a></li>-->
              <li class="drop-down"><a href="admin.php">Cadidate</a>
                <ul>
                  <li><a href="admin.php">Manager</a></li>
                  <li><a href="#">Cadidate Training  Role</a></li>
                  <li><a href="#">Teacher Training Role</a></li>
                  <li><a href="#">Chosen Language</a></li>
                  <li><a href="#">Which Year</a></li>
                
                </ul>
              </li>
              <li class="drop-down"><a href="#">Teacher</a>
              <ul>
                  <li><a href="#">Cadidate Training Role</a></li>
                  <li><a href="#">Subject Teacher</a></li>
                  <li><a href="#">Teacher Name</a></li>
                  <li><a href="#">Which Grade</a></li>
                  <li><a href="#">Year</a></li>
          </ul>
           
           <li class="drop-down"><a href="#">Programming Subjects</a>
           <ul>
              <li><a href="#">HTML</a></li>
              <li><a href="#">CSS</a></li>
              <li><a href="#">javascript</a></li>
              <li><a href="#">PHP</a></li>
              <li><a href="#">bootstrap</a></li>
              <li><a href="#">jquery</a></li>
              <li><a href="#">laravel</a></li>
              <li><a href="#">java/a></li>
              <li><a href="#">c++</a></li>
              <li><a href="#">C#</a></li>
           </ul>
            
          </li>
          

        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
 <!-- <main id="main">-->
 
<form action="process.php" method="POST">
 <div class="row">
 <div class="form-group col-xs-12">

    <div class="container" >
    <div class="col-md-5" style="float: none; margin: 0 auto;">
      <div class="form-area">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 250px;">
          <strong><font color="blue" >LOGIN</font></strong></h3>



          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email"
             placeholder="email" required>
          </div>     

          <div class="form-group">
            <input type="password" class="form-control" id="pass" name="pass"
             placeholder="password" required>
          </div>     
     
        <input type="submit" name="submit" type="button" id="submit"
           name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>



      
     <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a>-->
    </div>
  </section><!-- End Hero -->

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>