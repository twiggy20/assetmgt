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
	
	$sql="SELECT * FROM assets";
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
	<!-- <script type="text/javascript" src="https://cdnjs.cloudfilare.com/ajax/libs/jquery/3.4.1/jqery.min.js"></script>
	<script >
		function deleteRecord(id){
			window.location.href="./View.php?id="+id;
		}
	</script>
 -->
	
