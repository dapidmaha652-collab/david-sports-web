<?php
session_start();

$produk = [
 [
  "nama" => "Sepatu Lari Pro",
  "harga" => 850000,
  "img" => "assets/sepatulari.jpg"
 ],
 [
  "nama" => "Bola Sepak Premium",
  "harga" => 350000,
  "img" => "assets/bola.jpg"
 ],
 [
  "nama" => "Jersey SportZone",
  "harga" => 250000,
  "img" => "assets/jersey.jpg"
 ]
];

$detail = null;
if (isset($_GET['produk'])) {
  foreach ($produk as $p) {
    if ($p['nama'] === $_GET['produk']) {
      $detail = $p;
      break;
    }
  }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>DavidSport | Online Sport Shop</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <style>body{font-family:Poppins}</style>
</head>

<body class="bg-gradient-to-br from-gray-900 via-black to-gray-800 text-white min-h-screen">

<!-- NAVBAR -->
<nav class="flex justify-between items-center px-6 py-4 bg-black/70 backdrop-blur">
  <div class="flex items-center gap-3">
    <img src="assets/logo.jpeg" class="h-10">
    <h1 class="text-2xl font-bold text-green-400">DavidSport</h1>
  </div>
  <a href="cart.php" class="relative">
    Keranjang
    <span class="absolute -top-2 -right-3 bg-green-500 text-xs px-2 rounded-full">
      <?= count($_SESSION['cart'] ?? []); ?>
    </span>
  </a>
</nav>

<!-- HERO -->
<?php if (!$detail): ?>
<section class="relative text-center py-24 overflow-hidden">
  <div class="absolute inset-0 flex justify-center items-center opacity-10">
    <img src="assets/logo.jpeg" class="h-[400px] blur-sm">
  </div>
  <div class="relative z-10">
    <h2 class="text-5xl font-bold mb-4">Toko Perlengkapan Olahraga</h2>
    <p class="text-gray-300 mb-6">Belanja mudah, cepat & aman</p>
    <a href="#produk"
       class="bg-green-500 px-8 py-3 rounded-full hover:bg-green-600 transition">
       Mulai Belanja
    </a>
  </div>
</section>
<?php endif; ?>

<!-- DETAIL PRODUK -->
<?php if ($detail): ?>
<section class="max-w-5xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-10">

  <img src="<?= $detail['img']; ?>"
       class="rounded-2xl shadow-lg w-full object-cover">

  <div>
    <h2 class="text-3xl font-bold mb-3"><?= $detail['nama']; ?></h2>
    <p class="text-green-400 text-2xl font-bold mb-4">
      Rp <?= number_format($detail['harga']); ?>
    </p>
    <p class="text-gray-300 mb-6">
      Produk olahraga berkualitas tinggi dan nyaman digunakan.
    </p>

    <form action="cart.php" method="GET" class="space-y-6">
      <input type="hidden" name="nama" value="<?= $detail['nama']; ?>">
      <input type="hidden" name="harga" value="<?= $detail['harga']; ?>">

      <!-- QTY -->
      <div>
        <label class="font-semibold">Jumlah</label>
        <div class="flex items-center gap-4 mt-2">
          <button type="button" onclick="qty(-1)"
                  class="w-10 h-10 rounded-full bg-white/10">−</button>
          <input id="jumlah" name="qty" type="number" value="1" min="1"
                 class="w-16 text-center bg-black/50 border border-white/20 rounded">
          <button type="button" onclick="qty(1)"
                  class="w-10 h-10 rounded-full bg-white/10">+</button>
        </div>
      </div>

      <div class="flex gap-4">
        <button class="bg-green-500 px-6 py-3 rounded-lg hover:bg-green-600">
          + Tambah ke Keranjang
        </button>
        <a href="index.php"
           class="border border-white/30 px-6 py-3 rounded-lg">
           Kembali
        </a>
      </div>
    </form>
  </div>

</section>
<?php endif; ?>

<!-- PRODUK LIST -->
<?php if (!$detail): ?>
<section id="produk"
         class="px-6 pb-20 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

<?php foreach ($produk as $p): ?>
<div class="bg-white/10 p-5 rounded-2xl hover:scale-[1.03] transition">
  <img src="<?= $p['img']; ?>" class="h-48 w-full object-cover rounded mb-4">
  <h3 class="text-xl font-semibold"><?= $p['nama']; ?></h3>
  <p class="text-green-400 font-bold mb-3">
    Rp <?= number_format($p['harga']); ?>
  </p>
  <a href="index.php?produk=<?= urlencode($p['nama']); ?>"
     class="block bg-green-500 text-center py-2 rounded hover:bg-green-600">
     Lihat Produk
  </a>
</div>
<?php endforeach; ?>

</section>
<?php endif; ?>

<footer class="text-center py-6 text-gray-400 border-t border-white/10">
  © 2026 DavidSport
</footer>

<script>
function qty(n){
  const i = document.getElementById('jumlah');
  let v = parseInt(i.value) + n;
  if (v < 1) v = 1;
  i.value = v;
}
</script>

</body>
</html>
