<?php
	include('./connect.php');

	$uname=$_POST["Username"];
	$asset=$_POST["Asset"];
	$Carte=$_POST["Category"];
	$Quantity=$_POST["Quantity"];

	// if ($Uname=''||$asset=''||$Carte='' || $Quantity='' ){
	// 	//echo "Password mismatch";
	// 	header('Location:./hod.html');
	// }
	// else{
	$sql="INSERT INTO requests (Username,Assets,Category,Quantity) VALUES ('$uname', '$asset', '$Carte', '$Quantity')";

	header('Location:./request.html');

	$connect->query($sql);

	// var_dump($sql);
}
?>