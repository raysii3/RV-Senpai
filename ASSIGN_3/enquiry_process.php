<?php
	include 'enquiry_process_header.php'
?>
	
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
	
<?php
	include 'enquiry_process_footer.php'
?>

</body>
	<script src="script/script.js"></script>
</html>
