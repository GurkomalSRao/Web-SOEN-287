<?php
session_start();
require('functions.php');
?>
<html lang="en">
<head>
<!--Header-->
	<meta charset="utf-8">

	<title>Concordia Rental Market</title>
	<meta name="description" content="Rental Market">
	<meta name="author" content="Gurkomal Singh Rao">

	<link rel="stylesheet" type="text/css" href="css/Home.css">
	<script src="script/listing.js"></script>
<!--Header End-->
</head>
<!--Body-->
<body>
	<center>
	<!--Banner Image-->
	<div id="top"></div>
	<!--Navigation Bar -->
	<div id="nav">
	<ul>
		<li><a href="index.php">Home</a></li>
		<?php
			createNavBar();
		?>		
	</ul>
	</div>
	<br>
	<!--Navigation Bar End-->
	<form action="" method="POST" onsubmit="return validate();">
	<!--Table for Content-->
	<table id="contentTable">
	<tr>
	<td colspan="2"><center><div id="headerTitle">Rental Preferences</div></center></td>
	</tr>
	<tr>
		<td>Title: </td>
		<td><input type="text" id="title" name="title"></td>
	</tr>
	<tr>
		<td>Address: </td>
		<td><input type="text" id="address" name="address"></td>
	</tr>
	<tr>
		<td>City: </td>
		<td><input type="text" id="city" name="city"></td>
	</tr>
	<tr>
		<td>Postal Code: </td>
		<td><div id="selectBar"><input type="postalCode" id="postalCode" name="postalCode"></div></td>
	</tr>
	<tr>
		<td>Province: </td>
		<td><div id="selectBar"><select id="province" name="province">
					<option value="QC">Quebec</option>
					<option value ="ON">Ontario</option>
					<option value="NB">New Brunswick</option>
					<option value ="NS">Nova Scotia</option>
					<option value="NL">Newfoundland and Labrador</option>
					<option value="MB">Manitoba</option>
					<option value="SK">Saskatchewan</option>
					<option value="AB">Alberta</option>
					<option value="BC">British Columbia</option>
					<option value="YT">Yukon</option>
					<option value="NT">Northwest Territories</option>
					<option value="NU">Nunavut</option>
					<option value="PE">Prince Edward Island</option></div></td>
	</tr>
	<tr>
		<td>Upload Property Pictures:</td>
		<td><input type="file" name="pic" accept="image/*"></td>
	</tr>
	<tr>
		<td>Availability:</td>
		<td><div id="availBar"><input type="date" name="avail" id="avail" min="2015-03-17"></div></td>
	</tr>
	<tr>
		<td>Price:</td>
		<td><input type="text" id="price" name="price"></td>
	</tr>
	<tr>
		<td colspan="2"><textarea maxlength="300" rows="4" cols="50">Enter Additional Information Here</textarea></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Submit"><br><br> <input type="reset" value="Clear"></td>
	</tr>
	</table>
	</form>
	<!--End of content Table-->	
	<!--Footer-->
	<?php footer();?>
	<!--Footer End-->
	</center>
	<!--Body End-->
</body>
</html>