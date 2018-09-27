<?php
	session_start();
	if(isset($_COOKIE['RememberMe']) || isset($_SESSION['User'])){
		?>
		Đây là trang Home
		<a href="logout.php">Logout</a>
		
<?php }	else header('Location: login.php'); ?>



