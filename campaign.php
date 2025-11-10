<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: index.html");
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Campaigns - ClipCore</title>
  <style>
    body {
      background: #0b0b0b;
      color: white;
      font-family: 'Poppins', sans-serif;
      text-align: center;
      padding: 100px;
    }
    h1 {
      color: #0ff;
    }
    a {
      color: #0ff;
      text-decoration: none;
      font-weight: bold;
    }
    a:hover {
      color: #fff;
    }
  </style>
</head>
<body>
  <h1>Welcome to ClipCore Campaign Dashboard 🎥</h1>
  <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
  <p>Manage your active campaigns below.</p>

  <a href="logout.php">Logout</a>
</body>
</html>
