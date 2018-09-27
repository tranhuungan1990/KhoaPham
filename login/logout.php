<?php
	session_start();
	session_destroy();
	setcookie('RememberMe', '', time()-160);
	header('Location: login.php');
?>