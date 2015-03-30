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
		<?php createNavBar();?>	
	</ul>
	</div>
	<br>
	<!--Navigation Bar End-->
	<!--Table for Content-->
	<table id="contentTable">
	<tr>
		<td><center><h1>Welcome to ConcordiaRentalMarket.ca</h1></center></td>
	</tr>
	<tr>
		<td><p>This is a website for listing and finding rentals. The website allows an owner
		to list rentals with specific requirements for the tenants.</p>
		<p>It also allows a tenant to locate
		housing in a specific area as well as other specifications.</p></td>
	</tr>
	</table>
	<!--End of content Table-->	
	<!--Footer-->
	<?php footer();?>
	<!--Footer End-->
	</center>
	<!--Body End-->
</body>
</html>