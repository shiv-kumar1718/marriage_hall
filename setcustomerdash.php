

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
		<link rel="title icon" href="6.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		<link rel="stylesheet" href="booking1.css">
		<link rel="stylesheet" href="admindash.css">
		<title>Customer dashboard</title>
	</head>
	<body>
<nav class="navbar navbar-expand-md navbar-light">
<button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
	<span class="navbar-toggler-icon"></span>
	</button>
	<div clas="collapse navbar-collapse" id="mynavbar">
	<div class="container-fluid">
		<div class="row">
			<!--sidebar-->
		<div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
			<a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Marriage hall</a>
			
			<div class="bottom-border pb-3">
			<img src="person.jpg" width="50" height="50" class="rounded-circle mr-3">
			<a href="#" class="text-white">Customer</a>
		
			</div>
			<ul class="navbar-nav flex-column mt-4">
					   <li class="nav-item"><a href="customerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
				 
				   <li class="nav-item"><a href="bookcustomerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Book hall</a></li>
				   <li class="nav-item"><a href="setcustomerdash.php" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
				   
				
		</ul>
			</div>
			<!--end of sidebar-->
		</div>
		</div>
	</div>
	
</nav>
		
		 <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Change password</h1>
            </div>

            <form action="#" method="post" >
              
              <div class="form-group">
                <span class="form-label">Old password</span>
                <input class="form-control" name="pass" type="password" placeholder="Enter old password">
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label">New password</span>
                    <input class="form-control" name="pass1" type="password" required placeholder="Enter new password">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <span class="form-label"> Confirm New password</span>
                    <input class="form-control" name="pass2" type="password" required placeholder="Enter new password">
                  </div>
                </div>
                
              <div class="form-btn">
				  <span class="form-label">       </span>
				
                <button class="submit-btn " name="sub">Change password</button>
              </div>
          </div>
						<?php
		
if(isset($_POST['sub']))
{
	$con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
	changepass($con);
	
}


function changepass($con)
{
	$pass= $_POST['pass'];
	$pass1 =  $_POST['pass1'];
	$pass2=$_POST['pass2'];
	if($_POST['pass1']==$_POST['pass2'])
	{
	$query = mysqli_query($con,"UPDATE customer SET password= '".$pass1."' where password= '".$pass."'") or die(mysqli_error($con));	
	echo "Password changed succesfully";
}
	else
	{
		echo "Enter password again";
	}
}



?>  
			  </form>
		</div>
	</div>
	</div> 
			 </div>
		</div>
		
     
	


	
	</body>
		</html>