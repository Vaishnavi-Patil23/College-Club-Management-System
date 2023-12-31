<?php
  session_start();
  if(!isset($_SESSION['name'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Club Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Club Management System</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="admin.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll preg" href="#ser">Registered Performer </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll tpreg" href="#ser">Todays Registration </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/logout.php">Log out</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/home1.jpg);background-size: cover; ">
    <div class="overlay-itro"></div>
  <br>
  <br>
  <br>
  <hr>
   <div class="container mt-5" id="presult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">

      
            <h3 class="text-center text-white">Sem </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="psresult"></div>
      </div>
    </div>
  </div>
  <div class="container mt-5" id="ptresult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Semester </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="ptsresult"></div>
      </div>
    </div>
  </div>
  
    <div class="container mt-5" id="psearchresult">
    <div class="card" >
      <h2 class="text-center ">Performer Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Performer Name</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Sem </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Dance Style</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="psubmit2"></div>
      </div>
    </div>
  </div>
  </div>
  <!--/ Intro Skew End /-->

    <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>