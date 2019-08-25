<?php
  $db = mysqli_connect("localhost","root","","dbase");

  if(!$db){
      die("Connection failed: " . mysqli_connect_error());
  }

  echo "Connected successfully.";
?>