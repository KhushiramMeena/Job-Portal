<?php

session_start();

if (isset($_SESSION['name'])) {
  header('location: ./admin.php');
  exit;
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>InternVsMe-get daily updates about latest jobs and internships</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/l1.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


     <!-- Navbar Start -->
     <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
            <a href="index.php" class="navbar-brand d-flex align-items-center text-center py-0 px-0 px-lg-1">
                <img src=img/l1.png alt="internvsme-logo" style="width:50px;height:50px;"/>
                <h1 class="m-0 text-primary">InternVsMe</h1>
            </a>
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link ">Home</a>
                    <a href="index.php#about" class="nav-item nav-link">About us</a>
                    <a href="index.php#jobs_internships" class="nav-item nav-link">Jobs | Internships</a>
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="job-list.html" class="dropdown-item">Job List</a>
                            <a href="job-detail.html" class="dropdown-item">Job Detail</a>
                        </div>
                    </div> -->
                    <!-- <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="category.html" class="dropdown-item">Job Category</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                            <a href="404.html" class="dropdown-item">404</a>
                        </div>
                    </div> -->
                    <a href="contact.php" class="nav-item nav-link">Contact us</a>
                </div>
                <a href="admin.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block" >Post A Job<i
                        class="fa fa-arrow-right ms-3"></i></a>
                        <!-- <button id="myBtn" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">
                            Post A Job <i class="fa fa-arrow-right ms-3"></i></button> -->
            </div>
        </nav>
        <!-- Navbar End -->


        <!-- Header End -->
        <div class="container-xxl py-5 bg-dark page-header mb-5">
            <div class="container my-5 pt-5 pb-4">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Post New Job</h1>
                <nav aria-label="breadcrumb" class="col col-lg-4">
                    <div class="p-3 mb-2 bg-warning text-dark"><b>Only Admin can post new Jobs!</b></div>
                </nav>
            </div>
        </div>
        <!-- Header End -->



        <div class="container ">
            <p class="text-center">Login as admin</p>
            <hr/>
        <div class="row d-flex justify-content-center">
</div>
  <div class="row justify-content-md-center">
    <div class="col col-lg-3">
      
    </div>
    <div class="col-lg-6">
    <?php if (isset($_SESSION['login_failed'])) : ?>
        <div class="alert text-danger bg-warning">
          Incorrect username or password!
        </div>
      <?php
        unset($_SESSION['login_failed']);
      endif;
      ?>
      <form action="./auth.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
   
    <input type="text" class="form-control" placeholder="Username" name="username" required />
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>

    <input type="password" class="form-control" placeholder="Password" name="password" required />
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Login</button>
</form>
    </div>
    <div class="col col-lg-3">
     
    </div>
  </div>
    </div>
      

        
 <!-- Footer Start -->
 <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Company</h5>
                    <a class="btn btn-link text-white-50" href="#about">About Us</a>
                    <a class="btn btn-link text-white-50" href="contact.php">Contact Us</a>
                    <!-- <a class="btn btn-link text-white-50" href="">Our Services</a> -->
                    <!-- <a class="btn btn-link text-white-50" href="">Privacy Policy</a> -->
                    <!-- <a class="btn btn-link text-white-50" href="">Terms & Condition</a> -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Quick Links</h5>
                    <!-- <a class="btn btn-link text-white-50" href="">About Us</a> -->
                    <!-- <a class="btn btn-link text-white-50" href="">Contact Us</a> -->
                    <!-- <a class="btn btn-link text-white-50" href="">Our Services</a> -->
                    <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                    <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Contact</h5>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Nagpur, Maharashtra, India</p>
                    <!-- <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p> -->
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>internvsme24x7@gmail.com</p>
                    <!-- <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-telegram"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div> -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-white mb-4">Get in touch </h5>
        
                    <a class=" d-inline btn btn-outline-light btn-social" href="https://www.linkedin.com/company/internvsme/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>

                    <a class=" d-inline btn btn-outline-light btn-social" href="https://www.linkedin.com/company/internvsme/?viewAsMember=true"><i class="fab fa-telegram"></i></a>
                
                    
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row text-center ">
                      <p> Copyright &copy; 2023 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>