<?php
$namaProduk = "Baju Vondutch";
$hargaSatuan = 615500;
$jumlah = 3;

$subTotal = $hargaSatuan * $jumlah;
$diskon = 0;

if ($subTotal > 500000) {
    $diskon = $subTotal * 5 / 100;
}

$total = $subTotal - $diskon;

echo "Nama Produk: " . $namaProduk . "<br>";
echo "Harga Satuan: Rp " . number_format($hargaSatuan, 0, ',', '.') . "<br>";
echo "Jumlah Beli: " . $jumlah . "<br>";
echo "Subtotal: Rp " . number_format($subTotal, 0, ',', '.') . "<br>";
echo "Diskon: Rp " . number_format($diskon, 0, ',', '.') . "<br>";
echo "Total yang harus dibayar: Rp " . number_format($total, 0, ',', '.');
?>