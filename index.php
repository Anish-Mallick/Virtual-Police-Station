<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Police Station</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" crossorigin="anonymous">  
         <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="index.css">
	<style>
	ul li .dropdown::marker {dispaly:none;}
	</style>
	
</head>
<body>
    <!--heading-->

    <section>
        <div class="heading" style="background-color:#233e8b;height:120px;">
            <h1 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white;">
				AVADI POLICE HEADQUARTER
          </h1>
		  <h3 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white;">Chennai-600062, Tamil Nadu</h3>
          </div>
    </section>

    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
              </li>
              <li class="nav-item dropdown" style="margin-left:1000px;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
				style="color:white;">
                  LOGIN AS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="public/index.php">Public</a></li>
                  <li><a class="dropdown-item" href="inspector/index.php">Inspector</a></li>
                  <li><a class="dropdown-item" href="sub_inspector/index.php">Sub-Inspector</a></li>
                  <li><a class="dropdown-item" href="admin/index.php">Admin</a></li>
                </ul>
              </li>
            </ul>
            
              
           
          </div>
        </div>
      </nav>
    <!--navbar-->
    <!--image section-->
    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="police3.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="aman pic.jpg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="police 4.jfif" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!--image section-->
    <!--card-->
    <section class="cont">
        <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="card card border-success mb-3" style="width: 18rem; height: max-content ">
                <div class="card-header bg-transparent border-success">Instant FIR</div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">Click below to register FIR.</p>
                  <div class="card-footer bg-transparent border-success">
                  <a href="fir.php" class="btn btn-primary">FIR registration</a></div>
                </div>
                </div>
                </div>
            <div class="col-sm-6 col-md-3">
              <div class="card card border-success mb-3" style="width: 18rem;">
                <div class="card-header bg-transparent border-success">FIR View</div>
                <div class="card-body">
                  <h5 class="card-title"></h5>
                  <p class="card-text">Click below to view your FIR.</p>
                  <div class="card-footer bg-transparent border-success">
                    <a href="inspector/index.php" class="btn btn-primary">View FIR</a></div>
                </div>
              </div>
            </div>
                <div class="col-sm-6 col-md-3 ">
                  <div class="card card border-success mb-3" style="width: 18rem;">
                    <div class="card-header bg-transparent border-success">FIR Status</div>
                    <div class="card-body">
                      <h5 class="card-title"></h5>
                      <p class="card-text">Click below to check your FIR Status</p>
                      <div class="card-footer bg-transparent border-success">
                        <a href="public/index.php" class="btn btn-primary">FIR Status</a></div>
                    </div>
                  </div>
                </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card card border-success mb-3" style="width: 18rem; ">
                        <div class="card-header bg-transparent border-success">Download Application Forms</div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Click below to Download various type of Application Forms.</p>
                          <div class="card-footer bg-transparent border-success">
                            <a href="fir.php" class="btn btn-primary">Download Now</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card card border-success mb-3" style="width: 18rem; ">
                        <div class="card-header bg-transparent border-success">Lost Document Report</div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Complaint below for lost document.</p>
                          <div class="card-footer bg-transparent border-success">
                            <a href="public/index.php" class="btn btn-primary">Lost Document</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card card border-success mb-3" style="width: 18rem; ">
                        <div class="card-header bg-transparent border-success">Missing Person</div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Click below to complaint for missing person.</p>
                          <div class="card-footer bg-transparent border-success">
                            <a href="admin/index.php" class="btn btn-primary">Missing Person</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card card border-success mb-3" style="width: 18rem; ">
                        <div class="card-header bg-transparent border-success">Vehicle Verification</div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Click below to verify your vehicle.</p>
                          <div class="card-footer bg-transparent border-success">
                            <a href="public/index.php" class="btn btn-primary">Verify Now</a></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                      <div class="card card border-success mb-3" style="width: 18rem; ">
                        <div class="card-header bg-transparent border-success">Arrested Persons Details</div>
                        <div class="card-body">
                          <h5 class="card-title"></h5>
                          <p class="card-text">Ckeck the status of Arrested Persons.</p>
                          <div class="card-footer bg-transparent border-success">
                            <a href="admin/index.php" class="btn btn-primary">Check Status</a></div>
                        </div>
                      </div>
                    </div>
          </div>
    </section>
    <!--card-->
    <!--footer-->
    <footer class="bg-dark text-center text-white">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
          <!-- Section: Social media -->
          <section class="mb-4">
            <!-- Facebook -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-facebook-f"></i
            ></a>
      
            <!-- Twitter -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-twitter"></i
            ></a>
      
            <!-- Google -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-google"></i
            ></a>
      
            <!-- Instagram -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-instagram"></i
            ></a>
      
            <!-- Linkedin -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-linkedin-in"></i
            ></a>
      
            <!-- Github -->
            <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
              ><i class="fab fa-github"></i
            ></a>
          </section>
          <!-- Section: Social media -->
        </div>
        <p style="margin: 0 200px;">
           Designing a Virtual Police Station in which animated police officer can interact with victim/victims to collect all the details with respect to identity of complainant, details of the incidence or crime committed will extract supplementary
        </p>
        <!-- Grid container -->
      
        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
          © 2021 Copyright:
          <a class="text-white" href="#">AAA & Company</a>
        </div>
        <!-- Copyright -->
      </footer>
    <!--footer-->
</body>
</html>