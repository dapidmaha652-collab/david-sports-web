<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Transaksi Berhasil</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen flex items-center justify-center">

<div class="text-center">
  <h1 class="text-4xl font-bold text-green-400 mb-4">Pembayaran Berhasil 🎉</h1>
  <p class="text-gray-300 mb-6">Terima kasih sudah berbelanja di DavidSport</p>
  <a href="index.php" class="bg-green-500 px-6 py-3 rounded">
    Kembali ke Home
  </a>
</div>

</body>
</html>
