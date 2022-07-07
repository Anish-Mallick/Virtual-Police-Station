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
	
		table, th, td {
			border: 1px solid black;
		}

		th, td {
		  padding: 15px;
		}
	
	</style>
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
                <a class="nav-link active" aria-current="page" href="#">About Us</a>
              </li>
              
            </ul>
            
          </div>
        </div>
      </nav>
    <!--navbar-->
    

<form action="fir_detail.php" method="post">
     <input class="btn" style="background: blue; width: 200px; margin:20px 0 20px 580px;" type="submit"  name="submit" value="FIR DETAILS">
</form>
<?php
    
    if(isset($_POST['submit'])) {
        
            
        $connection =mysqli_connect('localhost', 'root', '', 'mydb-2');
        
            if(!$connection){
                die("Database connection failed.");
            } 
        
       
        $query = "SELECT * FROM fir_details";
        
        $result = mysqli_query($connection, $query);
        
        if(!$result){
            die("Query Failed" . mysqli_error($connection));
        }
        ?>
         
		 <div style="overflow-x:auto;">
         <table>
                <thead>
                  <tr>
				   <th>Complainant_Id</th>
                   <th>Complainant_name</th>
                   <th>Contact_No</th>
                   <th>Email</th>
				   <th>AdhaarCard_No</th>
				   <th>Address</th>
				   <th>Complaint_Name</th>
				   <th>Complaint_Address</th>
				   <th>Complaint_AdhaarCard_No</th>
				   <th>Complaint_Subject</th>
				   <th>Occurance_date</th>
				   <th>Detail_of_complaint</th>
				   <th>SHO Sign</th>
                   <th>Informer Sign</th>
                  </tr>
                </thead>
                <tbody>
        
         
          <?php
            while($row = mysqli_fetch_assoc($result)){
				$ID = $row['ID'];
                $Complainant_name = $row['Complainant_name'];
                $Contact_No = $row['Contact_No'];
                $Email = $row['Email'];
                $AdhaarCard_No = $row['AdhaarCard_No'];
                $Address = $row['Address'];
				$Complaint_Name = $row['Complaint_Name'];
				$Complaint_Address = $row['Complaint_Address'];
				$Complaint_AdhaarCard_No = $row['Complaint_AdhaarCard_No'];
				$Complaint_Subject = $row['Complaint_Subject'];
				$Occurance_date = $row['Occurance_date'];
				$Detail_of_complaint = $row['Detail_of_complaint'];
				$SHO_Sign = $row['SHO_Sign'];
				$Informer_Sign = $row['Informer_Sign'];
               
            
                    echo "<tr>
					<td>{$ID}</td>
					<td>{$Complainant_name}</td>
                    <td>{$Contact_No}</td>
                    <td>{$Email}</td>
                    
					<td>{$AdhaarCard_No}</td>
					<td>{$Address}</td>
					<td>{$Complaint_Name}</td>
					
					<td>{$Complaint_Address}</td>
					<td>{$Complaint_AdhaarCard_No}</td>
					<td>{$Complaint_Subject}</td>
					<td>{$Occurance_date}</td>
					<td>{$Detail_of_complaint}</td>
					<td>{$SHO_Sign}</td>
					<td>{$Informer_Sign}</td>
                    
                    </tr>";
            }
                    ?>
                      
                </tbody>    
                 </table>    
        </div>
            <?php
    

           
    }
        
       ?>
	   
	   
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