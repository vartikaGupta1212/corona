<?php
$server='localhost';
$user='root';
$password= '';
$db = 'coronadb';
$con =mysqli_connect($server,$user,$password,$db);
if($con)
{
 echo "Connection Successful";
}
else {
  {
    echo "No Connection";
  }
}
 ?>
 ?>
