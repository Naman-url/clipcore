<?php
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: index.html");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Dashboard - ClipCore</title>
  <style>
    body { background: #0b0b0b; color: #fff; font-family: 'Poppins'; text-align: center; padding: 100px; }
    a { color: #0ff; text-decoration: none; }
  </style>
</head>
<body>
  <h1>Welcome, <?php echo $_SESSION['user']; ?> 👋</h1>
  <a href="logout.php">Logout</a>
</body>
</html>
