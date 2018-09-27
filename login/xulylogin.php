<?php
	session_start();
	$_SESSION['User'] = $_POST['txtUser'];

	if( isset($_SESSION['User']) &&
		isset($_POST['txtPass']) &&
		$_SESSION['User'] == 'admin' &&
		$_POST['txtPass'] == '111111'
	  ){
	 //  	if( isset($_POST['chkRemember']) &&
	 //  		$_POST['chkRemember'] == 'yes'){
		// 		setcookie('RememberMe', $_POST['txtUser'], time()+160);
		// }
	  	header('Location: home.php');
	}

	else{ header('location: login.php'); }


?>