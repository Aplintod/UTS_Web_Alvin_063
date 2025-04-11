<?php
session_start();
if (!isset($_SESSION['role']) || ($_SESSION['role'] != 'staff' && $_SESSION['role'] != 'admin')) {
  header("Location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Form Permintaan Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Form Permintaan Barang</h2>
    <form method="POST">
      <input type="text" name="nama_barang" placeholder="Nama Barang" required><br><br>
      <input type="number" name="jumlah" placeholder="Jumlah" required><br><br>
      <select name="satuan" required>
        <option value="">Pilih Satuan</option>
        <option value="unit">Unit</option>
        <option value="pak">Pak</option>
        <option value="lusin">Lusin</option>
      </select><br><br>
      <label>Prioritas:</label><br>
      <input type="radio" name="prioritas" value="tinggi" required> Tinggi
      <input type="radio" name="prioritas" value="sedang"> Sedang
      <input type="radio" name="prioritas" value="rendah"> Rendah<br><br>
      <textarea name="keterangan" placeholder="Keterangan Tambahan" rows="4"></textarea><br><br>
      <button class="btn" type="submit">Kirim Permintaan</button>
    </form>
    <a href="javascript:history.back()" class="btn">Kembali</a>
  </div>
</body>
</html>