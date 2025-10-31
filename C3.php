<?php
echo "Masukkan Tinggi Awal Tanaman (mm) : ";
$tinggi = trim(fgets(STDIN));

echo "Masukkan Jumlah Hari : ";
$hari = trim(fgets(STDIN));

$tinggi += 2 * $hari;

echo "Tinggi tanaman hari ke $hari : $tinggi";
?>