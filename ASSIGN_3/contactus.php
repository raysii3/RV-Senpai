<?php
	include 'contactus_header.php'
?>

	
	<div class="bigimg_contactus">
		<div class="caption">
		<h1><span class="border">Adventure</span></h1>
		</div>
	</div>

	<article>
		<div class="article_area">
			<h3 class="h3_black_background">Contact Us</h3>
			<h4>We Will Be There For You</h4>
			<div id="map_block">
			<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3916672644277!2d110.3550372147541!3d1.5322625988825767!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31fba70b11e02ce7%3A0x69cbf290cfd24bb7!2sSwinburne+University+of+Technology+Sarawak+Campus!5e0!3m2!1sen!2smy!4v1521882120760" ></iframe>
			</div>
		
			<div class="contact_info">
				<p>Swinburne University of Technology Sarawak Campus Jalan Simpang Tiga 93350 Kuching, Sarawak, Malaysia</p>
				<p>t: +60 82 415 353</p>
				<p>f: +60 82 428 353</p>
				<p>Any Question?<a href="mailto:100079958@students.swinburne.edu.my" target="-top" title="RV Senpai Email">Email Us</a></p>
			</div>
		</div>
	
		<h3>Enquiry</h3>
		<h4 class="white_bg">Send Us A Message</h4>
		
		<form method="post" action="form.php" id="contactus_form">
		<fieldset>
		<legend>Personal Information</legend>
		<table>
			<tr>
				<th>
					<label for="name">Name: </label>
					<input type="text" name="name" id="name" maxlength="50" size="30" required="required" pattern="^[a-zA-Z ]+$" placeholder="Your Name"/>
				</th>
			</tr>
			<tr>
				<th>
					<label for="email">Email: </label>
					<input type="email" name="email" id="email" maxlength="50" size="30" required="required" placeholder="Your email"/>
				</th>
			</tr>
		</table>
		</fieldset><!--personal_info-->
	
		<fieldset>
		<legend>Comments</legend>
		<table>
			<tr>
				<td>
					<textarea name="comment" id="comment" rows="10" cols="50" placeholder="Send us your questions"></textarea>
				</td>
			</tr>
		</table>
		</fieldset>
		
		<table>
			<tr>
				<td>
					<p class="button"><input type="submit" value="Submit"/></p>
				</td>
				<td>
					<p class="button"><input type="reset" value="Reset"/></p>
				</td>
			</tr>
		</table>
		</form>
	</article>
	
	<div class="bigimg_contactus">
		<div class="caption">
		<h1><span class="border">Is Worthwhile</span></h1>
		</div>
	</div>
	
<?php
	include 'contactus_footer.php'
?>
</body>
<script src="script/script.js"></script>

</html>
