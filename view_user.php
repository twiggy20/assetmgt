<?php 
	//echo"<link rel='stylesheet' type='text/css' href='css/table.css'>";
	echo"<link rel='stylesheet' type='text/css' href='css/asset.css'>";
	include ('./connect.php');
	include('./blank.html');
	
	$sql="SELECT Username,Asset,Category,Quantity FROM register";
	$result=$connect->query($sql);

	if ($result->num_rows > 0){
		echo "<table>";
			echo "<tr>";
			echo"<th>First-Name</th>";
			echo"<th>Last-Name</th>";
			echo"<th>Department</th>";
			
		echo "</tr>";
		while($row = $result->fetch_array()){
			echo "<tr>";
				echo "<td>" .$row['Fname']."</td>";
				echo "<td>".$row['Lname'] ."</td>";
				echo "<td>".$row['Uname'] ."</td>";
				echo "<td>".$row['Dept']."</td>";
			echo "<tr>";
		}
		echo"</table>";
	}
?>