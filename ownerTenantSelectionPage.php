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
	<script src=""></script>
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
	<form action="ownerTenantSelection.php" method="POST" onsubmit="return validation();">
	<!--Table for Content-->
	<table id="contentTable">
	<tr>
	<td colspan="2"><center><div id="headerTitle">Please select Tenant Options</div></center></td>
	</tr>
	<tr>
		<td>Pets: </td>
		<td><div id="selectBar"><select id="pets" name="pets">
					<option value="None">None</option>
					<option value="1">1</option>
					<option value ="2">2</option>
					<option value="3">3</option>
					<option value ="4+">4 or more</option></div></td>
	</tr>
	<tr>
		<td>Smoker: </td>
		<td><div id="selectBar"><select id="smoker" name="smoker">
						<option value="Yes">Yes</option>
						<option value ="No">No</option></div></td>
	</tr>
	<tr>
		<td>Age: </td>
		<td><div id="selectBar"><select id="age" name="age">
					<option value="18-22">18-22</option>
					<option value="23-27">23-27</option>
					<option value ="28-38">28-38</option>
					<option value="39-50">39-65</option>
					<option value ="66+">Over 65</option></div></td>
	</tr>
	<tr>
		<td>Occupation: </td>
		<td><div id="selectBar"><select id="occupationSchool" name="occupationSchool">
					<option value="Full Time">Full Time Student</option>
					<option value="Part Time">Part Time Student</option></select><br>
				<select id="occupationWork" name="occupationWork"><option value ="Full Time">Employed Full Time</option>
					<option value="Part Time">Employed Part Time</option>
					<option value ="Unemployed">Unemployed</option></div></td>
	</tr>
	<tr>
		<td>Income Level: </td>
		<td><div id="selectBar"><select id="income" name="income">
					<option value="below5k">Below 5000$</option>
					<option value ="5k-10k">5000$ to 10,000$</option>
					<option value="10k-50k">10,000$ to 50,000$</option>
					<option value ="50k+">more than 50,000$</option></div></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Submit"></td>
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