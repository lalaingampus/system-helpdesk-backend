<html>
<head>
	<title>Add Users</title>
</head>
 
<body>
	<a href="index.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
		<table width="25%" border="0">
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>username</td>
				<td><input type="text" name="username"></td>
			</tr>
            <tr> 
				<td>password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	</form>
	
	<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// include database connection file
		include_once("setting/config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO tbl_login(email,username,password) VALUES('$email','$username','$password')");
		
		// Show message when user added
		echo "User added successfully. <a href='admin/user.php'>View Users</a>";
	}
	?>
</body>
</html>