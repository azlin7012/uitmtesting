<!DOCTYPE html>
<html lang="en">
	<head>
		<title>
			SYSTEM MAINTAINANCE INFOTECH UITM
		</title>
		<meta charset="UTF-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" >
	</head>
	<body>
		<div class="container">
			<div class="login-box" >
			<div class="row">
				<div class="col-lg-7 m-auto text-black mt-5">
					<h2 class="text-center py-2">LOGIN</h2>
					<?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>
 
 
                    <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>
					<form class="form-group" action="../controller/controller.php?mod=login" method="post">
					<div class="form-group"><label>Username</label>
						<input type="text" name="u" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="form-group" >Login</button>
					<p class="message">For Admin only <a href="#">Login</a></p>
					</form>

					<form class="login-admin" action="../controller/controller.php?mod=loginadmin" method="post">
						<div class="login-admin"><label>Username</label>
						<input type="text" name="user" class="form-control" required>
					</div>
					<div class="login-admin">
						<label>Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="form-group" >Login</button>
					<p class="message">Not Admin <a href="#">Back</a></p>
					</form>
				</div>
			</div>
			</div>
		</div>
		<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
		<script> 
			$('.message a').click(function(){
			$('.login-admin').animate({height: "toggle", opacity: "toggle"},"slow");});
		</script>
	</body>
</html>