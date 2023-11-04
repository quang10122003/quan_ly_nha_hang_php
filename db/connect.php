<?php
$mysqli = new mysqli("localhost","root","","pttkpm");
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
// echo "ket noi thanh cong ";
?>