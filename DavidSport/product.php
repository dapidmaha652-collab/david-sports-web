<?php
session_start();

$nama  = $_GET['nama'] ?? '';
$harga = $_GET['harga'] ?? 0;
$img   = $_GET['img'] ?? '';

if (!$nama || !$harga || !$img) {
  header("Location: index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($nama); ?> | DavidSport</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>body{font-family:Poppins}</style>
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white min-h-screen">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-6 py-4 bg-black/70 backdrop-blur">
  <a href="index.php" class="text-primary font-bold text-xl">DavidSport</a>
  <a href="cart.php" class="relative">
    Keranjang
    <span class="absolute -top-2 -right-3 bg-primary text-xs px-2 rounded-full">
      <?= count($_SESSION['cart'] ?? []); ?>
    </span>
  </a>
</nav>

<!-- DETAIL PRODUK -->
<section class="max-w-5xl mx-auto px-6 py-16 grid md:grid-cols-2 gap-10">

  <!-- GAMBAR -->
  <img src="<?= htmlspecialchars($img); ?>"
       class="rounded-2xl shadow-lg w-full object-cover">

  <!-- INFO -->
  <div>
    <h1 class="text-3xl font-bold mb-4">
      <?= htmlspecialchars($nama); ?>
    </h1>

    <p class="text-primary text-2xl font-bold mb-6">
      Rp <?= number_format($harga); ?>
    </p>

    <p class="text-gray-300 mb-6">
      Produk olahraga berkualitas tinggi, nyaman digunakan,
      dan cocok untuk aktivitas harian maupun profesional.
    </p>

    <!-- FORM TAMBAH KERANJANG -->
    <form action="cart.php" method="GET" class="space-y-6">

      <input type="hidden" name="nama" value="<?= htmlspecialchars($nama); ?>">
      <input type="hidden" name="harga" value="<?= $harga; ?>">

      <!-- QUANTITY -->
      <div>
        <label class="block mb-2 font-semibold">Jumlah</label>
        <div class="flex items-center gap-4">

          <button type="button"
                  onclick="ubahQty(-1)"
                  class="w-10 h-10 rounded-full bg-white/10
                         hover:bg-white/20 transition text-xl">−</button>

          <input type="number" id="qty" name="qty"
                 value="1" min="1"
                 class="w-16 text-center bg-black/50 border border-white/20
                        rounded-lg py-2">

          <button type="button"
                  onclick="ubahQty(1)"
                  class="w-10 h-10 rounded-full bg-white/10
                         hover:bg-white/20 transition text-xl">+</button>

        </div>
      </div>

      <!-- BUTTON -->
      <div class="flex gap-4">
        <button type="submit"
                class="bg-primary px-6 py-3 rounded-lg font-semibold
                       hover:bg-green-600 active:scale-95 transition">
          + Tambah ke Keranjang
        </button>

        <a href="index.php"
           class="border border-white/30 px-6 py-3 rounded-lg
                  hover:bg-white/10 transition">
          Kembali
        </a>
      </div>

    </form>

  </div>
</section>

<footer class="text-center py-6 text-gray-400 border-t border-white/10">
  © 2026 DavidSport. All Rights Reserved.
</footer>

<!-- SCRIPT QTY -->
<script>
function ubahQty(val) {
  const input = document.getElementById('qty');
  let qty = parseInt(input.value) + val;
  if (qty < 1) qty = 1;
  input.value = qty;
}
</script>

</body>
</html>
