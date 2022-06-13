<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/register/signup.css">
</head>
<body>
<title>Helpdesk Ticketing</title>
<div class="container">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">HELPDESK <span class="panel-span">TICKETING</span></div>                        
			</div>

			<!-- Panel Body -->
			<div class="panel-body" >
				<div class="logo"><img src="../assets/register/assets/images/ic_laptop.png"></div>  
				<div class="text-logo">Helpdesk Registration</div>
				<div class="text-logo-p">Enter your full data detail</div>

				<form method="post" action="register.php">
				<div class="form__group field">
					<input type="input" class="form__field" placeholder="Email" name="email" id='email' required />
					<label for="email" class="form__label">E-mail</label>
				  </div>
                  <div class="form__group field">
					<input type="input" class="form__field" placeholder="username" name="username" id='username' required />
					<label for="username" class="form__label">Username</label>
				  </div>
				<div class="form__group field">
					<input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
					<label for="password" class="form__label">Password</label>
				  </div>
				
				  <!-- Button -->
				  
					<div class="info">Already have an account ?<a href="../index.php" class="info-p">Login</a></div>                        
					<div class="btn">
							<input type="submit" name="Submit" value="Register">
					</div> 
				</form>  
			
			</div>
					<!-- <div class="form-group">                               
						<div class="col-sm-12 controls">
						  <input type="submit" name="login" value="Login" class="btn btn-success">						  
						</div>						
					</div>	 -->
					</div>	
			</div>                     
		</div>  
	</div>
</div>	
<?php
 
	// Check If form submitted, insert form data into users table.
	if(isset($_POST['Submit'])) {
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		// include database connection file
		include_once("../setting/config.php");
				
		// Insert user data into table

		$sql = "INSERT INTO tbl_login(email, username, password) VALUES('$email','$username','$password')";
		$result = mysqli_query($mysqli,$sql) or die (mysqli_error($mysqli));
		
		echo "User add successfully. <a href='../admin/user.php'>View Users</a>";
		
	}
	?>
</body>
</html>
