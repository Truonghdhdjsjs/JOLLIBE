<?php
$mysqli = new mysqli("localhost","root","","jollibe");

// Check connection
if ($mysqli -> connect_errno) {
  echo " Không kết nối được với MySQLi " . $mysqli->connect_error;
  exit();
}
?>