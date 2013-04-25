
<?php
include 'mysqlcon.php';

		$sql="UPDATE staff SET code='$_POST[code]',name='$_POST[name]' WHERE code='$_POST[code]'";
		if (!mysqli_query($con,$sql))
  			{
  			die('Error: ' . mysqli_error($con));
  			}
  		echo "1 record Updated";	

mysqli_close($con);
?>