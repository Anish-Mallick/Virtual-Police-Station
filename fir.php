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
    
	
</head>
<body>
    <!--heading-->
    
    <section>
        <div class="heading" style="background-color:#233e8b;height:120px; text-align: center;">
            <h1 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white;">
				AVADI POLICE HEADQUARTER
          </h1>
		  <h3 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white; ">Chennai-600062, Tamil Nadu</h3>
          </div>
    </section>
    
          
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Home</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    <!--navbar-->
   


 <?php
// error_reporting(0);
 ?>
<?php
$msg = "";

    if(isset($_POST['submit'])) {
        $Complainant_name = $_POST['Complainant_name'];
        $Contact_No = $_POST['Contact_No'];
        $Email = $_POST['Email'];
        $AdhaarCard_No = $_POST['AdhaarCard_No'];
        $Address = $_POST['Address'];
		$Complaint_Name = $_POST['Complaint_Name'];
		$Complaint_Address = $_POST['Complaint_Address'];
		$Complaint_AdhaarCard_No = $_POST['Complaint_AdhaarCard_No'];
		$Complaint_Subject = $_POST['Complaint_Subject'];
		$Occurance_date = $_POST['Occurance_date'];
		$Detail_of_complaint = $_POST['Detail_of_complaint'];
		// $SHO_Sign = $_POST['SHO_Sign'];
		// $Informer_Sign = $_POST['Informer_Sign'];
		
        
        $SHO_Sign = $_FILES['image1']["name"];
		$tempname1 = $_FILES['image1']["tmp_name"];   
        $folder1 = "image/".$SHO_Sign;
		
		$Informer_Sign = $_FILES["image2"]["name"];
		$tempname2 = $_FILES["image2"]["tmp_name"];   
        $folder2 = "image/".$Informer_Sign;
        
        
        
        
        $connection =mysqli_connect('localhost', 'root', '', 'mydb-2');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
		 
		
		
        $query = "INSERT INTO fir_details(Complainant_name, Contact_No, Email, AdhaarCard_No, Address, Complaint_Name, Complaint_Address, Complaint_AdhaarCard_No, Complaint_Subject, Occurance_date, Detail_of_complaint, SHO_Sign, Informer_Sign) ";
        $query .= "VALUES ('$Complainant_name', '$Contact_No', '$Email', '$AdhaarCard_No', '$Address', '$Complaint_Name', '$Complaint_Address', '$Complaint_AdhaarCard_No', '$Complaint_Subject', '$Occurance_date', '$Detail_of_complaint', '$SHO_Sign', '$Informer_Sign')";
        
     $result = mysqli_query($connection, $query);
	   
	   
	   if (move_uploaded_file($tempname1, $folder1))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
	  
	  if (move_uploaded_file($tempname2, $folder2))  {
           $msg = "Image uploaded successfully";
        }else{
          $msg = "Failed to upload image";
      }
	       
    
	
	if(!$result) {
            die('Query FAILED' . mysqli_error($connection));
        }
            else {  
				echo "Your fir has been placed. Your CaseId is: 22";
			}
    
    }
    ?>
	
	
	
    
 <form action="fir.php" method="POST" enctype="multipart/form-data">
      <div class="container">
        <div class="form bg-dark my-5">
            
            <br>
            <div class="container">
                <div class="section my-2 text-white bg-primary">COMPLAINANT DETAILS*</div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="fname" class="text-white">FULL NAME :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class=" form-control inputfname" name="Complainant_name" required placeholder="Enter Full Name">
                    </div>
                    
                </div>
                <div class="row py-2">
                    <div class="col-md-3">
                        <label for="gender"  class="text-white">GENDER :</label>
					</div>
					<div class = "col-md-3">
					<select id="inputGender" name="gender" class="form-control">
                            <option selected>Choose...</option>
                            <option>MALE</option>
							<option>FEMALE</option>
							<option>OTHERS</option>
                          </select>
						  </div>
                    
                    <div class="col-md-3">
                        <label for="dob" class="text-white">DATE OF BIRTH :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="date" id="datepicker" name="dob" required class=" form-control">
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-3"><label for="text" class="text-white">ADHAAR NUMBER :</label></div>
                  <div class="col-md-6">
                    <input type="number" name="AdhaarCard_No" class="inputAdhaar form-control" required placeholder="Enter Adhaar Card Number">
                </div>
             </div>
                    <div class="form-group">
                        <label for="inputAddress" class="text-white">ADDRESS OF COMPLAINANT:</label>
                        <textarea class="form-control" rows="5" name="Address" id="address1"></textarea>
                      </div>
                      <div class="form-group">
                        <label for="inputAddress2" class="text-white">ADDRESS OF INFORMER :</label>
                        <textarea class="form-control" rows="5" name="address2" required id="address2"></textarea>
                      </div>
                      <div class="form-row">
                        <div class="form-group col-md-3">
                          <label for="inputCity" class="text-white">CITY :</label>
                          <input type="text" class="form-control" name="inputCity" required id="inputCity">
                        </div>
                        <div class="form-group col-md-3">
                          <label for="inputDistrict" class="text-white">DISTRICT :</label>
                          <input type="text" class="form-control" name="inputDistrict" required id="inputDistrict">
                        </div>
                        <div class="form-group col-md-4">
                          <label for="inputState" class="text-white">STATE :</label>
                          <select id="inputState" name="inputState"  class="form-control">
                            <option required selected>Choose...</option>
                            <option>MADHYA PRADESH</option>
                          </select>
                        </div>
                        <div class="form-group col-md-2">
                          <label for="inputZip" class="text-white">ZIP :</label>
                          <input type="number" class="form-control" name="inputZip" id="inputZip">
                        </div>
                      </div>
                      <div class="row py-2">
                        <div class="col-md-3">
                            <label for="mobile" class="text-white">MOBILE NUMBER :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="number" required name="Contact_No" class="inputfmobile form-control" required placeholder="Enter Mobile Number With Code">
                        </div>
                        <div class="col-md-3">
                            <label for="email" class="text-white">EMAIL :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="email" required name="Email" class="inputemail form-control" required placeholder="Enter Email">
                        </div>
                    </div>
                    <div class="section my-2 text-white bg-primary">COMPLAINT DETAILS*</div>
                    <div class="row">
                      <div class="col-md-3">
                        <label for="type" class="text-white">SUBJECT :</label>
                      </div>
                      <div class="col-md-8">
                        <input type="text" name="Complaint_Subject" required class="inputtype form-control" placeholder="Enter Subject">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="comment" class="text-white">REPORT :</label>
                      <textarea class="form-control" name="Detail_of_complaint" rows="5" id="comment"></textarea>
                    </div>
                    <div class="section my-2 text-white bg-primary">ACCUSED DETAILS*</div>
                <div class="row">
                    <div class="col-md-3">
                        <label for="aname" class="text-white">FULL NAME :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="text" class=" form-control inputaname" name="Complaint_Name"  placeholder="Enter Full Name">
                    </div>
                    
                </div>
                <div class="row py-2">
                    <div class="col-md-3">
                        <label for="agender"  class="text-white">GENDER :</label>
					</div>
					<div class = "col-md-3">
					<select id="inputaGender" name="agender" class="form-control">
                            <option selected>Choose...</option>
                            <option>MALE</option>
							<option>FEMALE</option>
							<option>OTHERS</option>
                          </select>
						  </div>
                    
                    <div class="col-md-3">
                        <label for="adob" class="text-white">DATE OF INCIDENT :</label>
                    </div>
                    <div class="col-md-3">
                        <input type="date" id="datepicker" name="Occurance_date"  class=" form-control">
                    </div>
                </div>
                    <div class="row">
                      <div class="col-md-3">
                        <label for="inputaAddress" class="text-white">ADDRESS OF ACCUSED:</label>
                      </div>
                      <div class="col-md-3">
                        <textarea class="form-control" rows="5" name="Complaint_Address" id="aaddress1"></textarea>
                      </div>
                      <div class="col-md-3">
                        <label for="text" class="text-white">ADHAAR NUMBER :</label>
                      </div>
                      <div class="col-md-3">
                        <input type="number" name="Complaint_AdhaarCard_No" class="inputAdhaar form-control"  placeholder="Enter Adhaar Card Number">
                      </div>
					  
                    </div>
                    <div class="section my-2 text-white bg-primary">ATTACHMENTS*</div>
                
				<div class="row" style="background-color:#A91B0D;">
                  
                  <div class="col-md-6"><label for="inputSign" class="text-white">COMPLAINANT'S ADHAAR CARD* :</label></div>
                  <div class="col-md-6">
                    <div class="file-field">
                    <div class="btn btn-white btn-sm float-left">
                      <span class="text-white">Choose files:(only .JPG/.PNG format)</span>
                      <input type="file"  required name="image1">
                    </div>
                  </div>
                </div>
             </div>
             
             <div class="row" style="background-color:#A91B0D;">
              <div class="col-md-6"><label for="inputSign" class="text-white">COMPLAINANT'S SIGNATURE* :</label></div>
              <div class="col-md-6">
                <div class="file-field">
                <div class="btn btn-white btn-sm float-left">
                  <span class="text-white">Choose files:(only .JPG/.PNG format)</span>
                  <input type="file" required name="image2">
                </div>
              </div>
            </div>
				
				
			
         </div>
            </div>
            <div class="section bg-light">
              <div class="row">
                <div class="col-md-5"></div>
				
			
				
                <div class="col-md-3">
                  
				  <input type="submit" class="btn btn-outline-dark btn-lg my-2"  role="button" id="file" name="submit" value="SUBMIT">
                </div>
                <div class="col-md-3"></div>
              </div>
            </div>
        </div>
      </div>
    </form>
    
    
	
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