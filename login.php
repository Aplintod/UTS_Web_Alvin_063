<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <h2>Login Pengguna</h2>
  <form method="POST" action="proses_login.php">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit" class="btn">Login</button>
  </form>
</div>
</body>
</html>