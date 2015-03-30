<?php
/*-----------------------------------------------------------------
			FUNCTION - CREATES NAGIVATION BAR FOR ALL PAGES
------------------------------------------------------------------*/
function createNavBar(){ 
	if (isset($_SESSION['user'])) {
		echo '<li><a href="login.php">Logout</a></li>';
		if($_SESSION['type'] == "tenant"){
			echo '<li><a href="tenantProfilePage.php">Tenant\'s Profile</a></li>';
			echo '<li><a href="tenantRentalPreferencePage.php">Tenant\'s Rental Preferences</a></li>';	
		}
		else if($_SESSION['type'] == "owner"){ //just in case additional users are created
			echo '<li><a href="ownerTenantSelectionPage.php">Owner\'s Tenant Selection</a></li>';
			echo '<li><a href="listingPropertiesForRentPage.php">Listing Properties For Rent</a></li>';
		}
	}
	else {
		echo '<li><a href="loginPage.php">Login</a></li>';
		echo '<li><a href="registrationPage.php">Register</a></li>';
	}
}
/*-----------------------------------------------------------------
					FUNCTION - CREATE FOOTER
------------------------------------------------------------------*/
function footer(){
	echo '<footer>
		<center>
		  <p>Copyright &copy Concordia Rental Market 2015</p>
		  <p>Contact information: <a href="mailto:randomemail@gmail.com">randomemail@gmail.com</a></p>
		</center>
	</footer>';
}

/*-----------------------------------------------------------------
		FUNCTION - ERROR MESSAGES FOR LOGIN & REGISTRATION
------------------------------------------------------------------*/
function errorMsg(){
	echo '<td colspan="2" style="color:red;">'.$_SESSION['errorMsg'].'</td>';
	unset($_SESSION['errorMsg']);
}

/*-----------------------------------------------------------------
				FUNCTION - DISPLAY PROFILE OPTIONS
------------------------------------------------------------------*/
function display($user){
	$userArray = array();
	$i = 0;
	$sql = $con->prepare("SELECT * FROM tenantprofile WHERE username = ?");
	$sql->bind_param( "s", $_SESSION['user']);
	$sql->execute();
	$result = $sql->get_result();
	while($userArray = $result->fetch_assoc()){
		echo $userArray['username'];
	}
	
	$sql->close();
	exit;
	
	echo '<td></td>';
}
?>