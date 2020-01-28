<?php
	$servername="localhost";
	$username="root";
	$password="";
	$database="assetmgt";

	$connect=mysqli_connect($servername,$username,$password,$database);


if(!$connect){
	die("connection error".mysqli_connect_error());
	
// }
// else{
echo "connection succesful";
 }
?>