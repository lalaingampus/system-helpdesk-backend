<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="../assets/forgot-password/style.css">
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
				<div class="logo"><img src="../assets/forgot-password/assets/images/ic_laptop.png"></div>  
				<div class="text-logo">Forgot Password</div>
				<div class="text-logo-p">Enter Your username for reset</div>
                <?php
    			require_once("../setting/config.php");

					if(isset($_GET['pesan'])){
						if($_GET['pesan'] == "gagal"){
							echo "Email tidak ditemukan!";
       				 }
					}
			    ?>
                <form action="post" method="cek_username.php">
                  <div class="form__group field">
					<input type="input" class="form__field" placeholder="username" name="username" id='username' required />
					<label for="username" class="form__label">Username</label>
				  </div>
				
				  <!-- Button -->
				  
					<div class="info">Back to Login</div>                        
                    <div class="btn">
							<input type="submit" value="Send">
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
</body>
</html>
