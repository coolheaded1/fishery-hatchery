<?php
include 'connection.php';
if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$select = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
	$result = $conn->query($select);
	if($result ->num_rows == 1){
		$_SESSION['username'] = $username;
		header('Location: dashboard.php');
	}
	else{
		echo "<script> alert('Username or Password is incorect'); </script>";
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
<body class="bg-primary"><br><br>
    <form method="post" id="form">
    	<h5 style="letter-spacing: 3px">Admin Panel</h5><br>
    	<div class="form-group">
    		<label>Username</label>
    		<input type="text" name="username" class="form-control" required>
    	</div>

    	<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control" required>
    	</div>
    	<button class="btn loginBtn" name="login">LOGIN</button><br><br>
    </form><br><br><br><br>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
</body>
</html>