<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  
<section>
        <div class="heading" style="background-color:#233e8b;height:120px; text-align: center;">
            <h1 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white;">
				AVADI POLICE HEADQUARTER
          </h1>
		  <h3 style="margin: 0px 0px; padding-top:10px; text-shadow:none; color:white; ">Chennai-600062, Tamil Nadu</h3>
          </div>
    </section>
    
<div class="container">
<h3 class = "text-center" style = "font-size:3vw;">  <strong>Police Station Management System</strong>   </h3>
<div class="row vertical-offset-100" style = "margin-top:150px;">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title text-center">  <strong>Public User Login Panel</strong>  </h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method = "POST" action = "">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="username" name="username" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Password" name="password" type="password" value="">
			    		</div>

			    		<input class="btn btn-lg btn-success btn-block" name = "submit" type="submit" value="Login">
			    	</fieldset>
                       <center> <br><a href="public_reg.php">Public Registration</a>
                        <br><a href="../index.php">Back to Main Page</a> </center>
			      	</form>


                      <?php
include 'mysql.php';
session_start();
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
$_SESSION['username'] = $username;

$sql = "select * from public_account where username = '$username' and password = '$password'";
$query = mysqli_query($con,$sql);

$count = mysqli_num_rows($query);
if($count==0){
    echo "<script> alert('invalid credentials') </script>";
}
else{
    echo "<script>  window.location = 'show_case.php' </script>";
}

}





?>
			    </div>
			</div>
		</div>
	</div>
</div>

</body>
</html>
