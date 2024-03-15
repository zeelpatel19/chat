<?php
  $hostname = "localhost";
  $username = "u665483290_zeel";
  $password = "p#H;k]D37yf2";
  $dbname = "u665483290_chat";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
