<?php
session_start();
$conn = new mysqli("sql309.bytehost.com", "b16_25125656", "coolheaded1975", "b16_25125656_fishery");
if($conn->connect_error){
	die("connectio failed");
}
?>