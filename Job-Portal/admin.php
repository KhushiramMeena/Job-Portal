<?php

$alrt1=false;
$alrt2=false;
$deletion=false;
    //creating connection
    $conn = mysqli_connect('localhost','root','','stdinfo');
    // //checking connection
    // if($conn){
    //     echo "Connection Established";
    // }

    //if click on button take filed value & insert to db
    if(isset($_POST['btn'])){
        //finding input filed value into variable
        $job_title = $_POST['job_title'];
        $company_name = $_POST['company_name'];
        $job_place=$_POST['job_place'];
        $job_status=$_POST['job_status'];
        $last_date=$_POST['last_date'];
        $apply_link=$_POST['apply_link'];
        $salary=$_POST['salary'];
        $logo=$_FILES['logo'];
// print_r($logo);

// for images
$filename = $logo['name'];
$filepath = $logo['tmp_name'];
$fileerror = $logo['error'];

        //if job_title & company_name field not empty perform insert operation
        if(!empty($job_title) && !empty($company_name)){
            //sql query // job_title string that's why keeping like string/text
            // for image
            $destfile='img/logos/'.$filename;
            move_uploaded_file($filepath,$destfile);

            $query = "INSERT INTO student(job_title,company_name,job_place,job_status,last_date,apply_link,post_date,logo,salary) VALUE('$job_title','$company_name','$job_place','$job_status','$last_date','$apply_link',NOW(),'$destfile','$salary')";

            //sending data to database
            $createQuery = mysqli_query($conn, $query);
            if($createQuery){
            //   echo "Data successfully inserted.";
            $alrt1=true;
            }
        }
        else{
            // echo "Field Should not be empty";
            $alrt2=true;
        }
    }
?>

<!-- code for delete  -->
<?php
  //if click on delete
  if(isset($_GET['delete'])){
    $stdid = $_GET['delete']; //keeping the delete id in stdid
    $query = "DELETE FROM student WHERE id={$stdid}";
    $deleteQuery = mysqli_query($conn, $query);
    if($deleteQuery){
      $deletion=true;
    }
  }
?>

<?php

session_start();

if (!isset($_SESSION['name'])) {
  header('location: ./handle.php');
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
                    <!-- <a href="#about" class="nav-item nav-link">About us</a> -->
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
                    <!-- <a href="contact.php" class="nav-item nav-link active">Contact us</a> -->
                    <a class="nav-item nav-link active"> Logged-in as <?= $_SESSION['name'] ?></a>
                </div>
                <!-- <a href="admin.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i
                        class="fa fa-arrow-right ms-3"></i></a> -->
                        <a href="./logout.php" class="btn btn-primary rounded-0 py-4 px-lg-5 d-none d-lg-block">Logout
                            <i class="fa fa-arrow-right ms-3"></i>
                        </a>
            </div>
        </nav>
        <!-- Navbar End -->

        <!-- form -->
        <div class="container text-center shadow m-5 p-4 mx-auto rounded">
            <form method="post" action="admin.php" enctype="multipart/form-data" class="justify-content-around "  onsubmit="window.location.reload();">
    
                <!-- row-1 -->
                <div class="row d-flex ">
                    <div class="col-lg-4 bg-light">
                        <label for="exampleInputEmail1" class="d-flex justify-content-start"><b>Enter Job Title</b></label>
               <input class="form-control me-3" type="text" name="job_title" placeholder="Job Title" required>
                    </div>
                    <div class="col-lg-4 bg-light">
                        <label for="exampleInputEmail1" class="d-flex justify-content-start"><b>Enter Company name</b></label>
                        <input class="form-control me-3" type="text" name="company_name" placeholder="Company name" required>

                    </div>
                    <div class="col-lg-4 bg-light">
                        <label for="exampleInputEmail1" class="d-flex justify-content-start"><b>Enter Job place</b></label>
                        <input class="form-control me-3" type="text" name="job_place" placeholder="Job place">
                    </div> 
                   
                </div>
                
                <!-- row-2 -->
                <div class="row  my-3 border border-light bg-light">
                    <div class="col-lg-2 d-flex justify-content-start">
                      
                        <b>  Job Status :</b>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="radio" name="job_status" id="ft" value="Full-time" required>
                        <label class="form-check-label" for="ft">Full-time</label>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="radio" name="job_status" id="pt" value="Part-time" required>
                        <label class="form-check-label" for="pt">Part-time</label>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-check-input" type="radio" name="job_status" id="inp" value="Internship" required>
                        <label class="form-check-label" for="inp">Internship</label>
                    </div>
                    <div class="col-lg-2">
                      <b>  Salary :</b>
                    </div>
                    <div class="col-lg-2">
                        <input class="form-control me-3" type="text" name="salary"  value="N/A" >
                       
                    </div>
                </div>
    
                <!-- row-3-->
                <div class="row bg-light">
                    <div class="col-lg-3  d-flex justify-content-start">
                        
                         <b>   Link to apply :</b>
                    </div>
                    <div class="col-lg-9">
                        <input class="form-control me-3" type="text" name="apply_link" placeholder="Application Link" required>
                   </div>
                
                </div>
    
                 <!-- row-4-->
     <div class="row bg-light my-2">
                
       <div class="input-group m-3 d-flex justify-content-start">
        <div class="row">
            <div class="col-lg-5 d-flex justify-content-start ">
                <!-- <div class="input-group-prepen"> -->
                     <b>Company Logo </b>
                  <!-- </div> -->
            </div>
            <div class="col-lg-7">
                <div class="custom-fil">
                    <input type="file" class="custom-file-inpu" id="logo" name="logo" required >
                </div>
            </div>
        </div>
     
      
       </div>
     </div>
    
     <!-- row-5 -->
     <div class="row bg-light my-2 ">
        <div class="col-lg-3 d-flex justify-content-start text-center">
           
               <b> Last date to apply :</b>
                
              
        </div>
    <div class="col-lg-6">
        <div class="md-form md-outline input-with-post-icon datepicker">
      <input placeholder="Select date" type="date" name="last_date" id="last_date"  class="form-control">
      
    </div> 
    </div>

     </div>
    
              <input class="btn btn-success" type="submit" value="Submit" name="btn" onclick="submitForm()">
    </form>
        </div>
<!-- alert -->
<?php
if($alrt1==true){
    echo ' 
    <div class="alert alert-success d-flex justify-content-center" role="alert">
    !! Job Posted Successfully !!
  </div>
    
    ';
}
if($alrt2==true){
    echo ' 
    <div class="alert alert-danger d-flex justify-content-center" role="alert">
    !! Something went wrong !!
  </div>
    
    ';
}
if($deletion==true){
    echo ' 
    <div class="alert alert-success d-flex justify-content-center" role="alert">
    !! Job removed !!
  </div>
    
    ';
}
?>
<!-- alert -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<script type="text/javascript">

$(document).ready(function () {
 
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 2000);
 
});
</script>

<!-- table -->

<div class="container bg-dark">
<div class="row header" style="text-align:center;">
<h4 style="color:white;">All Posted Jobs</h4>
</div>

<table id="myTable" class="table table-striped table-bordered table-responsive table-hover" >  
        <thead>  
          <tr>  
                 <th>S.No. </th>
                <th>Company </th>
                <th>Job title</th>
                <th>job place</th>
                <th>job status</th>
                <th>Salary</th>
                <th>Last Date </th>
                <th>Application Link</th>
                <th>Posted on </th>
                <th>LOGO</th>
                <th>Action</th> 
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
            $salary=$rd['salary']
          
       ?>
  <!-- php-end -->  
        <tbody>  
        <tr>
               <td>  <?php echo"$stdid" ?></td>
                <td><?php echo"$job_title" ?></td>
                <td><?php echo"$company_name" ?></td>
                <td><?php echo"$job_place" ?></td>
                <td><?php echo"$job_status" ?></td>
                <td><?php echo"$salary" ?></td>
                <td><?php echo"$last_date" ?></td>
                <td><a href="<?php echo"$apply_link" ?>"><?php echo"$apply_link" ?></a></td>
                <td><?php echo"$post_date" ?></td>
                <td><img src="<?php echo"$logo" ?>"style="width:40px;height=30px;"/></td>
                

                <td><a href="admin.php?delete=<?php echo"$stdid" ?>" class="btn btn-danger">Delete</a></td>
                <?php $stdid=$stdid-1; ?>
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
</body>  
<script>
$(document).ready(function(){
    $('#myTable').dataTable();
});
</script>



<!-- script to clear input field -->
<script>
  function submitForm() {
   // Get the first form with the name
   // Usually the form name is not repeated
   // but duplicate names are possible in HTML
   // Therefore to work around the issue, enforce the correct index
   var frm = document.getElementsByName('contact-form')[0];
   frm.submit(); // Submit the form
   frm.reset();  // Reset all form data
   return false; // Prevent page refresh
}
  </script>





        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            
            <div class="container">
                <div class="copyright">
                    <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                       Copyright &copy; 2023 All Rights Reserved.
                    </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <!-- <a href="">Cookies</a> -->
                                <a href="contact.php">Contact</a>
                                <a href="./logout.php">Logout</a>
                            </div>
                        </div>
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