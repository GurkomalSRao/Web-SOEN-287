function validation(){
	firstName = document.getElementById("fname").value;
	lastName = document.getElementById("lname").value;
	phoneNumber = document.getElementById("phone1").value+document.getElementById("phone2").value+document.getElementById("phone3").value;
	email = document.getElementById("email").value;
	username = document.getElementById("username").value;
	pw1 = document.getElementById("pw1").value;
	pw2 = document.getElementById("pw2").value;
	valid = false;
	errorMsg = "";
	if(firstName == "" || lastName == "" || phoneNumber == "" || email == "" || username == "" || pw1 == "" || pw2 == ""){
		errorMsg = "Complete All Fields. No Field should be Empty";
	}
	else
	{
		if(!/^([A-Za-z]|-)*$/.test(firstName) || !/^([A-Za-z]|-)*$/.test(lastName)){
			errorMsg = "First Name and Last Name can only contain letters and hyphens";
		}
		else if(!/^\d+$/.test(phoneNumber)){
			errorMsg = "Invalid Phone Number";
			document.getElementById("phone1").focus();
		}
		else if(!/^\w+@\w+\.\w+$/.test(email)){
			errorMsg = "Invalid Email";
			document.getElementById("email").focus();
		}
		else if(!/^([0-9]|[A-Za-z]){6,}$/.test(username)){
			errorMsg = "Login Name must be at least 6 characters long and must contain only letter and number";
			document.getElementById("username").focus();
		}
		else if(!/([A-Za-z]+[0-9]+)|([0-9]+[A-Za-z]+)/.test(pw1) && pw1.length > 6){
			errorMsg = "Invalid Password";
			document.getElementById("pw1").focus();
		}
		else if (pw1 != pw2){
			errorMsg = "Passwords do not match";
			document.getElementById("pw2").focus();
		}
		else
			valid = true;
	}	

	if(errorMsg != "")
		alert(errorMsg);
	return valid;
}