<?php
include 'mysqlcon.php';
$sql="DELETE FROM staff WHERE code='$_GET[mcode]'";
if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con));
}
echo "Record Deleted";	

mysqli_close($con);

header('Location: index.php');
?>