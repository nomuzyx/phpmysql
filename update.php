
<?php
include 'mysqlcon.php';
$code = mysql_real_escape_string($_POST["code"]);
$name = mysql_real_escape_string($_POST["name"]);

		$sql="UPDATE staff SET code='$code',name='$name' WHERE code='$code'";
		if (!mysqli_query($con,$sql))
  			{
  			die('Error: ' . mysqli_error($con));
  			}
  		echo "1 record Updated";	

mysqli_close($con);
header('Location: index.php');
?>