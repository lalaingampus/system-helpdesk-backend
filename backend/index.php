<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/login/login.css">
</head>
<body>
<title>Helpdesk Ticketing</title>
<div class="container">	
	<div class="col-md-6">                    
		<div class="panel panel-info">
			<div class="panel-heading">
				<div class="panel-title">HELPDESK <span class="panel-span">TICKETING</span></div>                        
			</div>
			<?php
    			require_once("setting/config.php");

					if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "gagal"){
							echo "Login gagal! username dan password salah!";
       				 }
					}
			?>
			<!-- Panel Body -->
			<div class="panel-body" >
				<div class="logo"><img src="assets/login/assets/images/ic_laptop.png"></div>  
				<div class="text-logo">Helpdesk Login</div>
				<div class="text-logo-p">Enter your active credential</div>
				
			<form method="post" action="users/cek_login.php">
				<div class="form__group field">
					<input type="input" class="form__field" placeholder="Name" name="username" id='username' required />
					<label for="name" class="form__label">Username</label>
				  </div>
				<div class="form__group field">
					<input type="password" class="form__field" placeholder="Password" name="password" id='password' required />
					<label for="password" class="form__label">Password</label>
				  </div>
				
				  <!-- Button -->
				  
					<div class="info">Don't have an account ?<a href="users/register.php" class="info-p">Sign Up</a></div>                        
					<div class="btn">
							<input type="submit" value="Login">
					</div>  
					<div class="forgot"><a href="users/forgot_password.php" class="forget-p">Forgot Password</a></div>  
			</form>
			</div>
					</div>	
			</div>                     
		</div>  
	</div>
</div>	
</body>
</html>
