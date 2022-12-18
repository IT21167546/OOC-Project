<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php

//only users can visit this page

session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login

require'../php/config.php';
 
?>


<html>
<head>
<title>Order Now</title>

<link rel='stylesheet' href='../css/order-cart.css' type='text/css' media='all' />
<!-- Search function css -->
<link rel="stylesheet" type="text/css" href="../css/inquiry.css">
<!-- Search function css ends-->

	<link rel="stylesheet" type="text/css" href="../css/header-footer.css">

<!-- This icon pack is  used to geticons that is used in the footer -->
	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script>
<!-- -------------------------------------------------------------- -->

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

<!-- Search function -->
<div id="search">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	Search :<input type="text" name="cName">
	Price Range ( Rs.0 - Rs.500):
	<input type="range"  id ="dateI"  name="sentDate" min="0" max="500" step="100">
	(Rs.<span id="slider-value"></span>)

	<div id="buttons">
	<input type="submit" value="Submit" name="searchSubmit">
	<input type="reset" value="Reset">
	<input type="submit" value="Show All" name ="showAll">
	</div>

</form>
</div>

<!-- Search function ends-->

<div class ="order-main">
	
<?php
	if(!empty($_SESSION["cart"])) {
	$cart_count = count(array_keys($_SESSION["cart"]));
?> 
 

<div class="cart_div">
	<a href="cart.php"><img src="../images/cart-icon.png" /><span><?php echo $cart_count; ?></span></a>
</div>

<?php
}

if (isset($_GET['type']) and $_GET['type'] == "showAll") {
	$sql = "SELECT * FROM products";
	$displayType = "showAll";
	select($sql,$displayType);	
	} //user presses show all,redirection will be handled by this

if(isset($_POST['showAll'])){
	$sql = "SELECT * FROM products";
	$displayType = "showAll";
	select($sql,$displayType);
	} // user press "show all"

	if(isset($_POST['searchSubmit'])){
	$c_Name = $_POST['cName'];
	$sDate = $_POST['sentDate'];
	$sql = "SELECT * FROM products WHERE ( name LIKE '%$c_Name%' AND price BETWEEN 100 AND $sDate)";
	select($sql,0);
	} //user fills the search form 



function select($sql,$displayType){
	global $conn;
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()){
			echo "	<div class='product_wrapper'>
				  			<form method='post' action='../php/add-to-cart.php?type=".$displayType."'>
				  				<input type='hidden' name='code' value=".$row['code']." />
				  						<div class='image'><img src='".$row['image']."' width = '100px' height = '100px' /></div>
				  						<div class='name'>".$row['name']."</div>
			   	  					<div class='price'>Rs.".$row['price']."</div>
				  						<button type='submit' class='buy'>Add to Cart</button>
				  			</form>
			   	  	</div>";
	        }
}

?>



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
					<li ><a class="quick-link-a" href="../php/logout.php">Logout</a></li>
				</ul>	

			</div> <!--end of content-3 div tag-->	
		</div>	<!--end of footer div tag-->	
	

	
</body>

<script>
var slider = document.getElementById("dateI");
var output = document.getElementById("slider-value");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

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