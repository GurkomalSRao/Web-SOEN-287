<?php
require('connectionFile.php');
if(isset($_SESSION['user'])){
	session_destroy();
	header('Location: index.php');
}
else{
	$user = $_POST['username'];
	$pass = $_POST['pw'];
	$type = $_POST['type'];

	//search for user and check if username matches with its respective password
	$sql = $con->prepare(
	  "SELECT firstName, lastName FROM ".$_SESSION['tableName']." WHERE username = ? && password = ? && type = ?");
	$sql->bind_param( "sss", $user, $pass, $type);
	$sql->execute();
	$sql->bind_result($fName, $lName);
	$sql->fetch();
	$sql->close();

	if(!empty($fName)){
		$_SESSION['user'] = $user;
		$_SESSION['type'] = $type;
		header('Location: index.php');
	}			
	else{
		$_SESSION['errorMsg'] = "User does not exist or Username/Password are incorrect";
		header('Location: loginPage.php');
	}
}
?>