<div class="project_results"><h1>Quote this Project...</h1>

<p>Use this form to provide a quote for the selected project. Your quote will appear on the Project Details page and will be visible to all logged in users.</p>

<?php $project_id = $_GET['id'] ;?>

<div class="project_form"><form action="quote.php" method="POST" accept-charset="utf-8">
	<p>Quote Amount <input name="amount" type="text" size="100" required></p>
	<p>Type of Work Included in Quote: </p>
	<p><input type="checkbox" name="newcabinets" value="1"> New Cabinets
	<input type="checkbox" name="newcounters" value="1"> New Countertops
	<input type="checkbox" name="refacing" value="1"> Refacing
	<input type="checkbox" name="newdoors" value="1"> New Doors
	<input type="checkbox" name="newdrawers" value="1"> New Drawers</p>
	<p>Quote Details: </p>
	<p><textarea name="details" cols="90" rows="10"></textarea></p>
	<p><input type="submit" value="Submit"></p>
	<input type="hidden" value=<?php echo $project_id ;?> name="project_id"/></form>
</div>

</div>