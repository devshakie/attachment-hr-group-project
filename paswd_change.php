
<!DOCTYPE html>
<html>
<head>
	<title>Change Password</title>
	<script>
        window.onload = function() {
	document.getElementById("changepassword").onsubmit = function() {
		var oldpassword = document.getElementById("oldpassword").value;
		var newpassword = document.getElementById("newpassword").value;
		var confirmpassword = document.getElementById("confirmpassword").value;

		if (newpassword != confirmpassword) {
			alert("New password and confirm password do not match!");
			return false;
		}

		// Encrypt password with SHA-256 hash function
		var sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(oldpassword);
		var hashedOldPassword = sha256.getHash("HEX");
		sha256 = new jsSHA("SHA-256", "TEXT");
		sha256.update(newpassword);
		var hashedNewPassword = sha256.getHash("HEX");

		// Store hashed passwords in hidden input fields
		document.getElementById("oldpassword").value = hashedOldPassword;
		document.getElementById("newpassword").value = hashedNewPassword;
		document.getElementById("confirmpassword").value = hashedNewPassword;

		return true;
	};
};
    </script>
</head>
<body>
	<form id="changepassword" method="post" action="update_paswd.php?employee_id=1">
		<label for="oldpassword">Old Password:</label>
		<input type="password" id="oldpassword" name="oldpassword" required><br>
		<label for="newpassword">New Password:</label>
		<input type="password" id="newpassword" name="newpassword" required><br>
		<label for="confirmpassword">Confirm New Password:</label>
		<input type="password" id="confirmpassword" name="confirmpassword" required><br>
		<input type="submit" value="Change Password">
        
	</form>
</body>
</html>