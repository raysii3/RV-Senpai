<?php
	include 'feedback_header.php'
?>

	
	<div class="bigimg_feedback">
		<div class="caption">
		<h1><span class="border">Let Your Memory</span></h1>
		</div>
	</div>

	<article>
	
		<h3>Feedback</h3>
		<h4 class="white_bg">Improve And Do it BETTER</h4>
		
		<form method="post" action="form.php" id="feedback_form">
		<fieldset>
		<legend>Personal Information</legend>
		<table>
			<tr>
				<td>
					<label for="name">Name: </label>
					<input type="text" name="name" id="name" maxlength="50" size="30" required="required" pattern="^[a-zA-Z ]+$" placeholder="Your Name"/>
				</td>
			</tr>
			<tr>
				<td>
					<label for="email">Email: </label>
					<input type="email" name="email" id="email" maxlength="50" size="30" required="required" placeholder="Your email"/>
				</td>
			</tr>
		</table>
		</fieldset><!--personal_info-->
		
		<fieldset>
		<legend>Rating</legend>
		<table>
			<tr>
				<td>
					<label> Is our service expensive ? </label>
				</td>
			</tr>
			<tr>
				<td>
					<label><input type="radio" name="rate_price" value="cheap" required="required"/> Cheap</label>
					
					<label><input type="radio" name="rate_price" value="affordable"/> Affordable</label>
					
					<label><input type="radio" name="rate_price" value="expensive"/> Expensive</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Do you feel satisfied with our RV ?</label>
				</td>
			</tr>
			<tr>
				<td>
						<select name="satisfaction" id="satisfaction">
							<option value="very_dissatisfied">Very Dissatisfied</option>
							<option value="dissatisfied">Dissatisfied</option>
							<option value="OK" selected="selected">OK</option>
							<option value="satisfied">Satisfied</option>
							<option value="very_satisfied">Very Satisfied</option>
						</select>
				</td>
			</tr>
		</table>
		</fieldset><!--rating-->
	
		<fieldset>
		<legend>Improvement</legend>
		<table>
			<tr>
				<td>
					<textarea name="comment" id="comment" rows="10" cols="50" placeholder="How do you think we can improve our service ? What do you think about our performance ?"></textarea>
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
	
	<div class="bigimg_feedback">
		<div class="caption">
		<h1><span class="border">Become Travel Bag</span></h1>
		</div>
	</div>
	
<?php
	include 'feedback_footer.php'
?>

</body>
<script src="script/script.js"></script>
</html>
