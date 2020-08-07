<?php
include 'connection.php';
if(isset($_POST['signup'])){
	$fullname = $_POST['name'];
	$email = $_POST['email'];
	$pnumber = $_POST['pnumber'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	$sel = "SELECT * FROM registration WHERE email = '$email'";
	$res = $conn->query($sel);
	if($res->num_rows > 0){
		echo "<script> alert('Email Already Taken'); </script>";
	}
	elseif($password != $confirm_password){
		$error = "Password mismatch";
	}
	else{
		$insert = "INSERT INTO registration(fullname, email, pnumber, password) VALUES('$fullname', '$email', '$pnumber', '$password')";
		$result = $conn->query($insert);
		if($result){
			$success = "Registration successful, please login";
			echo "<meta http-equiv='refresh' content='2; URL=login.php'>";
		}
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Fish Breeding</title>
</head>
<body>
	<nav class="navbar navbar-expand-sm" id="nav">
		<div class="container">
	  		<a class="navbar-brand text-light" href="./"><img src="images/logo.png" width="50"></a>
	  		<button id="btnBar" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	    	<i class="fa fa-bars"></i></button>

	  		<div class="collapse navbar-collapse" id="navbar">
		        <ul class="navbar-nav">
		         	<li class="nav-item active">
		            	<a class="nav-link rounded mr-2 pl-2" href="./" >Home</a>
		          	</li>
		          	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2 disabled text-light">Tutorial</a>
		          	</li>
		        </ul>
        		<span class="mr-auto"></span>

		        <ul class="navbar-nav mr-0">
		        	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" href="./login.php">Login</a>
		          	</li>
		          	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" href="./register.php" style="text-shadow: 0 10px 10px brown;">Sign Up</a>
		          	</li>
		        </ul>
	  		</div>
  		</div>
    </nav>
    <div id="tutorialBanner">
    </div><br><br><br><br>
    
	<div style="width: 50%; margin: auto;">
		<?php
			if(isset($success)){
				echo "<span class='invalid-feedback alert alert-danger' style='display: block; font-size: 14px; font-family: padding: 10px'>&nbsp;&nbsp;".$success."<i class='fa fa-spinner pull-right' id='spinner'></i></span>";
			}
		?>
	</div>

    <form method="post" id="form">
    	<h5 style="letter-spacing: 3px">Sign Up Here</h5><br>
    	<div class="form-group">
    		<label>Full Name</label>
    		<input type="name" name="name" class="form-control" required>
    	</div>

    	<div class="form-group">
    		<label>Email</label>
    		<input type="email" name="email" class="form-control" required>
    	</div>

    	<div class="form-group">
    		<label>Phone Number</label>
    		<input type="number" name="pnumber" class="form-control" required>
    	</div>

    	<div>
    		<?php
    			if(isset($error)){
    				echo "<span class='invalid-feedback alert alert-danger' style='display: block; font-size: 14px; font-family: padding: 10px'><i class='fa fa-warning'></i>&nbsp;&nbsp;".$error."</span>";
    			}
    		?>
    	</div>

    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" required>
    	</div>

    	<div class="form-group">
    		<label>Re-Type Password</label>
    		<input type="password" name="confirm_password" class="form-control" required>
    	</div>
    	<button class="btn loginBtn" name="signup">SIGN UP</button><br><br>
    	<p>Already have an account? <a href="login.php">Login</a></p>
    </form><br><br><br><br>
    <footer><br>
   		<div class="container">
        <a href="https://facebook.com/Coolheaded8" target="_blank"><i class="fa fa-facebook" id="fafa2"></i></a>&nbsp;&nbsp;
        <a href="https://twitter.com/Coolheaded8" target="_blank"><i class="fa fa-twitter" id="fafa2"></i></a>&nbsp;&nbsp;
        <a href="https://instagram.com/Coolheaded8" target="_blank"><i class="fa fa-instagram" id="fafa2"></i></a>&nbsp;&nbsp;<br><br>
   			<p>Your satisfaction is our pleasure.</p>
   			<p>&copy; <?php echo date('Y') ?>. All Rights Reserved</p>
   		</div>
   </footer>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
</body>
</html>