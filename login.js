function validation(){
	username = document.getElementById("username").value;
	password = document.getElementById("pw").value;
	valid = false;
	errorMsg = "";
	if(username == "" ){
		errorMsg = "Username cannot be blank";
		document.getElementById("username").focus();
	}
	if(password == ""){
		errorMsg += "\nPassword cannot be blank";
		document.getElementById("pw").focus();
	}	
	else
		valid = true;
	
	if(!valid)
		alert(errorMsg);
	return valid;
}