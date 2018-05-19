<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="RV Senpai Project/Assignment" />
    <meta name="keywords" content="RV, Senpai, Enquiry Page" />
    <meta name="author" content="Ericson Tan Peng Hong, Loo Wei Jit, Raymond Sii Li Sheng, Ian Chung Ye Earn" />
	
    <title>RV Rental Enquiry | RV Senpai</title>
	
	<link rel="stylesheet" type="text/css" href="styles/style.css"/>
	<!-- Link for social media -->
	<!-- https://www.w3schools.com/howto/howto_css_social_media_buttons.asp -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
	
	<script src="script/enhancements.js"></script>
	<script src="script/script.js"></script>

	
</head>

<body>

<header>
	<div class="scroll_bar">
		<div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>  
	</div> 
	<nav>
	<a class="logo" href="index.html" title="RV Senpai HomePage">RV SENPAI</a>
		<ul>
			<li><a href="index.html" title="RV Senpai HomePage">Home</a></li>
			<li><a href="aboutus.html" title="About RV Senpai">About Us</a></li>
			<li><div class="product_dropdown">
					<a class="dropbtn" href="product.html" title="RV Senpai RVs">Rental</a>
					<div id="product_dropdown_id" class="product_dropdown_content">
					</div>
				</div>
				</li>
			<li><a class="active" href="enquiry.html" title="Rent Your RV Here">Booking</a></li>
			<li><a href="event.html" title="Event RV Senpai">Event</a></li>
			<li><a href="contactus.html" title="Contact RV Senpai">Contact Us</a></li>
		</ul>
	</nav>
</header>

	
	<div class="bigimg_enquiry">
		<div class="caption">
		<h1><span class="border">Feel Like Home</span></h1>
		</div>
	</div>

	<article class="white_background-article">
		<h3>Booking Confirmed</h3>
		<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "enquirydb";
		
		//Create Connection
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		 //Check Connection
		if (!$conn) {
			die("Connection Failed: " . mysqli_connect_error());
		} else {
			echo "Congratualation\n";
			echo "<br />";
		} 
		
		//get the value from enquiry.php
		$fname = $_POST['Fname'];
		$lname = $_POST['Lname'];
		$email = $_POST['contactemail'];
		$pnumber = $_POST['p_number'];
		$hpnumber = $_POST['hp_number'];
		$street = $_POST['srt_add'];
		$state = $_POST['state'];
		$postcode = $_POST['postcode'];
		$subject = $_POST['Subject'];
		$pclass = $_POST['product'];
		$rentday = $_POST['duration'];
		
		//write the query to add the value into database
		$sql = "INSERT INTO enquiry (FirstName, LastName, Email, PhoneNumber, HandphoneNumber, Address, State, PostCode, RVRental, RVClass, RentTime)
		VALUES ('$fname', '$lname', '$email', '$pnumber', '$hpnumber', '$street', '$state', '$postcode', '$subject', '$pclass', '$rentday')";
		
		
		
		 //check if the 	query is correct
		if (mysqli_query($conn, $sql)) {
			echo "Booking is complete.\n";
		} else {
			echo "Error: ".$sql."<br>" . mysqli_error($conn);
		} 
		?>
		
		<table>
			<caption>Enquiry Table</caption>
			<th>Description</th>
			<th>Value</th>
			<tr><td>First Name</td><td><?php echo $fname;?></td></tr>
			<tr><td>Last Name</td><td><?php echo $lname;?></td></tr>
			<tr><td>Email</td><td><?php echo $email;?></td></tr>
			<tr><td>Phone Number</td><td><?php echo $pnumber;?></td></tr>
			<tr><td>Handphone Number</td><td><?php echo $hpnumber;?></td></tr>
			<tr><td>Street Address</td><td><?php echo $street;?></td></tr>
			<tr><td>State</td><td><?php echo $state;?></td></tr>
			<tr><td>PostCode</td><td><?php echo $postcode;?></td></tr>
			<tr><td>Subject / RV</td><td><?php echo $subject;?></td></tr>
			<tr><td>Product Class</td><td><?php echo $pclass;?></td></tr>
			<tr><td>Rental Duration</td><td><?php echo $rentday;?></td></tr>
		</table>
		
		<?php
		mysqli_close($conn);
		?>
		<h3>Your Booking is Complete</h3>
		<h3>Please Wait For Further Confirmation</h3>
		
		
	</article>
	
	<div class="bigimg_enquiry">
		<div class="caption">
		<h1><span class="border">Anywhere, Everywhere</span></h1>
		</div>
	</div>
	
<footer>

		<ul>
			<li><a href="partnership.html" title="RV Senpai Partners">Partnership</a></li>
			<li><a href="faq.html" title="RV Senpai FAQ">FAQ</a></li>
			<li><a href="photo.html" title="Photo Gallery">Photo Gallery</a></li>
			<li><a href="feedback.html" title="RV Senpai Feedback Form">Feedback</a></li>
			<li><a href="enhancements.html" title="RV Senpai Website Enhancements">Enhancements</a></li>
			<li><a href="enhancements2.html" title="RV Senpai Website Enhancements">Enhancements2</a></li>
			<li><a href="disclaimer.html" title="Disclaimer">Disclaimer</a></li>
		</ul>
	
	<div class="footer_followus">
			<a href="https://www.instagram.com/" target="_blank" class="fa fa-instagram" title="RV Senpai Instagram"></a>
			<a href="https://www.facebook.com/" target="_blank" class="fa fa-facebook" title="RV Senpai Facebook"></a>
			<a href="https://twitter.com/" target="_blank" class="fa fa-twitter" title="RV Senpai Twitter"></a>
			<a href="https://www.pinterest.com/" target="_blank" class="fa fa-pinterest" title="RV Senpai Pinterest"></a>
			<a href="https://www.snapchat.com/" target="_blank" class="fa fa-snapchat-ghost" title="RV Senpai Snapchat"></a>
			<a href="https://www.google.com/" target="_blank" class="fa fa-google" title="RV Senpai Google Page"></a>
			<a href="https://www.youtube.com/" target="_blank" class="fa fa-youtube" title="RV Senpai Youtube Channel"></a>

	</div>	

	<div class="copyright">
	<p>@ Amazing Retards | Page developed by Ericson Tan Peng Hong, Loo Wei Jit, Raymond Sii Li Sheng, Ian Chung Ye Earn | Last updated: 24 March 2018</p>
	</div>
	
</footer>

</body>
	<script src="script/script.js"></script>
</html>
