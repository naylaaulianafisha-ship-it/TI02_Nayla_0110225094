<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Nayla Store | Hasil Pemesanan</title>
  <link rel="stylesheet" href="assets/css/output.css">
  <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/512/3144/3144456.png" type="image/x-icon">
</head>

<body>
  <div class="output-container">
    <h1>🧾 Pesanan Berhasil!</h1>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama = $_POST['nama'];
      $alamat = $_POST['alamat'];
      $telepon = $_POST['telepon'];
      $email = $_POST['email'];
      $barang = $_POST['barang'];
      $jumlah = $_POST['jumlah'];
      $catatan = $_POST['catatan'];

      echo "<div class='summary-box'>";
      echo "<h2>Detail Pemesanan 📋</h2>";
      echo "<p><strong>Nama:</strong> $nama</p>";
      echo "<p><strong>Alamat:</strong> $alamat</p>";
      echo "<p><strong>No. Telepon:</strong> $telepon</p>";
      echo "<p><strong>Email:</strong> $email</p>";
      echo "<hr>";
      echo "<p><strong>Barang:</strong> $barang</p>";
      echo "<p><strong>Jumlah:</strong> $jumlah pcs</p>";
      echo "<p><strong>Catatan:</strong> " . (!empty($catatan) ? $catatan : "Tidak ada") . "</p>";
      echo "</div>";

      echo "<div class='thanks'>";
      echo "<p>🎉 Terima kasih telah berbelanja di <strong>Nayla Store</strong>!</p>";
      echo "<p>Pesanan kamu akan segera kami proses 💚</p>";
      echo "</div>";
    } else {
      echo "<p>Tidak ada data yang dikirim.</p>";
    }
    ?>
  </div>
</body>
</html>
