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
	
//	if (!get_magic_quotes_gpc())
//	{
		$searchtype= mysql_real_escape_string($searchtype);
		$searchterm= mysql_real_escape_string($searchterm);
//	}

	$qry="SELECT * FROM staff WHERE ".$searchtype." like '%".$searchterm."%'";

	$result = mysqli_query($con,$qry);

	$num_results = $result->num_rows;


	echo'<p>Number of Staff Found: '.$num_results.'</p>';
	$row = mysqli_fetch_array($result);

	for ($i=0; $i <$num_results; $i++)
	{
		$row = $result->fetch_assoc();
		echo'<p><strong>'.($i+1).$row['name'];
	}

	$result->free();
    mysqli_close($con);
//	header('Location: index.php?num_results=$num_results&row=$row');
?>
		  	