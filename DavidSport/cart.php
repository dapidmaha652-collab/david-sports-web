<?php
session_start();
if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

/* TAMBAH KE KERANJANG */
if (isset($_GET['nama'], $_GET['harga'])) {

  $qty = $_GET['qty'] ?? 1;

  $_SESSION['cart'][] = [
    'nama'  => $_GET['nama'],
    'harga' => (int) $_GET['harga'],
    'qty'   => (int) $qty
  ];

  header("Location: cart.php");
  exit;
}

/* HAPUS ITEM */
if (isset($_GET['hapus'])) {
  unset($_SESSION['cart'][$_GET['hapus']]);
  $_SESSION['cart'] = array_values($_SESSION['cart']);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Keranjang | DavidSport</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>body{font-family:Poppins}</style>
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white min-h-screen">

<!-- NAVBAR -->
<nav class="px-6 py-4 bg-black flex justify-between">
  <a href="index.php" class="hover:text-green-400">← Lanjut Belanja</a>
  <h1 class="text-green-400 font-bold text-xl">Keranjang</h1>
</nav>

<section class="max-w-2xl mx-auto py-12 px-4">

<?php if (empty($_SESSION['cart'])): ?>
  <p class="text-center text-gray-400">Keranjang masih kosong</p>

<?php else: ?>

<?php
$total = 0;
foreach ($_SESSION['cart'] as $i => $item):
  $subtotal = $item['harga'] * $item['qty'];
  $total += $subtotal;
?>

<div class="flex justify-between items-center bg-white/10 p-4 rounded mb-4">

  <div>
    <p class="font-semibold"><?= htmlspecialchars($item['nama']); ?></p>
    <p class="text-sm text-gray-300">
      Qty: <?= $item['qty']; ?> × Rp <?= number_format($item['harga']); ?>
    </p>
    <p class="text-green-400 font-bold">
      Rp <?= number_format($subtotal); ?>
    </p>
  </div>

  <a href="?hapus=<?= $i; ?>"
     class="text-red-400 hover:text-red-500">
     Hapus
  </a>

</div>

<?php endforeach; ?>

<!-- TOTAL -->
<div class="text-xl font-bold mt-6 flex justify-between">
  <span>Total</span>
  <span class="text-green-400">
    Rp <?= number_format($total); ?>
  </span>
</div>

<!-- CHECKOUT FORM -->
<form action="checkout.php" method="POST" class="mt-8 space-y-4">

  <input type="text" name="nama" required
         placeholder="Nama Lengkap"
         class="w-full p-3 rounded bg-black/50 border border-white/20">

  <textarea name="alamat" required
            placeholder="Alamat Lengkap"
            class="w-full p-3 rounded bg-black/50 border border-white/20"></textarea>

  <select name="bayar" required
          class="w-full p-3 rounded bg-black/50 border border-white/20">
    <option value="">Metode Pembayaran</option>
    <option>Transfer Bank</option>
    <option>E-Wallet</option>
    <option>COD</option>
  </select>

  <button type="submit"
          class="w-full bg-green-500 py-3 rounded font-semibold
                 hover:bg-green-600 transition">
    Checkout & Lihat Struk
  </button>

</form>

<?php endif; ?>

</section>

</body>
</html>
