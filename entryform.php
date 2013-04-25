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
if ($_GET["addedit"] === "Add")
        {
         $mactionphp = "insert.php"; 
          $mname = " ";
          $mcode = " ";
        }
         else
          { 
            $mactionphp ="update.php";
             $result1 = mysqli_query($con,"SELECT * FROM staff WHERE code =". $_GET['mcode'] );

             $row1 = mysqli_fetch_array($result1);
             $mname = $row1['name'];
             $mcode = $row1['code'];
           
          } 
 

?>
<div class="container">  
    
    <div class="row" style="margin:4%">
      <div class="span4" style="background-color:white">
        <h4 style="margin-left:2%">Entry Form</h4>

        <form name="entryfrm" action='<?php echo $mactionphp; ?>' method="post" style="margin:2%">

          <p><?php echo $_GET["addedit"]; ?></p>
          <p>
            <input type="text" name="code" id="code" placeholder="Code" value='<?php echo $mcode; ?>' readonly>
          </p>
          <p>
            <input type="text" name="name" id="name" placeholder="Name" value='<?php echo $mname; ?>'>
          </p>   
          <button type="submit" id="save" class="btn btn-success btn-small">Save</button>   

        </form> 
      </div>
      <div class="span9">
         
      </div>
    </div>    
</div>
</body>
</html>  