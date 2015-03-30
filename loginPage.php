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
	<script src="script/login.js"></script>
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
	<form action="login.php" method="POST" onsubmit="return validation();">
	<!--Table for Content-->
	<table id="contentTable">
	<tr></tr>
	<tr>
		<td>Login Name:</td>
		<td><input type="text" id="username" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" id="pw" name="pw"></td>
	</tr>
	<tr>
		<td>Login As:</td>
		<td>
		<select id="type" name="type">
		  <option value="tenant">Tenant</option>
		  <option value="owner">Property Owner</option>
		</select>
		</td>
	</tr>
	<tr>
		<?php
			if(isset($_SESSION['errorMsg']))
				errorMsg();
		?>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" value="Login"></td>
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