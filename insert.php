<?php
include 'mysqlcon.php';
  $sql="INSERT INTO staff (code, name)
	VALUES
	('$_POST[code]','$_POST[name]')";

	if (!mysqli_query($con,$sql))
			{
 			die('Error: ' . mysqli_error($con));
 			}
	echo "1 record added";	

mysqli_close($con);
?>