<?php
include 'connection.php';
if(isset($_POST['login'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	$sel = "SELECT * FROM registration WHERE email = '$email' AND password = '$password'";
	$res = $conn->query($sel);
	if($res->num_rows == 1){
		$_SESSION['email'] = $email;
		header("Location: ./");
	}
	else{
		echo "<script> alert('Incorret username or password'); </script>";
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
		            	<a class="nav-link mr-2 pl-2" href="./login.php" style="text-shadow: 0 10px 10px brown;">Login</a>
		          	</li>
		          	<li class="nav-item active">
		            	<a class="nav-link mr-2 pl-2" href="./register.php">Sign Up</a>
		          	</li>
		        </ul>
	  		</div>
  		</div>
    </nav>
    <div id="tutorialBanner">
    </div><br><br><br><br>
    <form method="post" id="form">
    	<h5 style="letter-spacing: 3px">Login Here</h5><br>
    	<div class="form-group">
    		<label>Email</label>
    		<input type="email" name="email" class="form-control" required>
    	</div>

    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" required>
    	</div>
    	<button class="btn loginBtn" name="login">LOGIN</button><br><br>
    	<p>Don't have an account? <a href="register.php">Sign Up</a></p>
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