<?php
session_start();

$users = [
  ['username' => 'admin', 'password' => 'admin123', 'role' => 'admin'],
  ['username' => 'staff', 'password' => 'staff123', 'role' => 'staff'],
  ['username' => 'manager', 'password' => 'manager123', 'role' => 'manager']
];

$username = $_POST['username'];
$password = $_POST['password'];

foreach ($users as $user) {
  if ($user['username'] == $username && $user['password'] == $password) {
    $_SESSION['username'] = $username;
    $_SESSION['role'] = $user['role'];
    if ($user['role'] == 'admin') {
      header("Location: admin.php");
    } elseif ($user['role'] == 'staff') {
      header("Location: staff.php");
    } else {
      header("Location: manager.php");
    }
    exit;
  }
}
echo "<script>alert('Login gagal');window.location='login.php';</script>";
?>