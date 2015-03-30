<?php
require('connectionFile.php');
$fName = $_POST['fname'];
$lName = $_POST['lname'];
$phoneNumber = "(".$_POST['phone1'].")".$_POST['phone2']."-".$_POST['phone3'];
$email = $_POST['email'];
$userName = $_POST['username'];
$pass = $_POST['pw1'];
$type = $_POST['type'];

//check if username exist
$sql1 = $con->prepare(
  "SELECT username FROM ".$_SESSION['tableName']." WHERE username = ?");
$sql1->bind_param( "s", $userName);
$sql1->execute();
$sql1->bind_result($userDouble);
$sql1->fetch();
$sql1->close();


//check if email exist
$sql2 = $con->prepare(
  "SELECT username FROM ".$_SESSION['tableName']." WHERE email = ?");
$sql2->bind_param( "s", $email);
$sql2->execute();
$sql2->bind_result($userEmailDouble);
$sql2->fetch();
$sql2->close();

if(!empty($userEmailDouble || !empty($userDouble))){
	if(!empty($userEmailDouble))
		$_SESSION['errorMsg'] = "the email address".$email." is already in use";
	if(!empty($userDouble))
		$_SESSION['errorMsg'] = $_SESSION['errorMsg']."<br>The username ".$userName." is already in use";
	header('Location: registrationPage.php');
}
else{
//User does not exist, create user
$sql2 = "INSERT INTO ".$_SESSION['tableName']." (firstName, lastName, phoneNumber, email, username, password, type)
VALUES ('".$fName."', '".$lName."', '".$phoneNumber."','".$email."','".$userName."','".$pass."','".$type."')";

if ($con->query($sql2) === FALSE) 
	echo "Error: " . $sql2 . "<br>" . $con->error;

$_SESSION['user'] = $userName;
$_SESSION['type'] = $type;
header('Location: index.php');
}
?>