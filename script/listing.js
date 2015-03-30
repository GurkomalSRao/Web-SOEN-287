function validate() {
	var number = document.getElementById("price").value;
	var title = document.getElementById("title").value;
	var address = document.getElementById("address").value;
	var city = document.getElementById("city").value;
	var postalCode = document.getElementById("postalCode").value;
	var msg = "";
	var valid = false;

	if (title == "") { 
		msg = "Title cannot be blank";
		document.getElementById("title").focus();
	}
	else if (!address.match(/\d+\s\w+\s*\w*/)) { 
		msg = "Invalid Address. input a valid address such as 2425 Stanley";
		document.getElementById("address").focus();
	}
	else if (!city.match(/^[A-Za-z]+$/)) {
		msg = "Invalid City";
		document.getElementById("city").focus();
	}
	else if (!postalCode.match(/^[A-Za-z]\d[A-Za-z](\s|-|)\d[A-Za-z]\d$/)) { 
		msg = "Invalid Postal Code";
		document.getElementById("postalCode").focus();
	}
	else if (!number.match(/^\d+$/)) { 
		msg = "Only numeric values are allowed for price";
		document.getElementById("price").focus();
	}
	else
		valid = true;

	if(!valid)
		alert(msg);
	return valid;
}