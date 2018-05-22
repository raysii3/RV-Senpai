<?php
	session_start();
?>
<!DOCTYPE html>
<html lang='en'>

<head>
    <meta charset="utf-8" />
    <meta name="description" content="RV Senpai Project/Assignment" />
    <meta name="keywords" content="RV, Senpai, Trailer RV" />
    <meta name="author" content="Ericson Tan Peng Hong, Loo Wei Jit, Raymond Sii Li Sheng, Ian Chung Ye Earn" />
	
    <title>Trailer RV | RV Senpai</title>
	
	<link rel="stylesheet" type="text/css" href="styles/style.css" />
	<!-- Link for social media -->
	<!-- https://www.w3schools.com/howto/howto_css_social_media_buttons.asp -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	
	<script src="script/enhancements.js"></script>
</head>

<body>

<header>
	<div class="scroll_bar">
		<div class="progress-container">
			<div class="progress-bar" id="myBar"></div>
		</div>  
	</div> 
	<nav>
	<a class="logo" href="index.php" title="RV Senpai HomePage">RV SENPAI</a>
		<ul>
			<li><a href="index.php" title="RV Senpai HomePage">Home</a></li>
			<li><a href="aboutus.php" title="About RV Senpai">About Us</a></li>
			<li><div class="product_dropdown active">
					<a class="dropbtn" href="product.php" title="RV Senpai RVs">Rental</a>
					<div id="product_dropdown_id" class="product_dropdown_content"></div>
				</div>
			</li>
			<li><a class="booking" href="enquiry.php" title="Rent your RV Here">Booking</a></li>
			<li><a href="event.php" title="Event RV Senpai">Event</a></li>
			<li><a href="contactus.php" title="Contact RV Senpai">Contact Us</a></li>
		</ul>
	</nav>
</header>