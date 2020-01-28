<?php
	include('./connect.php');

	$uname=$_POST["Username"];
	$asset=$_POST["Asset"];
	$Carte=$_POST["Category"];
	$Quantity=$_POST["Quantity"];

	$sql = "SELECT Serial_No, Username FROM register WHERE Username ='$uname'";

	$result=$connect->query($sql);
	if ($result->num_rows > 0){
	 	header('Location:./request.html');
		$sql2="INSERT INTO requests (Username,Asset,Category,Quantity) VALUES ('$uname', '$asset', '$Carte', '$Quantity')";
		if($connect->query($sql2)){
			// echo"<script>
			// 	 $.toast({
		 //       	text: 'request successful',
		 //       	bgColor: '#243447',
		 //       	textColor: '#fff',
		 //       	position: 'bottom-right'
		 //      });
			// 	 setTimeout(func, 5000)
		 //       <script>"
				//
		       header('Location:./hod.html');
		}
		else
			header('location:./request.html');
					
	}
	// var_dump($sql);
?>