<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login</title>
	<link rel="stylesheet" href="">
	<style type="text/css" media="screen">
		.content{
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="content">
		<form action="xulylogin.php" method="POST" accept-charset="utf-8">
			<label>Username: <input type="text" name="txtUser" value=""></label><br/><br/>
			<label>Password: <input type="password" name="txtPass" value=""></label><br/>
			<input type="checkbox" name="chkRemember" value="yes"> Remember me!<br/>
			<input type="submit" name="" value="Login">
		</form>
	</div>
</body>
</html>