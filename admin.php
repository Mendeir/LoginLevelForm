<?php session_start();  ?>
<!DOCTYPE html>
<html>
<head>
	<style>
		table, th, td {
  			border:1px solid black;
  			width: 50%;
		}
	</style>
	<meta charset="utf-8">
	<title>Admin</title>
</head>
<body>
	<?php //include_once("db/db_connection.php") 

	 	$username = $_SESSION['username'];
        $password = $_SESSION['password'];

	?>
	<center>
		<h1>Admin</h1>
		<table>
			
			<tr>
				<th>username</th>
				<td><?php echo $username ?></td>
			</tr>

			<tr>
				<th>password</th>
				<td><?php echo $password ?></td>
			</tr>



		</table>
		<a href="logout.php">Logout</a>
		<br>
		<a href="view_records.php">View Records</a>
		<br>
		<?php
		include("upload.php")
		?>
	</center>
</body>
</html>