<!--
IT21166556
Nadeeshan I.U.N.
MLB_08.02_3
 -->

<?php 
require'../php/config.php';
session_start();

if (!isset($_SESSION['adminname'])) {
    header("Location: login.php");
}
$userName = $_SESSION['adminname'];
$sql = "SELECT * FROM login_register WHERE username = '$userName' ";

$result = $conn->query($sql);

$row = $result->fetch_assoc();
$email = $row['email'];

$fullname = $row['fullname'];
$email = $row['email'];

?>
<!DOCTYPE html>
<html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>MyLoundry.lk</title>
	<link rel="stylesheet" type="text/css" href="../css/header-footer.css">
	<link rel="stylesheet" type="text/css" href="../css/admin-acc.css">
	<link rel="stylesheet" type="text/css" href="../css/bubbles.css">

	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script>
	<!--icon anf font pack-->
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<!--icon pack-->
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<!--icon pack-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Box icon pack link -->
	

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
				        <li ><a class="menu-a" href="home.html">HOME</a></li>
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
<!-- Bubbles -->
<div class="wrapper">

<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
<div class="dot1"><span class="dot"></span></div>
</div>
<!-- End bubbles0 -->

		<!-- Side bar -->
        <div class="all">
        <div class="sidebar">
                <div class="logo_content">
                    <div class="admin_logo">
                        <i class='bx bxl-pocket'></i>
                        <div class="menu_name">Admin</div>
                    </div>
                    <i class='bx bx-menu' id="admin_btn" ></i>
                </div>
                <ul class="nav_list">
                    <li>
                            <i class='bx bx-search' ></i>
                            <input type="text" placeholder="Search...">
                    </li>
                    <li>
                        <a href="admin.php">
                            <i class='bx bx-grid-alt' ></i>
                            <span class="links_name" >Dashboard</span>
                        </a>
                    </li> 
                    <li>
                        <a href="admin-acc.php">
                            <i class='bx bx-user' ></i>
                            <span class="links_name" >Admin</span>
                        </a>
                    </li>
                    <li>
                        <a href="notification.php">
                            <i class='bx bx-bell'></i>
                            <span class="links_name" >Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="inquiry.php">
                            <i class='bx bx-folder' ></i>
                            <span class="links_name" >Inquaries</span>
                        </a>
                    </li>
                    <li>
                        <a href="feedback.php">
                            <i class='bx bx-chat' ></i>
                            <span class="links_name" >Feedbacks</span>
                        </a>
                    </li>
                    <li>
                        <a href="analytics.html">
                            <i class='bx bx-pie-chart-alt-2' ></i>
                            <span class="links_name" >Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class='bx bx-heart' ></i>
                            <span class="links_name" >Saved</span>
                        </a>
                    </li>
                    <li>
                        <a href="edit-profile.php">
                            <i class='bx bx-cog' ></i>
                            <span class="links_name" >Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="../php/logout.php">
							<i class='bx bx-log-out'></i>
                            <span class="links_name" >Log-Out</span>
                        </a>
                    </li>
                </ul>
            </div>
     <!-- side bar j script -->
            <script>

                let btn = document.querySelector("#admin_btn");
                let sidebar = document.querySelector(".sidebar");
                let searchBtn = document.querySelector(".bx-search");

                btn.onclick = function functionName() {
                    sidebar.classList.toggle("active");
                }
                searchBtn.onclick = function functionName() {
                    sidebar.classList.toggle("active");
                }

            </script>
       <!-- End of side bar -->


    <div class="admin">

        <div class="U-dashboard">
            <h2>Admin Account</h2><br>
			

			<div class="info1">
				
				<img src="../images/adm.jpg" alt="Avatar"> <br>
				<a class="dp" href="#">Edit</a>
	
				<h4> <br>Account Infromation</h4> <br>

				<h5>Name :</h5> <p class="p1">  <?php echo $fullname ;?></p>
				<br>
				<h5>E-mail :</h5> <p class="p2"> <?php echo $email ;?> </p>
				<br>
				<h5>Password :</h5> <a class="pw" href="change-password.php">Change Password</a> <br><br><br>
				<a href="edit-profile.php" class="ubtn"><i class='bx bx-cog' ></i> Edit Profile</a>
			</div>
			<div class="info2">
				
			</div>
        </div>
    </div>
</div>


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
				    <a  class="infor-line" href="privacy.html">Privacy Policy</a><br>
				    <a  class="infor-line" href="term-of-services.html">Terms of Services</a>
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
					<li ><a class="quick-link-a" href="donate.html">Donate</a></li>
					<li ><a class="quick-link-a"  href="login.php">Login</a></li>
					<li ><a class="quick-link-a" href="register.php">Register</a></li>
				</ul>	

			</div> <!--end of content-3 div tag-->	
		</div>	<!--end of footer div tag-->	
	

	
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