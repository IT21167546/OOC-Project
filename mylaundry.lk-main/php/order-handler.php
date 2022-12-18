<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");}

if (!isset($_SESSION['cart'])) {
    header("location: cart.php");}


$_SESSION['name'] = $_POST['cardname'];
$_SESSION['card'] = $_POST['cardnumber'];
$_SESSION['payment'] = 1;



header("location: ../html/invoice.php");
exit();

?>