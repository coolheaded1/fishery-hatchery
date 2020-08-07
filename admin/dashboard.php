<?php
include 'connection.php';
$username = $_SESSION['username'];
if(empty($username)){
	header('Location: ./');
}
$pin = 'FISH'.uniqid();
if(isset($_POST['register'])){
	$name = $_POST['name'];
	$select = "SELECT * FROM user WHERE pin = '$pin'";
	$query = $conn->query($select);
	if($query ->num_rows  > 0){
		echo "<script> alert('PIN existed'); </script>";
	}
	else{
		$insert = "INSERT INTO user(name, pin) VALUES('$name', '$pin')";
		$result = $conn->query($insert);
		if($result){
			echo "<script> alert('Registration Successful'); </script>";
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
	<div id="navbar">
		<div class="container">
			<button type="button" class="btn btn-primary">Total User 
				<?php
				$sel2 = "SELECT * FROM user";
				$res2 = $conn->query($sel2);
				$total = $res2->num_rows;
				echo "<span class='badge badge-success'>".$total."</span>";
				?></button>
			<a href="./logout.php" class="btn btn-danger">Log Out</a>
		</div>
	</div><br><br>
	<div class="container">
		<p>Register New User</p>
		<form class="w-50" method="post">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" required>
			</div>

			<div class="form-group">
				<label>PIN</label>
				<input type="text" name="pin" class="form-control" required value="<?php echo $pin ?>" readonly style="background: #fff;">
			</div>
			<button class="btn loginBtn" name="register">REGISTER</button>
		</form><br><br>

		<p>List of registered user with their corresponding PIN</p>
		<table class="table table-bordered">
			<tr class="bg-primary text-light">
				<th>Name</th>
				<th>PIN</th>
				<th>Date</th>
			</tr>
			<?php
			$sel = "SELECT * FROM user ORDER BY id DESC";
			$res = $conn->query($sel);
			while ($row = $res->fetch_assoc()) {
			?>
				<tr>
					<td><?php echo $row['name']; ?></td>
					<td><?php echo $row['pin']; ?></td>
					<td><?php echo $row['dt']; ?></td>
				</tr>
			<?php
			}
			?>
		</table>
	</div>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
</body>
</html>