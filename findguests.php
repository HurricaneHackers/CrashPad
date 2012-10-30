<!DOCTYPE html>

<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Offer a Room</title>
<link rel="stylesheet" href="css/style.css" />
	<style>

	</style>
</head>

<body>

<div id="container">
<h1>Offer Your Room</h1>
<form class="main_form" name="need_room" action="findroomsubmit.php" method="post">
<input type="hidden" name="is_host" value="1" />
		<label for="contact_name">Contact Name:</label><br /><input type="text" name="contact_name" id="contact_name" value="" /><br />
		<label for="num_people">Number of People You Can Host:</label><br /><input type="text" size="5" id="num_people" name="num_people" value="" /><br /><br />
		<label for="animals">Animals OK?</label><input style="margin: 5px;" type="checkbox" name="animals" /><br /><label for="animals_notes">Any exceptions? (Allergies, etc)</label><input type="text" name="animals_notes" id="animals_notes" size="10" style="margin: 5px;" value="" /><br /><br />
		<label for="location">Location ("City, State" or "Zipcode"):</label><br /><input type="text" name="location" id="location" value="" /><br />
		<label for="phoneno">Phone Number:</label><br /><input type="tel" name="phoneno" id="phoneno" value="" /><br />
		<label for="email">Name:</label><br /><input type="email" name="email" id="email" value="" /><br />
		<label for="post_to">Also post availability to:</label> <br />
			<input type="checkbox" name="post_to" checked value="craigslist" />Craigslist
			<input type="checkbox" name="post_to" checked value="couchsurfing" />Couchsurfing
			<input type="checkbox" name="post_to" checked value="VRBO" />VRBO 
		<input type="submit" style="float: right;" value="Submit" />
	</form>
	
	<div class="current_table">
		<h2>Currently Searching:</h2>
		<table style="width: 450px; font-size: 80%; text-align: center;">
			<tr>
				<th>Name</th><th>City/Zip</th><th>Phone</th><th>Need Room For</th><th>Animals?</th><th>&nbsp;</th>
			</tr>
			<tr>
				<td>John Smith</td><td>New York</td><td>111-111-1111</td><td>3</td><td>Yes</td><td><a href="#">Email</a></td></tr>
			<tr><td colspan="6" style="font-size: 60%; text-align: center;">Not sure if this is the plan or not but could display info to facilitate direct contact here.</td></tr>
		</table>
	
	</div>

</div>


<script type="text/javascript">

</script>

</body>
</html>