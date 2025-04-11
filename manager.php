<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'manager') {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Manager Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Dashboard Manager</h2>
    <p>Selamat datang, <?= $_SESSION['username'] ?>!</p>
    <p>Di halaman ini, manager dapat melihat dan menyetujui permintaan (fitur simulasi).</p>
    <a href="logout.php" class="logout">Logout</a>
  </div>
</body>
</html>