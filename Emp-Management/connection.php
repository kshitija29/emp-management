<?php

error_reporting(0);
$servername ="localhost";
$username ="root";
$password ="";
$dbname ="employee";

$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn)
{
   // echo "successfully Conection Established";
}
else{
  echo "Connecion Failed";
}
?>