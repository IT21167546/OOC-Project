<!--
IT21167546
Rashmika MGT
MLB_08.02_3
 -->



 <?php 
require'../php/config.php';
session_start();

 if (!isset($_SESSION['username'])) {
     header("Location:../html/login.php");
}
?>

 
 <!DOCTYPE html>
 <html>
	 <title></title>
		 <head>
			 <link rel="stylesheet" type="text/css" href="../css/header-footer.css">
			 <link rel="stylesheet" href="../css/feedback.css">
 
 <!-- This icon pack is  used to geticons that is used in the footer -->
	 <script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script> 
 
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
 
 
 

 <h1 class="h1">Feedback </h1>
            
            <br>

            <center>
            </table> 
			<table id="feedback" style="width: 75%; ">
            <td><label class=container></td>
               
                <?php
           
           $sql ="select * from feedback";

            $result = $conn->query($sql);
		if ($result->num_rows > 0){
                
			
			while($row = $result->fetch_assoc()){
				
				echo "<tr>";
             
               
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["feedback"]."</td>";
                
				
            }}
                ?>
                </center>
            </table>
	

 

			  


			
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