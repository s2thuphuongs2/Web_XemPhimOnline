<?php
$mysqli = new mysqli("localhost","root","","webphim1");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect MySQLi: " . $mysqli->connect_error;
  exit();
}
?>