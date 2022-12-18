<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->

<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login
    
require 'config.php';


if(isset($_POST["IID"])){

  $id = $_POST['IID'];

  $sql = "UPDATE inquiry SET respond = '1' WHERE inquiryID = '$id'";

  if($conn->query($sql)){
    echo "<script> alert('Message sent succesfully!')</script>";
  }
  else{
  echo "<script> alert('Failed to Send the message!')</script>";
  }

  $conn->close();

  if (isset($_GET['type']) and $_GET['type'] == "showAll") {
  $type = $_GET['type'];
  header("location: ../html/inquiry.php?type=$type");
  exit();
  }

  header("location: ../html/inquiry.php");
  exit();
}