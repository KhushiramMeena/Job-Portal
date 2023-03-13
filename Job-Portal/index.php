<?php
    //creating connection
    $conn = mysqli_connect('localhost','root','','stdinfo');
    // //checking connection
    // if($conn){
    //     echo "Connection Established";
    // }
 
   

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
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

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

   
  <!-- table collapse -->
<style>
    .auto-collapse {
  tbody>tr {
    display:none;
    &.expanded {
      display:table-row;
    }
  }
  &.expanded {
    tbody>tr {
      display:table-row;
    }
    tfoot {
      display: none;
    }    
  }
}

</style>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
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
                    <a href="#about" class="nav-item nav-link">About us</a>
                    <a href="#jobs_internships" class="nav-item nav-link">Jobs | Internships</a>
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


        <!-- Carousel Start -->
        <div class="container-fluid p-0">
            <div class="owl-carousel header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-1.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Perfect Job That
                                        You Deserved</h1>
                                    <!-- <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum
                                        dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd
                                        rebum sea elitr.</p> -->
                                        <a class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" href="https://www.linkedin.com/company/internvsme/?viewAsMember=true" rel="noopener" target="_blank">
                                            Follow us on LinkedIn</a>
                                    <!-- <a href="" class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Find A
                                        Talent</a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="img/carousel-2.jpg" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(43, 57, 64, .5);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Find The Best Startup Job
                                        That Fit You</h1>
                                    <!-- <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum
                                        dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd
                                        rebum sea elitr.</p> -->
                                    <!-- <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Search
                                        A Job</a> -->

                                        <a class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" href="https://www.linkedin.com/company/internvsme/?viewAsMember=true" rel="noopener" target="_blank">
                                            Follow us on LinkedIn</a>
                                    <!-- <p  class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">
                                        Find A Talent</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->


        <!-- Search Start -->
        <!-- <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-4">
                                <input type="text" class="form-control border-0" placeholder="Keyword" />
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Category</option>
                                    <option value="1">Category 1</option>
                                    <option value="2">Category 2</option>
                                    <option value="3">Category 3</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-select border-0">
                                    <option selected>Location</option>
                                    <option value="1">Location 1</option>
                                    <option value="2">Location 2</option>
                                    <option value="3">Location 3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100">Search</button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- Search End -->


        <!-- Category Start -->
        <div class="container-xxl py-5 my-3" id="about">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">About us</h1>
                 <!-- <div class="row g-4"> 
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h6 class="mb-3">Marketing</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-headset text-primary mb-4"></i>
                            <h6 class="mb-3">Customer Service</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-user-tie text-primary mb-4"></i>
                            <h6 class="mb-3">Human Resource</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-tasks text-primary mb-4"></i>
                            <h6 class="mb-3">Project Management</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-chart-line text-primary mb-4"></i>
                            <h6 class="mb-3">Business Development</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-hands-helping text-primary mb-4"></i>
                            <h6 class="mb-3">Sales & Communication</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-book-reader text-primary mb-4"></i>
                            <h6 class="mb-3">Teaching & Education</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a class="cat-item rounded p-4" href="">
                            <i class="fa fa-3x fa-drafting-compass text-primary mb-4"></i>
                            <h6 class="mb-3">Design & Creative</h6>
                            <p class="mb-0">123 Vacancy</p>
                        </a>
                    </div> 
                    
    </div>-->
    <div class="row">

    <div class="col-sm-auto">
        <p class="mb-4 px-5">
At InternVsMe, We Post Daily updates on internships and job openings!
Our vision is to empower the youth of our nation and make them Self-dependent. By providing them with all kinds of opportunities from various sectors, 
sharing knowledge and make them competent enough so that they could excel in any field.
If you have any query regrading Site and any other issue, please feel free to contact.Our contact details is given in the contact section.
    </p>
    </div>

    <!-- <div class="col-sm text-center">
   
        </div> -->
    


 </div>
            </div>
        </div>
        <!-- Category End -->


        <!-- About Start -->
        <div class="container-xxl py-5" >
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        <!-- <div class="row g-0 about-bg rounded overflow-hidden">
                            <div class="col-6 text-start">
                                <img class="img-fluid w-100" src="img/about-1.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid" src="img/about-2.jpg" style="width: 85%; margin-top: 15%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid" src="img/about-3.jpg" style="width: 85%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid w-100" src="img/about-4.jpg">
                            </div>
                        </div> -->
                        <img class="img-fluid w-100" src="img/picg.gif">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <h1 class="mb-4">We Help To Get The Best Internship Or Job</h1>
                        <p class="mb-4"> An internship is providing lots of golden opportunities for students.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>First Job is always Special.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>All off-campus application is here.</p>
                        <p><i class="fa fa-check text-primary me-3"></i>Apply for internshps or jobs & share with your friends.</p>
                        <!-- <a class="btn btn-primary py-3 px-5 mt-3" href="about">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- Jobs Start -->
        <div class="container-xxl py-5" id="jobs_internships">
            <div class="container">
                <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Opportunities</h1>
                <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                        <li class="nav-item">
    
                            <a class="showHideDiv d-flex align-items-center text-start mx-3 pb-3 active" data-bs-toggle="pill" id="role" href="#role"><h6 class="mt-n1 mb-0">Featured</h6></a>
                        </li>
                        <li class="nav-item">
                          
                            <a class="showHideDiv d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" id="department" href="#department"><h6 class="mt-n1 mb-0">Full-time</h6></a>
                        </li>
                        <li class="nav-item">
                           
                            <a class="showHideDiv d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" id="search" href="#search"><h6 class="mt-n1 mb-0">Part-time</h6></a>
                        </li>
                        <li class="nav-item">
                          
                            <a class="showHideDiv d-flex align-items-center text-start mx-3 pb-3"  data-bs-toggle="pill" id="sort" href="#sort"><h6 class="mt-n1 mb-0">Internships</h6></a>
                        </li>
                    </ul>

<script>
    $(".readmore").each(function () {
  var $this = $(this),
      $lis = $this.children(),
      $a = $("<a href='javascript:void(0)'>Less</a>")
  if ($lis.length > 3) {
    $this.after($a);
    $a.click(function () {
      $lis.slice(3).toggle();
      $a.html($a.html() === "More" ? "Less" : "More")
    }).click();
  }
});
</script>

                    
                    <!--Role Container -->
                    <div id="role_div" class="role" name="role">
                        <!-- All jobs -->
                        <div class="tab-content" id="role_tab-1" class="tab-1" name="tab-1">
                            <div class="tab-pane fade show p-0 active">



                                <!-- jobs -->
                                <table class="table auto-collapse tb1">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <!-- php -->
                                    <?php
       //select all query
        $query = "SELECT * FROM student ORDER BY id DESC";
        //reading data from databse
        $readQuery = mysqli_query($conn, $query);
        // if table has more than 0 row then it will read data
        if($readQuery->num_rows >0){
          // if tables row > 0 read data from db and store the data into rd variable
          while($rd=mysqli_fetch_assoc($readQuery)){
            //'id' is the table column name which col will be read
            $stdid = $rd['id']; // keeping data from db table to variable
            $job_title = $rd['job_title'];
            $company_name = $rd['company_name'];
            $job_place=$rd['job_place'];
            $job_status=$rd['job_status'];
            $last_date=$rd['last_date'];
            $apply_link=$rd['apply_link'];
            $post_date=$rd['post_date'];
            $logo=$rd['logo'];
            $salary=$rd['salary'];
          
       ?>
                                    <!-- php-end -->
                                    <tbody>
                                        <tr>
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <!-- <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo'$logo' ?>" alt="" style="width: 80px; height: 80px;"> -->
                                                        <img class='flex-shrink-0 img-fluid border rounded'
                                                            src="<?php echo"$logo" ?>"
                                                            style="width:80px;height=80px;" />
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3"><?php echo"$job_title" ?> at
                                                                <?php echo"$company_name" ?></h5>
                                                            <span class="text-truncate me-3"><i
                                                                    class="fa fa-map-marker-alt text-primary me-2"></i><?php echo"$job_place" ?></span>
                                                            <span class="text-truncate me-3"><i
                                                                    class="far fa-clock text-primary me-2"></i><?php echo"$job_status" ?></span>
                                                            <span class="text-truncate me-2"><i
                                                                    class="far fa-money-bill-alt text-primary me-1"></i>
                                                                    <?php echo"$salary" ?>
                                                                </span>
                                                             <span class="text-truncate me-2"> <i class="far fa-calendar-alt text-primary me-1"></i>
                                                            Posted on : <?php $today=date("d/m/Y"); echo $today ?></span>

                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex mb-3">
                                                            <a class="btn btn-light btn-square me-3" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo "$apply_link"?>">
                                                            <img src="img/send.png" alt="share" ></i>
                                                            </a>
                                                            <a class="btn btn-primary"
                                                                href="<?php echo"$apply_link" ?>">Apply Now</a>
                                                        </div>
                                                        <small class="text-truncate "><i
                                                                class="far fa-calendar-alt text-primary me-2"></i>
                                                                Last Date:
                                                                 <?php 
                                                                 if($last_date=="0000-00-00")
                                                                echo"N/A";
                                                                else{
                                                                    echo "$last_date";
                                                                } 
                                                                ?>
                                                                </small>
                                                                
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php
          }                          
        }
        else{
          echo "No data to show";
        }
       
       ?>

                                    </tbody>



                                </table>


                            </div>
                        </div>
                        <!-- All jobs-end -->


                    </div>
                    <!--Department Container -->
                    <div id="dept_div" class="role" name="role" style="display:none;">
                        <!-- fulltime jobs -->
                        <div class="tab-content" id="role_tab-1" class="tab-1" name="tab-1">
                            <div class="tab-pane fade show p-0 active">



                                <!-- jobs -->
                                <table class="table">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <!-- php -->
                                    <?php
       //select all query
        $query = "SELECT * FROM student where job_status='Full-time' ";
        //reading data from databse
        $readQuery = mysqli_query($conn, $query);
        // if table has more than 0 row then it will read data
        if($readQuery->num_rows >0){
          // if tables row > 0 read data from db and store the data into rd variable
          while($rd=mysqli_fetch_assoc($readQuery)){
            //'id' is the table column name which col will be read
            $stdid = $rd['id']; // keeping data from db table to variable
            $job_title = $rd['job_title'];
            $company_name = $rd['company_name'];
            $job_place=$rd['job_place'];
            $job_status=$rd['job_status'];
            $last_date=$rd['last_date'];
            $apply_link=$rd['apply_link'];
            $post_date=$rd['post_date'];
            $logo=$rd['logo'];
          
       ?>
                                    <!-- php-end -->
                                    <tbody>
                                        <tr>
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <!-- <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo'$logo' ?>" alt="" style="width: 80px; height: 80px;"> -->
                                                        <img class='flex-shrink-0 img-fluid border rounded'
                                                            src="<?php echo"$logo" ?>"
                                                            style="width:80px;height=80px;" />
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3"><?php echo"$job_title" ?> at
                                                                <?php echo"$company_name" ?></h5>
                                                            <span class="text-truncate me-3"><i
                                                                    class="fa fa-map-marker-alt text-primary me-2"></i><?php echo"$job_place" ?></span>
                                                            <span class="text-truncate me-3"><i
                                                                    class="far fa-clock text-primary me-2"></i><?php echo"$job_status" ?></span>
                                                            <span class="text-truncate me-0"><i
                                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123
                                                                - $456</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex mb-3">
                                                        <a class="btn btn-light btn-square me-3" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo "$apply_link"?>">
                                                            <img src="img/send.png" alt="share" ></i>
                                                            </a>
                                                            <a class="btn btn-primary"
                                                                href="<?php echo"$apply_link" ?>">Apply Now</a>
                                                        </div>
                                                        <small class="text-truncate"><i
                                                                class="far fa-calendar-alt text-primary me-2"></i>Last
                                                            Date:
                                                            <?php echo"$last_date" ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php
          }                          
        }
        else{
          echo "No data to show";
        }
       
       ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                        <!-- fulltime-end -->
                    </div>



                    <!--Search Container -->
                    <div id="search_div" class="role" name="role" style="display:none;">
                        <!-- part-time jobs -->
                        <div class="tab-content" id="role_tab-1" class="tab-1" name="tab-1">
                            <div class="tab-pane fade show p-0 active">



                                <!-- jobs -->
                                <table class="table">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <!-- php -->
                                    <?php
       //select all query
        $query = "SELECT * FROM student where job_status='Part-time'";
        //reading data from databse
        $readQuery = mysqli_query($conn, $query);
        // if table has more than 0 row then it will read data
        if($readQuery->num_rows >0){
          // if tables row > 0 read data from db and store the data into rd variable
          while($rd=mysqli_fetch_assoc($readQuery)){
            //'id' is the table column name which col will be read
            $stdid = $rd['id']; // keeping data from db table to variable
            $job_title = $rd['job_title'];
            $company_name = $rd['company_name'];
            $job_place=$rd['job_place'];
            $job_status=$rd['job_status'];
            $last_date=$rd['last_date'];
            $apply_link=$rd['apply_link'];
            $post_date=$rd['post_date'];
            $logo=$rd['logo'];
          
       ?>
                                    <!-- php-end -->
                                    <tbody>
                                        <tr>
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <!-- <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo'$logo' ?>" alt="" style="width: 80px; height: 80px;"> -->
                                                        <img class='flex-shrink-0 img-fluid border rounded'
                                                            src="<?php echo"$logo" ?>"
                                                            style="width:80px;height=80px;" />
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3"><?php echo"$job_title" ?> at
                                                                <?php echo"$company_name" ?></h5>
                                                            <span class="text-truncate me-3"><i
                                                                    class="fa fa-map-marker-alt text-primary me-2"></i><?php echo"$job_place" ?></span>
                                                            <span class="text-truncate me-3"><i
                                                                    class="far fa-clock text-primary me-2"></i><?php echo"$job_status" ?></span>
                                                            <span class="text-truncate me-0"><i
                                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123
                                                                - $456</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex mb-3">
                                                        <a class="btn btn-light btn-square me-3" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo "$apply_link"?>">
                                                            <img src="img/send.png" alt="share" ></i>
                                                            </a>
                                                            <a class="btn btn-primary"
                                                                href="<?php echo"$apply_link" ?>">Apply Now</a>
                                                        </div>
                                                        <small class="text-truncate"><i
                                                                class="far fa-calendar-alt text-primary me-2"></i>Last
                                                            Date:
                                                            <?php echo"$last_date" ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php
          }                          
        }
        else{
          echo "No data to show";
        }
       
       ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                        <!-- part-time-end -->
                    </div>
                    <div id="sort_div" class="role" name="role" style="display:none;">
                        <!-- Interndhips -->
                        <div class="tab-content" id="role_tab-1" class="tab-1" name="tab-1">
                            <div class="tab-pane fade show p-0 active">



                                <!-- jobs -->
                                <table class="table">
                                    <thead>
                                        <tr>

                                        </tr>
                                    </thead>
                                    <!-- php -->
                                    <?php
       //select all query
        $query = "SELECT * FROM student where job_status='Internship'";
        //reading data from databse
        $readQuery = mysqli_query($conn, $query);
        // if table has more than 0 row then it will read data
        if($readQuery->num_rows >0){
          // if tables row > 0 read data from db and store the data into rd variable
          while($rd=mysqli_fetch_assoc($readQuery)){
            //'id' is the table column name which col will be read
            $stdid = $rd['id']; // keeping data from db table to variable
            $job_title = $rd['job_title'];
            $company_name = $rd['company_name'];
            $job_place=$rd['job_place'];
            $job_status=$rd['job_status'];
            $last_date=$rd['last_date'];
            $apply_link=$rd['apply_link'];
            $post_date=$rd['post_date'];
            $logo=$rd['logo'];
          
       ?>
                                    <!-- php-end -->
                                    <tbody>
                                        <tr>
                                            <div class="job-item p-4 mb-4">
                                                <div class="row g-4">
                                                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                                        <!-- <img class="flex-shrink-0 img-fluid border rounded" src="<?php echo'$logo' ?>" alt="" style="width: 80px; height: 80px;"> -->
                                                        <img class='flex-shrink-0 img-fluid border rounded'
                                                            src="<?php echo"$logo" ?>"
                                                            style="width:80px;height=80px;" />
                                                        <div class="text-start ps-4">
                                                            <h5 class="mb-3"><?php echo"$job_title" ?> at
                                                                <?php echo"$company_name" ?></h5>
                                                            <span class="text-truncate me-3"><i
                                                                    class="fa fa-map-marker-alt text-primary me-2"></i><?php echo"$job_place" ?></span>
                                                            <span class="text-truncate me-3"><i
                                                                    class="far fa-clock text-primary me-2"></i><?php echo"$job_status" ?></span>
                                                            <span class="text-truncate me-0"><i
                                                                    class="far fa-money-bill-alt text-primary me-2"></i>$123
                                                                - $456</span>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                                        <div class="d-flex mb-3">
                                                        <a class="btn btn-light btn-square me-3" target="_blank" href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo "$apply_link"?>">
                                                            <img src="img/send.png" alt="share" ></i>
                                                            </a>
                                                            <a class="btn btn-primary"
                                                                href="<?php echo"$apply_link" ?>">Apply Now</a>
                                                        </div>
                                                        <small class="text-truncate"><i
                                                                class="far fa-calendar-alt text-primary me-2"></i>Last
                                                            Date:
                                                            <?php echo"$last_date" ?></small>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        <?php
          }                          
        }
        else{
          echo "No data to show";
        }
       
       ?>

                                    </tbody>
                                </table>


                            </div>
                        </div>
                        <!-- Intern-end -->
                    </div>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                    <script>
                    $(document).ready(function() {
                        $(".showHideDiv").click(function() {
                            var clickedBtnId = $(this).attr('id');
                            if (clickedBtnId === 'role') {
                                $('#role_div').show();
                                $('#dept_div').hide();
                                $('#search_div').hide();
                                $('#sort_div').hide();
                            } else if (clickedBtnId === 'department') {
                                $('#role_div').hide();
                                $('#dept_div').show();
                                $('#search_div').hide();
                                $('#sort_div').hide();
                            } else if (clickedBtnId === 'search') {
                                $('#role_div').hide();
                                $('#dept_div').hide();
                                $('#search_div').show();
                                $('#sort_div').hide();
                            } else if (clickedBtnId === 'sort') {
                                $('#role_div').hide();
                                $('#dept_div').hide();
                                $('#search_div').hide();
                                $('#sort_div').show();
                            }
                        });
                    });
                    </script>



                    <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Jobs End -->


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp my-3" data-wow-delay="0.1s">
        <div class="container">
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>An investment in knowledge pays the best interest.
                </p>
                    <div class="d-flex align-items-center">
                        <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-1.jpg"
                            style="width: 50px; height: 50px;"> -->
                        <div class="ps-3">
                            <h5 class="mb-1">- Benjamin Franklin</h5>
                            <!-- <small>Profession</small> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Anyone who has never made a mistake has never tried anything new.
                    </p>
                    <div class="d-flex align-items-center">
                        <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-2.jpg"
                            style="width: 50px; height: 50px;"> -->
                        <div class="ps-3">
                            <h5 class="mb-1">- Albert Einstein</h5>
                            <!-- <small>Profession</small> -->
                        </div>
                    </div>
                </div>
                <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Failure is a part of the process. You just learn to pick yourself back up.
                    </p>
                    <div class="d-flex align-items-center">
                        <!-- <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-3.jpg"
                            style="width: 50px; height: 50px;"> -->
                        <div class="ps-3">
                            <h5 class="mb-1">- Michelle Obama</h5>
                            <!-- <small>Profession</small> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="testimonial-item bg-light rounded p-4">
                    <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                    <p>Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam
                    </p>
                    <div class="d-flex align-items-center">
                        <img class="img-fluid flex-shrink-0 rounded" src="img/testimonial-4.jpg"
                            style="width: 50px; height: 50px;">
                        <div class="ps-3">
                            <h5 class="mb-1">Client Name</h5>
                            <small>Profession</small>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


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