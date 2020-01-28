<?php 
	//echo"<link rel='stylesheet' type='text/css' href='css/table.css'>";
	echo"<link rel='stylesheet' type='text/css' href='css/asset.css'>";
	include ('./connect.php');
	include('./blank.html');                                                                    

	if (isset($_SESSION['user'])) {
		$username = $_POST['username'];
	
	
	$sql="SELECT * FROM requests";
	$result=$connect->query($sql);

	if ($result->num_rows > 0){
		echo "<table>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo"<th>Assets</th>";
			echo"<th>Cetegory</th>";
			echo "<th>Quantity</th>";
			
		echo "</tr>";
		while($row = $result->fetch_array()){
			echo "<tr>";
				echo "<td>" .$row['id']."</td>";
				echo "<td>".$row['assets'] ."</td>";
				echo "<td>".$row['category'] ."</td>";
				echo "<td>".$row['quantity']."</td>";
				
				
			echo "<tr>";
		}
		echo"</table>";
	}
	}
 ?>
	
	
