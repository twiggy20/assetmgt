<?php 
	//echo"<link rel='stylesheet' type='text/css' href='css/table.css'>";
	echo"<link rel='stylesheet' type='text/css' href='css/asset.css'>";
	include ('./connect.php');
	include('./blank.html');

	if(isset($_GET["id"])){
		$iden=$_GET["id"];
		$sql="DELETE FROM assets WHERE id=$iden";
		$connect->query($sql);
	}
	
	$sql="SELECT * FROM assets";
	$result=$connect->query($sql);

	if ($result->num_rows > 0){
		echo "<table>";
			echo "<tr>";
			echo "<th>ID</th>";
			echo"<th>Assets</th>";
			echo"<th>Cetegory</th>";
			echo "<th>Quantity</th>";
			echo "<th colspan='2'>Operations</th>";
			
		echo "</tr>";
		while($row = $result->fetch_array()){
			echo "<tr>";
				echo "<td>" .$row['id']."</td>";
				echo "<td>".$row['assets'] ."</td>";
				echo "<td>".$row['category'] ."</td>";
				echo "<td>".$row['quantity']."</td>";
				echo"<td><button onclick=deleteRecord(".$row["id"].")>Delete</button></td>";
				
			echo "<tr>";
		}
		echo"</table><br><br>";
	}
		echo "
			<form method='POST' action='admin.php' class='form2'>	
				<input type='text' name='assets' placeholder='Assets' required><br>
				<input type='text' name='category' placeholder=Category required><br>
				<input type='text' name='quantity' placeholder=Quantity required><br>
				<input type='submit' name='submit1' value='Add New Asset'><br>
				</form>
				</div>";

 ?>
	                
		<script >
			function  deleteRecord(id){
				window.locaton.href="./View_admin.php?id"+id ;
			}
		</script>