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
            <a class="nav-link js-scroll active" href="#home">Home</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#service">Categories</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="#work">Clubs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/tlogin.php">Co-Ordinator</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/admin.php">Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" href="registration/login.php">Log In Now</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(images/AdminBuilding.jpg);background-size: cover; ">
    <div class="overlay-itro"></div>
   <?php
      $con=mysqli_connect('localhost','root','','dance');
      $sql="SELECT * FROM workshop WHERE wshow='1'";
      $run=mysqli_query($con,$sql);
    if (mysqli_num_rows($run)==0){
          echo "<div class='intro-content display-table'>
      <div class='table-cell'>
        <div class='container'>
          <h1 class='intro-title mb-4'>Club Management System</h1>
          <p class='intro-subtitle'><span class='text-slider-items'>Description</span><strong class='text-slider'></strong></p>
        </div>
      </div>
    </div>";
      }else{
        $row=mysqli_fetch_array($run);
        $wid=$row['wid'];
        $wname=$row['wname'];
        $wdate=$row['wdate'];
        $wtime=$row['wtime'];
        $wdesc=$row['wdesc'];
        $venue=$row['venue'];
        echo " <div class='intro-content display-table'>
      <div class='table-cell'>
        <div class='container'>
          <p class='display-6 color-d'>Event Date :15 March 2024 <b>Time :</b>10:00 am </p>
          <p class='display-6 color-d'><b>Venue</b>: Auditorium </p>
          <h1 class='intro-title mb-4'>PRAGYA</h1>
          <p class='intro-subtitle'><span class='text-slider-items'>$wdesc</span><strong class='text-slider'></strong></p>
          
          
        </div>
      </div>
    </div>";

      }

   ?>
  </div>
   <!--/ Section Services Star /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
    <div class="overlay-mf"></div> 
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              CATEGORIES
            </h3>
           
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(images/dance.jpeg); background-size: cover; height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white mr-5"> <b>Dance </b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img8.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Music</b></h2>
            
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(images/onstage.jpg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white " > <b>Fashion </b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img2.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Technical</b></h2>
             
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img3.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Media</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img1.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Drama</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
           <div class="service-box" style="background-image:url(img/img12.png); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Art & Literature</b></h2>
              
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-box" style="background-image:url(images/Zenith.jpeg); background-size: cover;height: 300px;">
            <div class="service-ico">
            </div>
            <div class="service-content ">
              <h2 class="s-title text-white"> <b>Sports</b></h2>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
  <!--/ Section Services End /-->
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/back2.jpg);background-size: cover;">
   <section id="work" class="portfolio-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a">
              CLUBS
            </h3>
           
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="work-box">
            <a href="images/fsdc.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="images/fsdc.jpg" alt=" " class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory"> FSDC Dance Club</span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="img/port3.png" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="img/port3.png" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Avroh Singing Club</span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="images/Rmageddon.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="images/Rmageddon.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">RNXG Technical Club</span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
         <div class="col-md-4">
          <div class="work-box">
            <a href="images/Drama.jpeg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="images/Drama.jpeg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Gandharva Drama Club</span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="images/media.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="images/media.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Media Cell</span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
          <div class="col-md-4">
          <div class="work-box">
            <a href="images/drishti.jpg" data-lightbox="gallery-mf">
              <div class="work-img">
                <img src="images/drishti.jpg" alt="" class="img-fluid">
              </div>
              <div class="work-content">
                <div class="row">
                  <div class="col-sm-8">
                    
                    <div class="w-more">
                      <span class="w-ctegory">Drishti </span> 
                    </div>
                  </div>
                 
                </div>
              </div>
            </a>
          </div>
        </div>
        
      </div>
    </div>
  </section>
</div>

  
  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/back3.png)">
      <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
            
                <span class="author"></span>
              </div>
              <div class="content-test">
                <p class="description lead">
                We are here to reveal the Talents of SGGS
                   <p>-Photography</p> 
                   <p>-Dancing</p> 
                   <p>-Music</p> 
                   <p>-Acting</p> 
                   <p>-Sport</p>
                   <p>-Art</p> 
                   <p>-and many more</p>
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="paralax-mf footer-paralax bg-image  route" style="background-image: url(img/back3.png)">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="contact-mf">
            <div id="contact">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left text-white">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class=" text-white lead">
                      Event and Clubs of SGGS
                     </p>
                    <ul class="list-ico text-white">
                      <li><span class="ion-ios-location"></span>Shri Guru Govind Singhji Institute of Engineering and Technology, Vishnupuri, Nanded.</li>
                      <li><span class="ion-ios-telephone"></span> +916203077377</li>
                      <li><span class="ion-email"></span> sggs.ac.in</li>
                    </ul>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <div class="credits">
                
                You're always welcome to be a part of Event and Club of SGGS </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

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
