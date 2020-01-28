
 <?php 

 	session_start();
	//echo"<link rel='stylesheet' type='text/css' href='css/table.css'>";
	echo"<link rel='stylesheet' type='text/css' href='css/asset.css'>";
	include ('./connect.php');
	include('./blank.html');

	
	
	$username = $_SESSION['user'];
	$sql="SELECT Fname,Lname,Dept FROM register WHERE Username ='$username'" ;
	$result=$connect->query($sql);



	if ($result->num_rows > 0){
		// echo "<table>";
		// 	echo "<tr>";
		// 	echo"<td>First-Name</td>";
		// 	echo "<tr>";
		// 	echo"<th>Last-Name</th>";
		// 	echo "<tr>";
		// 	echo"<th>Department</th>";
			
		// echo "</tr>";
		while($row = $result->fetch_array()){
			// echo "<tr>";
			// 	echo "<td>" .$row['Fname']."</td>";
			// 	echo "<td>".$row['Lname'] ."</td>";
			// 	echo "<td>".$row['Dept']."</td>";
			// echo "<tr>";

			echo $_SESSION['user']."<br>";
			echo "First-Name : ".$row['Fname'];
		}
		// echo"</table>";
	}
?>