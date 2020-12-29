function validateContact() {
	var name = document.getElementById("txtFullName").value;
	var phone = document.getElementById("txtPhone").value;
	var email = document.getElementById("txtEmail").value;
	var address = document.getElementById("txtAddress").value;
	var content = document.getElementById("txtContent").value;
	
	var reEmail = /^([a-zA-z0-9])+\@+([a-zA-z])+\.+([a-z]{2,3})$/;
	var rePhone = /^([0-9]{10,11})$/;

	var status = true;

	if (name == "") {
		document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtFullName").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgNote").innerHTML ="";
		document.getElementById("txtFullName").style.borderColor = "#ced4da";
	}

	if (phone == "") {
		status = false;
		document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtPhone").style.borderColor = "red";
	} else {
		if (rePhone.test(phone) == false) {
			status = false;
			document.getElementById("msgNote").innerHTML ="không đúng định dạnh số điện thoại!";
			document.getElementById("txtPhone").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtPhone").style.borderColor = "#ced4da";
		}
	}

	if (email == "") {
		status = false;
		document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtEmail").style.borderColor = "red";
	} else {
		if (reEmail.test(email) == false) {
			status = false;
			document.getElementById("msgNote").innerHTML ="Email không đúng định dạng!";
			document.getElementById("txtEmail").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtEmail").style.borderColor = "#ced4da";
		}	
	}

	if (address == "") {
		status = false;
		document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtAddress").style.borderColor = "red";
	} else {
		document.getElementById("msgNote").innerHTML ="";
		document.getElementById("txtAddress").style.borderColor = "#ced4da";
	}
	if (content == "") {
		status = false;
		document.getElementById("msgNote").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtContent").style.borderColor = "red";
	} else {
		document.getElementById("msgNote").innerHTML ="";
		document.getElementById("txtContent").style.borderColor = "#ced4da";
	}
	return status;
}