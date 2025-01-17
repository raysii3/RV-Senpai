<?php
	include 'enquiry_header.php'
?>

	
	<div class="bigimg_enquiry">
		<div class="caption">
		<h1><span class="border">Feel Like Home</span></h1>
		</div>
	</div>

	<article class="white_background-article">
	
		<h3>Booking</h3>
		<h4 class="white_bg">RELAX and Enjoy</h4>
		
		<form method="post" id="enquiry">
			<fieldset>
				<legend>Personal Detail</legend>
					<table>
						<tr>
							<td>
								<label for="Fname">First Name: </label>
								<input type="text" name="Fname" id="Fname" placeholder="Your First Name" maxlength="25" size="30"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="Lname">Last Name:</label>
								<input type="text" name="Lname" id="Lname" placeholder="Your Last Name" maxlength="25" size="30"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="email">Email: </label>
								<input type="email" name="contactemail" id="email" placeholder="name@domain.com" size="35" />
							</td>
						</tr>
						<tr>
							<td>	
								<label for="p_number">Phone Number: </label>
								<input type="text" name="p_number" id="p_number" placeholder="123-456789" size="25"/>
							</td>
						</tr>
						<tr>
							<td><label for="hp_number">Handphone Number: </label>
							<input type="text" name="hp_number" id="hp_number"  placeholder="012-34567890"/>
							</td>
						</tr>
					</table>
			</fieldset>
			
			<fieldset>
				<legend>Address</legend>
					<table>
						<tr>
							<td>
								<label for="srt_add">Street Address: </label>
								<input type="text" name="srt_add" id="srt_add"  maxlength="40"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="city/town">City/Town: </label>
								<input type="text" name="city/town" id="city/town" size="26"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="state">State: </label>
								<select name="state" id="state">
									<option value = "Select a state" selected="selected">Select a state</option>
									<option value = "Sarawak">Sarawak</option>
									<option value = "Sabah">Sabah</option>
									<option value = "Penang">Penang</option>
									<option value = "Selangor">Selangor</option>
									<option value = "Johor">Johor</option>
									<option value = "Malacca">Malacca</option>
									<option value = "Perak">Perak</option>
									<option value = "Pahang">Pahang</option>
									<option value = "Kedah">Kedah</option>
									<option value = "Kelantan">Kelantan</option>
									<option value = "Terengganu">Terangganu</option>
									<option value = "Negeri Sembilan">Negeri Sembilan</option>
									<option value = "Perlis">Perlis</option>
								</select>
							</td>
						</tr>
						<tr>
							<td>	
								<label for="postcode">Postcode: </label>
							<input type="text" name="postcode" id="postcode"  maxlength="5" size="26"/>
							</td>
						</tr>
					</table>	
			</fieldset>
			
			<fieldset>
				<legend>Rental Detail</legend>
					<table>
						<tr>
							<td>
							<label for="Subject" >Subject / RV Rental (Which RV do you want to rent?): </label>
							<select name="Subject" id="Subject" onchange="check()">
								<option value = "Select your RV" selected>Select your RV</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>
							<label for="product" id="productlabel">Product Class </label>
							<select name="product" id="product">
								<option value = "Select your RV Class plan" selected>Select your RV Class plan</option>
							</select>
							</td>
						</tr>
						<tr>
							<td>
								<label for="rental_dur">Rental Duration/days (Minimum: 1 days | Maximum: half year):</label>
								<input type="number" name="duration" id="rental_dur" min="1" max="182" step="1" value="0"/>
							</td>
						</tr>
						<tr>
							<td>
								<p class="rental_detail_textarea">Any Comment?</p><p class="rental_detail_textarea"><textarea class="comment_faq" name="comments" rows="10" cols="50" placeholder="Tell Us what you need"></textarea></p>
							</td>
						</tr>
					</table>
				</fieldset>
				
				<table>
					<tr>
						<td>
						<p class="button" onclick="display()"><input type="submit" value="Submit" id="clickme"/></p>
						</td>
						<td>
						<p class="button"><input type="reset" value="Reset"/></p>
						</td>
					</tr>
				</table>
		</form>
	</article>
	
	<div class="bigimg_enquiry">
		<div class="caption">
		<h1><span class="border">Anywhere, Everywhere</span></h1>
		</div>
	</div>
	
<?php
	include 'enquiry_footer.php'
?>

</body>
	<script src="script/script.js"></script>
</html>
