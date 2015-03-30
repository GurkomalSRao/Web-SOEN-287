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
	<script src="script/register.js"></script>
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
	<form action="register.php" method="POST" onsubmit="return validation();">
	<!--Table for Content-->
	<table id="contentTable">
	<tr> 
		<td>First Name:</td>
		<td> <input type="text" id="fname" name="fname"></td>
	</tr>
	<tr>
		<td>Last  Name:</td>
		<td><input type="text" id="lname" name="lname"></td>
	</tr>
	<tr>
		<td>Phone Number:</td>
		<td>(<input type="text" id="phone1" name="phone1" placeholder="xxx" size="3" maxlength="3">)
		<input type="text" placeholder="xxx" id="phone2" name="phone2" size="3" maxlength="3">-
		<input type="text" placeholder="xxx" id="phone3" name="phone3" size="4" maxlength="4"></td>
	</tr>
	<tr>
		<td>Email Address:</td>
		<td><input type="email" placeholder="yourEmail@gmail.com" id="email" name="email"></td>
	</tr>
	<tr>
		<td>Login Name:</td>
		<td><input type="text" id="username" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="password" id="pw1" name="pw1"></td>
	</tr>
	<tr>
		<td>Password Confirmation:</td>
		<td><input type="password" id="pw2" name="pw2"></td>
	</tr>
	<tr>
		<td>Registered As:</td>
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