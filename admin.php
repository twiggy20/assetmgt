<?php
	include('connect.php');
	include('View_admin.php');

	if(isset($_POST['submit2'])){
		$id=$_POST['id'];
		echo "$id";
		$sql1="DELETE FROM register WHERE id=$id";
		if ($id!='') {
			$connect->query($sql1);
			header('location:View.php');
		}
	}
	if (isset($_POST['submit1'])) {
		$assets=$_POST['assets'];
		$category=$_POST['category'];
		$quantity=$_POST['quantity'];

		$sql2="INSERT INTO assets (assets,category,quantity) VALUES ('$assets', '$category', '$quantity')";
		$connect->query($sql2);
		header('location:./admin.php');
	}
?>
