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
  $searchtype=$_POST['searchtype'];
  $searchterm=$_POST['searchterm'];

  $searchterm=trim($searchterm);

  if (!$searchtype || !$searchterm)
  {
    echo"You have not entered search details. Please go back and try again.";
    exit;
  }
  
 // if (!get_magic_quotes_gpc())
 // {
    $searchtype= mysql_real_escape_string($searchtype);
    $searchterm= mysql_real_escape_string($searchterm);
 // }

  $qry="SELECT * FROM staff WHERE ".$searchtype." like '%".$searchterm."%'";

  $result = mysqli_query($con,$qry);

?>

<div class="container" style="margin:2%">	
	<div class="row" style="margin:2%">
    		<div class="span5">
    			<a href="search.html">Search</a>  
  	  				&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  	  		<a href="entryform.php?addedit=Add">Add</a>
              &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="index.php">Go Back to Index</a>
  	  		</div>	
  	  		<div class="span7">		
    			
			</div>   	
	</div>

	<div class="row" style="margin:2%">
		<div class="span8">
			<table class="table table-striped table-bordered">
				<tr>
				<th>Code</th>
				<th>Name</th>
				<th>Action</th>
				</tr>
		</div>
		<div class="span4">
      		
	  	</div>	
	</div> 
</div>
<?php
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