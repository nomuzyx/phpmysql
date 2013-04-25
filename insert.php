<?php
include 'mysqlcon.php';
$code = mysql_real_escape_string($_POST["code"]);
$name = mysql_real_escape_string($_POST["name"]);

  $sql="INSERT INTO staff (code, name)
	VALUES
	('$code','$name')";

	if (!mysqli_query($con,$sql))
			{
 			die('Error: ' . mysqli_error($con));
 			}
	echo "1 record added";	

mysqli_close($con);

header('Location: index.php');
?>