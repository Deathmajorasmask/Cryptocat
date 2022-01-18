<?php
    session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title> Login &middot; Cryptocat</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="icon" type="image/png" href="./img/1200px-Cryptocat_logo_new.png" />
<style>
	#instagram {
   		display: flex;
    	justify-content: center;
    	align-items: center;
    	margin: 5px 0 5px 0;
	}

	#instagram img {
    	width: 175px;
	}
</style>
</head>
<body>
<div class="wrapper">
	<section class="form login">
		<div id="instagram">
            <img src="./img/1200px-Cryptocat_logo_new.png" alt="" />
			
        </div>
		<div id="instagram" >
		<img style="width: 300px;" src="./img/1280px-Cryptocat_logo.png" alt="" />
		</div>
		<hr>
		<form method="POST" action="login.php" autocomplete="off">
		<div class="field input">
		<label>Username</label>
		<input type="text" name="username" placeholder="Enter your username" class="form-control" required>
		</div>
		<div class="field input">		
		<label>Password</label>
		<input type="password" name="password" placeholder="Enter your password" class="form-control" required> 
		<i class="fas fa-eye"></i>
		</div>
		<div style="height: 10px;"></div>
		<div class="field button">
		<button type="submit" class="btn btn-primary" style="background-color: #2c8fb2; border-color: #68B7D4;"><span class="glyphicon glyphicon-log-in"></span> Login</button> 
		</div>
		<div class="link">
		No account? <a href="signup.php"> Sign up</a>
		</div>
		</form>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">
			<center>
			<?php
			//error_reporting(E_ERROR | E_PARSE);
				//session_start();
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
		</div>
	</section>
</div>
	<script src="./js/pass-show-hide.js"></script>
</body>
</html>