<?php
// include database connection file
include_once("../setting/config.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$alamat=$_POST['address'];
    $no_phone=$_POST['phone'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE user SET username='$username',password='$password',address='$alamat',phone='$no_phone' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: ../user.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM user WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$username = $user_data['username'];
	$password = $user_data['password'];
	$alamat = $user_data['address'];
    $no_phone = $user_data['phone'];
}
?>
<html>
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="../user.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="name" value=<?php echo $username;?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="email" value=<?php echo $password;?>></td>
			</tr>
			<tr> 
				<td>Alamat</td>
				<td><input type="text" name="mobile" value=<?php echo $alamat;?>></td>
			</tr>
            <tr> 
				<td>Phone</td>
				<td><input type="text" name="mobile" value=<?php echo $no_phone;?>></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>