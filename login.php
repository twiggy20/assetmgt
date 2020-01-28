<?php 
	session_start();
	include './connect.php';

	$username = $_POST['username'];
	$pass = $_POST['pwrd'];

	

	$sql = "SELECT * FROM register WHERE Username ='$username'";

	$result = $connect->query($sql);
	echo $connect->error;

	if($result->num_rows>0){
		$rows=$result->fetch_assoc();

		if ($pass == $rows['Password']) {
			$_SESSION['user'] = $username;
			header('Location:./hod.html');
		}
		else{
			
			header('Location:./login.html');
		}
	}
	else{
		header('Location:./login.html');
	}
?>