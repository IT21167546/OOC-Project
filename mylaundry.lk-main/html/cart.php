<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->
 
<?php


session_start();

if (!isset($_SESSION['username'])) {
    header("location: login.php");} // if the user is not logged in this will redirect the user to login


if (isset($_POST['action']) && $_POST['action']=="remove"){

	if(!empty($_SESSION["cart"])) {

				unset($_SESSION["cart"][$_POST['code']]);
			}

			if(empty($_SESSION["cart"])) unset($_SESSION["cart"]);
		}
	// will remove the item if its in the cart if the cart is empty will delete the cart session
?>

<html>
<head>
<title>Cart</title>
<link rel='stylesheet' href='../css/order-cart.css' type='text/css' media='all' />

<link rel="stylesheet" type="text/css" href="../css/header-footer.css">

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

<div class ="cart-main">


<?php

if(!empty($_SESSION["cart"])) {
	$cart_count = count(array_keys($_SESSION["cart"]));
?>

<div class="cart_div">

	<a href="cart.php">
	<img src="../images/cart-icon.png" /> 
	<span><?php echo $cart_count; ?></span></a>

</div>

<?php
}
?>

<div class="cart">

<?php
if(isset($_SESSION["cart"])){
    $total_price = 0;
?>

<table class="table">

<tr>

	<td>ITEM NAME</td>
	<td>QUANTITY</td>
	<td>UNIT PRICE</td>
	<td>ITEM TOTAL</td>

</tr>	

<?php		
foreach ($_SESSION["cart"] as $product){
?>

<tr>

	<td>
		<img src='<?php echo $product["image"]; ?>' width="50" height="50" />
	</td>

	<td>
		<?php echo $product["name"]; ?><br />
		<form method='post' action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

		<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
		<input type='hidden' name='action' value="remove" />
		<button type='submit' class='remove'>Remove Item</button>

		</form>
	</td>

	<td>
		<?php echo $product["quantity"]; ?>	
	</td>

	<td>
		<?php echo "Rs.".$product["price"]; ?>
	</td>

	<td>
		<?php echo "Rs.".(float)$product["price"]*(int)$product["quantity"]; ?>
	</td>
</tr>

<?php
$total_price += ((float)$product["price"]*(float)$product["quantity"]);
}
?>
<tr>
	<td colspan="5" align="right">
	<strong>TOTAL: <?php echo "Rs.".$total_price; ?></strong>
	</td>
</tr>

</table>		

<?php
}
else{
	echo "<h3>Your cart is empty!</h3>";
	}
?>
</div>
</div>

<div class = "cart-to-order">
	
        <button class="btn" onclick="window.location.href = 'order.php?type=showAll';">
            Add Items
        </button>
   
        <button class="btn" onclick="window.location.href = 'payment.php';">
            Order Now
        </button>
    
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
					<li ><a class="quick-link-a" href="logout.php">Logout</a></li>
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