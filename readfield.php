   <?php
  $con=mysqli_connect("localhost","root","","testdb");
  // Check connection
  if (mysqli_connect_errno())
    {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    $result = mysqli_query($con,"SELECT code,name FROM staff ORDER BY DESC");

    while($row = mysqli_fetch_array($result))
    {
      echo"document.getElementById('code').value =".$row['code'];
      echo"document.getElementById('name').value =". $row['name'];
      break;
    }

  mysqli_close($con);
  ?>