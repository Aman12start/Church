<?php

$servername="localhost";
$username="root";
$password="";
$db="our";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn){
//   echo "Connected to Databse";
}
else{
  echo "Connection Failed".mysqli_connect_error();
}


?>