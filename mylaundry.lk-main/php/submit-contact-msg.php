<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php

require'config.php';

$name = $_POST["name"];
$email = $_POST["email"];
$msg = $_POST["msg"];
  
$sql = "INSERT INTO inquiry (name,email,message) VALUES ('$name','$email','$msg')";

 if($conn->query($sql)){
  echo "<script> alert('Records added succesfully')</script>";
 }
 else{
  echo "<script> alert('FAiled')</script>";
 }

$conn->close();
?>