<?php
session_start();
include "2conn.php";
if (isset($_POST['uname']) && isset($_POST['password'])){
	function validate($data){
		$data = trim($data);
				$data = stripslashes($data);
				$data = htmlspecialchars($data);
				return $data;
	}
	$uname=validate($_POST['uname']);
	$pass=validate($_POST['password']);
	
	if(empty($uname)){
		header("location: 2index.php?error=UserName is required");
	    exit();
	}else if(empty($pass)){
		header("location: 2index.php?error=password is required");
	    exit();
	}else{
	$sql = "SELECT * FROM login2 WHERE username='$uname' AND password='$pass'";
	
	$result= mysqli_query($conn,$sql);
	
	if(mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['username'] === $uname && $row['password'] === $pass) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['name'] = $row['name'];
			$_SESSION['id'] = $row['id'];
			header("location: 2home.php");
			exit();
			}else{
				header("location: 2index.php?error=incorrect username or password");
				exit();
			}
	}else{
		header("location: 2index.php?error=incorrect username or password");
		exit();
	}
	
	}
}else{
	header("location: 2index.php");
	exit();
}