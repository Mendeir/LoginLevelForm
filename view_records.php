<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td {
  			border:1px solid black;
		}
		
	</style>
	<meta charset="utf-8">
	<title></title>
	<!--<link rel = "stylesheet" type = "text/css" href="css/record_style.css">-->

</head>
<body>
	<?php include_once("db/db_connection.php") ?>

	<center>
	<h1> All Records</h1>

		<table class="container">
			
		<tr>
			<th class="head">ID</th>
			<th class="head">Email</th>
			<th class="head">username</th>
			<th class="head">password</th>
			<th class="head">level</th>
			<th class="head">status</th>
		</tr>
		<?php  

			$sql_command = 'select * from records';

			$result = $connection->query($sql_command);
			if ($result->num_rows > 0) {
	  		// output data of each row
	  			while($row = $result->fetch_assoc()) {
	  				echo "<tr>";
	  					echo "<td>".$row["record_id"]."</td>";
	    		  		echo "<td>".$row["email"]."</td>";
	    		  		echo "<td>".$row["username"]."</td>";
	    		  		echo "<td>".$row["user_password"]."</td>";
	    		  		echo "<td>".$row["user_level"]."</td>";
	    		  		echo "<td>".$row["user_status"]."</td>";
	    		  	echo "</tr>";
	  			}
			} else {
	  			echo "0 results";
			}
			
		?>

		</table>
		<a href="admin.php">Back</a>
	</center>
</body>
</html>