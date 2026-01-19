<?php
session_start();

if (empty($_SESSION['cart'])) {
  header("Location: index.php");
  exit;
}

$total = 0;
foreach ($_SESSION['cart'] as $item) {
  $total += $item['harga'] * $item['qty'];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nama   = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $bayar  = $_POST['bayar'];
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Struk Pembelian | DavidSport</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>body{font-family:Poppins}</style>
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex justify-center items-center">

<div class="bg-white w-full max-w-xl p-6 rounded-xl shadow-lg">

  <h1 class="text-2xl font-bold text-center mb-2">STRUK PEMBELIAN</h1>
  <p class="text-center text-sm text-gray-500 mb-6">DavidSport</p>

  <div class="mb-4 text-sm">
    <p><strong>Nama:</strong> <?= htmlspecialchars($nama); ?></p>
    <p><strong>Alamat:</strong> <?= htmlspecialchars($alamat); ?></p>
    <p><strong>Pembayaran:</strong> <?= htmlspecialchars($bayar); ?></p>
    <p><strong>Tanggal:</strong> <?= date('d-m-Y H:i'); ?></p>
  </div>

  <hr class="mb-4">

  <table class="w-full text-sm mb-4">
    <thead>
      <tr class="border-b">
        <th class="text-left py-2">Produk</th>
        <th>Qty</th>
        <th class="text-right">Subtotal</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($_SESSION['cart'] as $item): ?>
      <tr>
        <td><?= $item['nama']; ?></td>
        <td class="text-center"><?= $item['qty']; ?></td>
        <td class="text-right">
          Rp <?= number_format($item['harga'] * $item['qty']); ?>
        </td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

  <hr class="mb-4">

  <div class="flex justify-between font-bold text-lg">
    <span>Total</span>
    <span>Rp <?= number_format($total); ?></span>
  </div>

  <div class="mt-6 text-center">
    <p class="text-green-600 font-semibold mb-2">
      ✔ Transaksi Berhasil
    </p>
    <p class="text-sm text-gray-500">
      Terima kasih telah berbelanja di DavidSport
    </p>
  </div>

  <div class="mt-6 flex gap-3">
    <button onclick="window.print()"
            class="flex-1 bg-green-500 text-white py-2 rounded">
      Cetak Struk
    </button>
    <a href="index.php"
       class="flex-1 text-center border py-2 rounded">
       Kembali
    </a>
  </div>

</div>

</body>
</html>

<?php
// kosongkan cart setelah checkout
$_SESSION['cart'] = [];
?>
