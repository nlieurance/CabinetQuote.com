<?php
include('header.php'); 
require_once __DIR__ . '/connect_db.php';



?>
<div id="searchbox">
<form action="index.php" method="post">
<select name="country" class="countries" id="countryId">
<option value="">Select Country</option>
</select>
<select name="state" class="states" id="stateId">
<option value="">Select State</option>
</select>
<select name="city" class="cities" id="cityId">
<option value="">Select City</option>
</select>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="location.js"></script>
<input type="submit" value="Search">
</form>
</div>

<div class="project_results"><div class="header"><h1>Projects...</h1></div>

<?php 
include('pagination.php');
?>



