<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->

<?php

//any one can access this page

require'../php/config.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../css/contact-us.css">
  <link rel="stylesheet" type="text/css" href="../css/header-footer.css">

<!-- This icon pack is  used to get icons that is used in the footer -->
  <script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script>
<!-- --------------------------------------------------------------- -->

	<title>Contact Us</title>
</head>
<body>

<div class ="navbar">
      
        <div class="icon">
          <img class="logo" src="../images/laundry service.jpg" alt="comapny logo"></img>
        </div><!--end of icon div tag-->

            <div class="menu">
              <ul  class="menu-ul">
                <li ><a class="menu-a" href="index.php">HOME</a></li>
                <li ><a class="menu-a"  href="about-us.html">ABOUT US </a></li>
                <li ><a class="menu-a"  href="how-it-works.html">HOW IT WORKS</a></li>
                <li ><a class="menu-a"  href="faq.html">FAQ</a></li>
                <li ><a class="menu-a"  href="order.php?type=showAll">ORDER NOW</a></li>
                <li ><a class="menu-a"  href="pickup.html">PICKUP</a></li>
                <li ><a class="menu-a"  href="contact-us.php">CONTACT US</a></li>
              </ul>
            </div><!--end of menu div tag-->

             <div class="cart-profile">
                <a href="user.php"><img  class="user-icon"src="../images/user-icon.png" width = 35px></a>
             </div><!--end of cart-profile div tag-->

    </div> <!--end of navbar div tag-->

<!-- ---------------------------HEADER ENDS HERE--------------------------------------------------------------------- -->


<div id="contact">
<div id="contact-form">
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label for="name">Name:										               </label><br>
  <input type="text" id="cname" name="name" required>			 <br>
  <label for="email">Email:										             </label><br>
  <input type="email" id="cemail" name="email" required>		 <br><br>
  <label for="massage">Message:									             </label><br>
  <textarea id="massage" name="msg" placeholder="Enter the message..." required></textarea><br>
  <input type="submit" value="Submit">
</form>
</div>

<div id="contact-text">
  <h2>Contact Us</h2>
  <p>
    133, St.Peters Road, Colombo. <br><br>
    0701234567 | 0711234567       <br><br>
    mylaundrylk@gmail.com         <br><br>
  </p>
</div>

</div>
<?php
if(isset($_POST["name"])){
  $name = $_POST["name"];
  $email = $_POST["email"];
  $msg = $_POST["msg"];
  
  $sql = "INSERT INTO inquiry (name,email,message) VALUES ('$name','$email','$msg')";

  if($conn->query($sql)){
    echo "<script> alert('Message sent succesfully!')</script>";
  }
  else{
  echo "<script> alert('Failed to Send the message!')</script>";
  }

  $conn->close();
}
?>

<!-- ---------------------------FOOTER BEGINS HERE--------------------------------------------------------------------- -->   
    <div class="footer">
      
      <div class="content-1">
        <center>
    
        <h3>Mobile App</h3>
        <a href="https://play.google.com/store/apps"><img class="app-googleplay" src="../images/googleplay.jpg"></a> <br>
        <a href="https://www.apple.com/app-store/"><img class="app-appstore" src="../images/appstore.jpg"></a>
        
        </center>

      </div><!--end of content-1 div tag-->
      <div class="content-2">
                    
            <h4 class="line-1">mylaundry.lk@gmail.com </h4>
            <h4 class="line-2">133, St.Peters Road, Colombo</h4>
            <a  class="infor-line" href="privacy-policy.html">Privacy Policy</a><br>
            <a  class="infor-line" href="terms-of-services.html">Terms of Services</a>
            <h4 class="line-5"> &copy; Copyright Infromation</h4>

        <div class="social-links">
          <a class="social-links-a" href="https://www.facebook.com"><i class="fa-brands fa-facebook-square"></i></a>
          <a class="social-links-a" href="https://twitter.com"><i class="fa-brands fa-twitter-square"></i></a>
          <a class="social-links-a" href="https://www.instagram.com"><i class="fa-brands fa-instagram"></i></a>
          <a class="social-links-a" href="https://www.google.com/account"><i class="fa-brands fa-google-plus-square"></i></a>
          
        </div> <!--end of social-links div tag-->
      </div> <!--end of content-2 div tag-->

      <div class="content-3">
        <h3 id="quick-link-header">Frequent Links</h3>
        <ul class="quick-link-ul">
          <li><a class="quick-link-a" href="services.html">Services</a></li>
          <li ><a class="quick-link-a" href="package.html">Packages</a></li>
          <li ><a class="quick-link-a" href="feedback.php">Feedback</a></li>
          <li ><a class="quick-link-a" href="review.php">Reviews</a></li>
          <li ><a class="quick-link-a" href="donate.html">Donate</a></li>
          <li ><a class="quick-link-a"  href="login.php">Login</a></li>
          <li ><a class="quick-link-a" href="logout.php">Logout</a></li>
        </ul> 

      </div> <!--end of content-3 div tag-->  
    </div>  <!--end of footer div tag-->  
  

  
</body>

<script>
    // Enable hidden nav bar
    
        const nav = document.querySelector(".navbar");
        let lastScrollY = window.scrollY;

        window.addEventListener("scroll", () => {
        if (lastScrollY < window.scrollY) {
        nav.classList.add("nav-hidden");
        } else {
        nav.classList.remove("nav-hidden");
        }

        lastScrollY = 0;
        });
 
 </script>
</html>