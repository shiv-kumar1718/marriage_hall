
<!doctype html>
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
					   <li class="nav-item"><a href="customerdash.php" class="nav-link text-white p-3 mb-2 current "><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
				 
				   <li class="nav-item"><a href="bookcustomerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Book hall</a></li>
				   <li class="nav-item"><a href="setcustomerdash.php" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-wrench text-light fa-lg mr-3"></i>Settings</a></li>
				   
				
		</ul>
			</div>
			<!--end of sidebar-->
		
			<!--top-nav-->
		</div>
	</div>
	</div> 
</nav>	
 
	
	 <h2>Welcome</h2>
		
		
	 <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="row">
          <div class="booking-form">
            <div class="form-header">
              <h1>Customer details</h1>
            </div>
			  
   					<?php
					 session_start();
{
 $con=mysqli_connect('localhost','root','','project') or die(mysqli_error());
 
			  $query=mysqli_query($con,"select * from customer where username='".$_SESSION['username']."'") or die(mysqli_error($con));
				  
while ($res=mysqli_fetch_array($query))
{
?>   
      <form action="#" method="post" id="contact_form">
        <table>
		  <tr>
		  <div class="Name">
          <label for="name" class="text-white">Name: <?php echo $res['name'];?></label>
		
        </div>
			</tr>
			<tr>
				 <tr>
		  <div class="UserName">
          <label for="username" class="text-white">User Name: <?php echo $res['username'];?></label>
			
        </div>
			</tr>
			<tr>
        <div class="address">
          <label for="address" class="text-white">Address: <?php echo $res['address'];?></label> 
          
        </div>
			</tr>
			<tr>
				<div class="emailaddress">
          <label for="emailaddress" class="text-white">Email Address: <?php echo $res['emailaddress'];?></label> 
          
        </div>
			</tr>
			<tr>
				<div class="hall">
          <label for="hall" class="text-white">Hall booked: <?php echo $res['hall'];?></label> 
          
        </div>
			</tr>
			<tr>
		  </table>
      </form>
    </div>
		  </div>
		</div>
			 </div>
		</div>
      		<?php
}
			  }
?>
		<form action="#" method="post">
		
          <button type="btn" name="log" class="btn btn-primary btn-lg btn-block loader-button">LOG OUT</button>
        
		
		</form>
		<?php
if(isset($_POST['log']))
{  
	session_destroy();
	header('location:login1.html');
	
}
		
?>
	
			 </body>
		</html>