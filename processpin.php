<?php
include 'connection.php';
$pin = $_POST['pin'];
$select = "SELECT * FROM user WHERE pin = '$pin'";
$result = $conn->query($select);
$sel = "SELECT * FROM login WHERE pin = '$pin'";
$res = $conn->query($sel);
if($res->num_rows == 3){
	echo "<span class='alert alert-danger btn-block'>You have used your <b>PIN</b> three(3) times, please purchase a new <b>PIN</b>.</span>";
}
elseif($result->num_rows == 1){
	$_SESSION['pin'] = $pin;
	echo "<span class='alert alert-success btn-block'> PIN correct, please wait as we process your request.<i class='fa fa-spinner pull-right' id='spinner'></i></span>";
	echo "<meta http-equiv='refresh' content='2; URL=tutorial.php'>";
	$insert = "INSERT INTO login(pin) VALUES('$pin')";
	$query = $conn->query($insert);
}
elseif(empty($pin)){
	echo "<span class='alert alert-danger btn-block'> Please, fill out the field.</span>";
}
else{
	echo "<span class='alert alert-danger btn-block'> PIN doesn't correct.</span>";
}
?>