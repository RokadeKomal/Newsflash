<?php 
	include_once'login_details.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>News Flash</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
	<form method="post" action="login_details.php" enctype="multipart/form-data">
	    	<h1>LOGIN</h1>
		<div class="input">
			<i class="fa fa-fw fa-user icon"></i>User Name :<input type="text" name="name" placeholder="Enter Your Name" required>
		</div>
		<div class="input">
			<i class="fa fa-fw fa-key icon"></i>Password :<input type="password" name="password" placeholder="Enter Your Password" required>
		</div>
		<button class="button" name="login"><b>Login</b></button>
	</form>
</div>
</body>
</html>

