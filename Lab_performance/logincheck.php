<?php
	
	session_start();

	include('../service/functions.php');
	//include_once('db.php');
	//require('db.php');
	//require_once('db.php');

	if(isset($_POST['submit'])){

		$userid = $_POST['userid'];
		$password = $_POST['password'];
			
		$user = validate($userid, $password);

		if(count($user) > 0 ){
			$_SESSION['user'] = $user;
			//echo "test";
			header("location: login.php);
		}else{
			echo "invalid username/password";
		}
	}	

?>