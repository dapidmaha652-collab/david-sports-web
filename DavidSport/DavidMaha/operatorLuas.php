<?php

// Fungsi untuk menghitung luas persegi
function hitungLuasPersegi($sisi) {
    $luas = $sisi * $sisi;
    return $luas;
}

// Panjang sisi persegi
$sisi_persegi = 5;

// Hitung luas persegi
$luas_persegi = hitungLuasPersegi($sisi_persegi);

// Output hasil
echo "Luas persegi dengan panjang sisi $sisi_persegi adalah: $luas_persegi";
?>
