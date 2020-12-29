function validateRegistration() {
	var username = document.getElementById("txtUsername").value;
	var password = document.getElementById("txtPassword").value;
	var phone = document.getElementById("txtPhone").value;
	var email = document.getElementById("txtEmail").value;
	var address = document.getElementById("txtAddress").value;
	
	var reEmail = /^([a-zA-z0-9])+\@+([a-zA-z])+\.+([a-z]{2,3})$/;
	var rePhone = /^([0-9]{10,11})$/;
	var rePassword = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[ -/:-@#$%^&*\[-`{-~]).{8,64}$/;

	var status = true;

	if (username == "") {
		document.getElementById("msgUsername").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtUsername").style.borderColor = "red";
		status = false;
	} else {
		document.getElementById("msgUsername").innerHTML ="";
		document.getElementById("txtUsername").style.borderColor = "#ced4da";
	}

	if (phone == "") {
		status = false;
		document.getElementById("msgPhone").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtPhone").style.borderColor = "red";
	} else {
		if (rePhone.test(phone) == false) {
			status = false;
			document.getElementById("msgPhone").innerHTML ="không đúng định dạnh số điện thoại!";
			document.getElementById("txtPhone").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtPhone").style.borderColor = "#ced4da";
		}
	}

	if (email == "") {
		status = false;
		document.getElementById("msgEmail").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtEmail").style.borderColor = "red";
	} else {
		if (reEmail.test(email) == false) {
			status = false;
			document.getElementById("msgEmail").innerHTML ="Email không đúng định dạng!";
			document.getElementById("txtEmail").style.borderColor = "red";
		} else {
			document.getElementById("msgNote").innerHTML ="";
			document.getElementById("txtEmail").style.borderColor = "#ced4da";
		}	
	}

	if (address == "") {
		status = false;
		document.getElementById("msgAddress").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtAddress").style.borderColor = "red";
	} else {
		document.getElementById("msgAddress").innerHTML ="";
		document.getElementById("txtAddress").style.borderColor = "#ced4da";
	}
	if (password == "") {
		status = false;
		document.getElementById("msgPassword").innerHTML ="Yêu cầu không được để trống!";
		document.getElementById("txtPassword").style.borderColor = "red";
	} else {
		if (rePassword.test(password) == false) {
			status = false;
			document.getElementById("msgPassword").innerHTML ="Không đúng định dạng email!";
			document.getElementById("txtPassword").style.borderColor = "red";
		}
		else{
			document.getElementById("msgPassword").innerHTML ="";
			document.getElementById("txtPassword").style.borderColor = "#ced4da";
		}
	}
	return status;
}