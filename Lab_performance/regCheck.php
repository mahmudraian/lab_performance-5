<?php


	if(isset($_POST['submit'])){
		$username = $_POST['name'];
		$password = $_POST['password'];
		$Id = $_POST['Id'];
		$type = $_POST['type'];

		$con = mysqli_connect('127.0.0.1', 'root', '', 'webtech');
/*
		$sql2 = "select username from users where username='{$username}'";
		$result = mysqli_query($con, $sql2);
		$row = mysqli_fetch_assoc($result);
		if($row[]){
		}*/

		$sql = "insert into users values('','{$name}','{$password}','{$Id}', '{$type}')";
		if(mysqli_query($con, $sql)){
			echo "Registration done!";
		}else{
			echo "Error";
		}
	}
	


