<?php
error_reporting(0);
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "information";
  $conn = mysqli_connect($servername,$username,$password,$dbname);

  if($conn){
    // echo "connected";
  }
  else{
    echo "Not connected";
  }
?>