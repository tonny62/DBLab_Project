<?php
  $uid = $_GET['uname'];
  $password = $_GET['password'];
  $url = "http://localhost:8888/miniproject";
  if ($uid == "admin" AND $password == "admin") {
    header("Location: $url/homework.php");
    exit;
  }else{
    header("Location: $url/index.php?status=failed");
  }
 ?>
