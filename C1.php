<?php
echo "Masukkan bilangan bulat positif N: ";
$n = trim(fgets(STDIN));
echo "\n";

$byk = intdiv($n, 5);
$ans = (5 + 5 * $byk) * $byk / 2;

echo "=== HASIL PERHITUNGAN ===\n";
echo "Total penjumlahan : $ans\n";
?>