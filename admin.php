<?php
session_start();
if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Dashboard Admin</h2>
    <p>Selamat datang, <?= $_SESSION['username'] ?>!</p>
    <a href="form_permintaan.php" class="btn">Form Permintaan Barang</a>
    <a href="logout.php" class="logout">Logout</a>
  </div>
</body>
</html>