function validation(){
	var username = document.getElementById("username").value;
	var password = document.getElementById("pw").value;
	var valid = false;
	var errorMsg = "";
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