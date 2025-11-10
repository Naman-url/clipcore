<?php
$host = "localhost";
$user = "root"; // your DB username
$pass = ""; // your DB password
$db = "clipcore_db";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Database connection failed: " . mysqli_connect_error());
}
?>
