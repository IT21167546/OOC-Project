<?php

require 'config.php';

if(isset($_POST["name"])){
  $id = $_POST["id"];
  $name = $_POST["name"];
  $email = $_POST["email"];
  $address = $_POST["address"];
  $location= $_POST["location"];
  
  $sql = "UPDATE login_register SET fullname = '$name', email = '$email', address = '$address', pickup = '$location' WHERE id = '$id'";

  if($conn->query($sql)){
    echo "<script> alert('Edited succesfully!')</script>";
  }
  else{
  echo "<script> alert('Failed to Edit!')</script>";
  }

  $conn->close();

 header("location: logout.php");
  exit();
}
?>