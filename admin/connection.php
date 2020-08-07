<?php
session_start();
$conn = new mysqli("localhost", "root", "", "fishery");
if($conn->connect_error){
	die("connectio failed");
}
?>