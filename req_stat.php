<?php 
	//echo"<link rel='stylesheet' type='text/css' href='css/table.css'>";
	echo"<link rel='stylesheet' type='text/css' href='css/asset.css'>";
	include ('./connect.php');
	include('./blank.html');

	// if(isset($_GET["id"])){
	// 	$iden=$_GET["id"];
	// 	$sql="DELETE FROM assets WHERE id=$iden";
	// 	$connect->query($sql);
	// }
	
	$sql="SELECT Username,Asset,Category,Quantity FROM requests";
	$result=$connect->query($sql);

	if ($result->num_rows > 0){
		echo "<table>";
			echo "<tr>";
			echo "<th>Username</th>";
			echo"<th>Asset</th>";
			echo"<th>Cetegory</th>";
			echo "<th>Quantity</th>";
			echo "<th colspan='2'>Operations</th>";
			
		echo "</tr>";
		while($row = $result->fetch_array()){
			echo "<tr>";
				echo "<td>" .$row['Username']."</td>";
				echo "<td>".$row['Asset'] ."</td>";
				echo "<td>".$row['Category'] ."</td>";
				echo "<td>".$row['Quantity']."</td>";
				echo"<td><button >Delete</button></td>";
				
			echo "<tr>";
		}
		echo"</table>";
	}
	// echo "</form>";
	// 	echo "
	// 		<div class='tab'>
	// 		<form method='POST' action='admin.php' class'form1'>
	// 		<input type='text' name='id' placeholder='Enter ID to delete' required><br>
	// 		<input type='submit' name='submit2' value='Delete'>
	// 		</form>
			
	// 		<form method='POST'action ='admin.php' class='form2'>	
	// 			<input type='text' name='assets' placeholder='Assets' required><br>
	// 			<input type='text' name='category' placeholder=Category required><br>
	// 			<input type='text' name='quantity' placeholder=Quantity required><br>
	// 			<input type='submit' name='submit1' value='Add New Record'><br>
	// 			</form>
	// 			</div>";

 ?>