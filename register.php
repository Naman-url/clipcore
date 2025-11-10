<?php
session_start();
include('config.php');

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
if (mysqli_query($conn, $sql)) {
  $user_id = mysqli_insert_id($conn);
  $_SESSION['user_id'] = $user_id;
  $_SESSION['username'] = $username;
  $_SESSION['email'] = $email;

  header("Location: campaign.php");
  exit();
} else {
  echo "Error: " . mysqli_error($conn);
}
?>
