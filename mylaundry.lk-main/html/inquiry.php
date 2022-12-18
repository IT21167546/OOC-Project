<!--
IT21167300
Sumanasekara PDM
MLB_08.02_3
 -->

<?php 

// only admins can visit this page

session_start();

if (!isset($_SESSION['adminname'])) {
    header("location: login.php");} // if the logged in user is not an admin this will redirect to the login

require '../php/config.php' 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inquiry</title>
	<link rel="stylesheet" type="text/css" href="../css/inquiry.css">

	<link rel="stylesheet" type="text/css" href="../css/header-footer.css">

<!-- This icon pack is  used to geticons that is used in the footer -->
	<script src="https://kit.fontawesome.com/a340bc40a1.js" crossorigin="anonymous"></script> 
<!-- -------------------------------------------------------------- -->

</head>
<body>
<!-- ------------------------------------------------------------------- -->

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

<div id="search">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	Name :<input type="text" name="cName">
	From:
	<input type="date"  id ="dateI"  name="sentDate">
	To:
	<input type="date"  id ="dateI2"  name="sentDate2">
	

	<div id="buttons">
	<input type="submit" value="Submit" name="searchSubmit">
	<input type="reset" value="Reset">
	<input type="submit" value="Show All" name ="showAll">
	</div>

</form>
</div>

<!-- ------------------------------------------------------------------- -->
<table  id = "inquiry">
<!-- ------------------------------------------------------------------- -->
<?php 

	if (isset($_GET['type']) and $_GET['type'] == "showAll") {
	$sql = "SELECT * FROM inquiry";
	$displayType = "showAll";
	select($sql,$displayType);	
	} //user presses show all,redirection will be handled by this

	if(isset($_POST['showAll'])){
	$sql = "SELECT * FROM inquiry";
	$displayType = "showAll";
	select($sql,$displayType);
	} // user press "show all"

	if(isset($_POST['searchSubmit'])){
	$c_Name = $_POST['cName'];
	$sDate = $_POST['sentDate'];
	$eDate = $_POST['sentDate2'];
	$sql = "SELECT * FROM inquiry WHERE (name LIKE '%$c_Name%' AND date BETWEEN '$sDate' AND '$eDate')";
	select($sql,$c_Name,$sDate,$eDate);
	} //user fills the search form 

// function select will output the * for the $sql in a table
	function select ($sql,$displayType){
		global $conn;
		$result = $conn->query($sql);
		if ($result->num_rows > 0){
			echo "<tr>
    				<th>Name</th>
    				<th>Email</th>
    				<th>Message</th>
    				<th>Date</th>
    				<th>Response</th>
    				<th>Delete</th>
  				</tr>";
			while($row = $result->fetch_assoc()){
				$id = $row["inquiryID"];
				echo "<tr>";
				echo "<td>".$row["name"]."</td>";
				echo "<td>".$row["email"]."</td>";
				echo "<td>".$row["message"]."</td>";
				echo "<td>".$row["date"]."</td>";
				
				if ($row["respond"] ==  1) {
					echo "<td>"."Sent"."</td>";
				}
				else{

					echo 
					'<td> 
						<form method = POST action = "../php/updateInquiry.php?type='.$displayType.'">
					        <input type="submit" name="response" value="Respond"/>
	        				<input type="hidden" name="IID" value="'.$id.'"/>
						</form>
					</td>';
				}

				echo 
				'<td> 
					<form method = POST action = "../php/deleteInquiry.php?type='.$displayType.'">
					        <input type="submit" name="delete" value="Delete"/>
	        				<input type="hidden" name="IID" value="'.$id.'"/>
					</form>
				</td>';

				echo "</tr>";
			}
		}
		else{
			echo "<div id ='no-result'>No results</div>";
		}
	}
?>
<!-- ------------------------------------------------------------------- -->
</table>

<script type="text/javascript">
	// assign an today's date to value for the date input 
	const date = formatDate(new Date()) 
	console.log(date);
	
	const dateInput = document.getElementById('dateI');
	dateInput.value = date;

	const dateInput2 = document.getElementById('dateI2');
	dateInput2.value = date;

	function pad2Digits(num) {
	  return num.toString().padStart(2, '0'); 
	}; //if num is not 2 digits this will add a 0 to the start of the string num

	function formatDate(date) {
	  return (
	    [
	      date.getFullYear(),
	      pad2Digits(date.getMonth() + 1),
	      pad2Digits(date.getDate()),
	    ].join('-') 
	  ); // create a formated date like 2022-02-09 which is a string 
	}

</script>


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