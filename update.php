
<?php
$con=mysqli_connect("localhost","root","","testdb");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

		$sql="UPDATE staff SET code='$_POST[code]',name='$_POST[name]' WHERE code='$_POST[code]'";
		if (!mysqli_query($con,$sql))
  			{
  			die('Error: ' . mysqli_error($con));
  			}
  		echo "1 record Updated";	

mysqli_close($con);
?>