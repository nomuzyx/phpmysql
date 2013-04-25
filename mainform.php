<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>
<body>
<?php
include 'mysqlcon.php';

$result = mysqli_query($con,"SELECT * FROM staff");

echo '<div class="row" style="margin:2%">
      	<div class="span1 offset5">
      		<a href="entryform.php?addedit=Add">Add</a>
	  	</div>
	  	<div class="span6">
      		
	  	</div>
	  </div>';

echo '<div class="row" style="margin:2%">
		<div class="span6">
			<table class="table table-striped table-bordered">
			<tr>
			<th>Code</th>
			<th>Name</th>
			<th>Action</th>
			</tr>
		</div>
		<div class="span6">
      		
	  	</div>	
	  </div> 	
';

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['code'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo '<td><a href="entryform.php?mcode='.$row['code'].'&addedit='."Edit".'">Edit</a></td>';
  echo '<td><a href="delete.php?mcode='.$row['code'].'">Delete</a> </td>';
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>
</body>
</html>