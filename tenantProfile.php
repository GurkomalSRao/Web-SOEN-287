<?php
require('connectionFile.php');
$pets = $_POST['pets'];
$age = $_POST['age'];
$schooling = $_POST['occupationSchool'];
$work = $_POST['occupationWork'];
$income = $_POST['income'];
$smoker = $_POST['smoker'];

//check for old user profile
$sql3 = $con->prepare(
  "SELECT id FROM tenantprofile WHERE username = ?");
$sql3->bind_param( "s", $_SESSION['user']);
$sql3->execute();
$sql3->bind_result($userDouble);
$sql3->fetch();
$sql3->close();

if(!empty($userDouble)){
	//Update old user information rather than insert
	$sql4 = $con->prepare("UPDATE tenantprofile SET pets = ?, smoker = ?, age = ?,  
							education = ?, work = ?, income = ?  WHERE id = ?");
	$sql4->bind_param('ssssssi',$pets, $smoker, $age, $schooling, $work, $income, $userDouble);
	$sql4->execute(); 
	$sql4->close();
}
else{
	//get user id
	$sql1 = $con->prepare(
	  "SELECT id FROM ".$_SESSION['tableName']." WHERE username = ?");
	$sql1->bind_param( "s", $_SESSION['user']);
	$sql1->execute();
	$sql1->bind_result($userID);
	$sql1->fetch();
	$sql1->close();

	//New user profile
	$sql2 = "INSERT INTO tenantprofile (id, username, pets, smoker, age, education, work, income)
	VALUES ('".$userID."', '".$_SESSION['user']."', '".$pets."','".$smoker."','".$age."','".$schooling."','".$work."','".$income."')";

	if ($con->query($sql2) === FALSE) 
		echo "Error: " . $sql2 . "<br>" . $con->error;
	$_SESSION['created'] = true;
}
header('Location: tenantProfilePage.php');
?>