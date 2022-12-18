<?php

require 'config.php';
session_start();

// set permisson

if ( isset($_SESSION['username']))
	$username = $_SESSION['username'];
if ( isset($_SESSION['adminname']))
	$username = $_SESSION['adminname'];


$sql = "SELECT email FROM login_register WHERE username = '$username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$email = $row['email'];


if ( isset($_POST['op'])){
	$op = md5($_POST['op']);
	$np = md5($_POST['np']);
	$sql1 = "UPDATE login_register SET password = '$np' WHERE email = '$email'";

	if($conn->query($sql1)){
    	echo "<script> alert('Edited succesfully!')</script>";	
  		echo "Password Changed";
  	}
}
?>