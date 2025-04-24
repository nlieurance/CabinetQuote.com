<div class="project_results"><h1>Post a Project...</h1>

<p>Use this form to post a project. You'll be able to see quotes from cabinetmakers as soon as they are posted, but no one will contact you.
	If and when you're ready to hire, just press the Contact button to get in touch with the cabinetmaker you want.</p>

<div class="project_form">
	<form action="post_action.php" method="post" enctype="multipart/form-data">
	<p>Project Image:  <input type="file" name="sample_image" id="file"></p>
	<hr>
	<p>Pinterest URL: <input name="pin_board" type="url" size="100" placeholder="Example: https://www.pinterest.com/pin/44613852536110001/"></p>
	<p id="grey">Have you seen something you like on Pinterest? Copy and paste the URL of the PIN. Use <a href="https://www.pinterest.com/cabinetquotecom/" target="_blank">our boards </a>to remain anonymous.</p>
		<hr>
	<p>Your Email Address: <input name="email" type="email" size="100" required></p>
	<p>Project Title: <input name="title" type="text" size="100" required></p>
	<p>Estimated Budget: (USD. No dollar sign. Ex: 4000) <input name="budget" type="text" size="10" required></p> 
	<p>Timeframe: (When do you expect to hire?) <select name="timeframe" required><option value="Less than a month">Less than one month</option>
		<option value="1-2 Months">1-2 months</option>
		<option value="3-6 months">3-6 months</option>
		<option value"More than 6 months">More than 6 months</option>
	</select>
	<p>Project Square Footage: (Multiply the room width by the room length.) <input name="sqft" type="text" size="5" required></p>
	<p>Country: <select name="country" class="countries" id="countryId" required><option value="">Select Country</option></select></p>
	<p>State: <select name="state" class="states" id="stateId" required><option value="">Select State</option></select></p>
	<p>City: <select name="city" class="cities" id="cityId" required><option value="" required>Select City</option></select></p>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="location.js"></script>
	<p>Type of Work Needed: </p>
	<p><input type="checkbox" name="newcabinets" value="1"> New Cabinets
	<input type="checkbox" name="newcounters" value="1"> New Countertops
	<input type="checkbox" name="refacing" value="1"> Refacing
	<input type="checkbox" name="newdoors" value="1"> New Doors
	<input type="checkbox" name="newdrawers" value="1"> New Drawers</p>
	<p>Project Description:</p>
	<p><textarea name="description" cols="90" rows="10"></textarea></p>
	<p><input type="submit" value="Submit"></p></form>
</div>

</div>

