<?php
echo "Masukkan Rentang Atas : ";
$n = trim(fgets(STDIN));
echo "\n";

$sum = 0;
echo "Bilangan Genap dari 1 hingga $n : ";
for ($i = 1; $i <= $n; $i++) { // gtw maksud soalnya itu i <= n atau i < n jadinya pake i <= n
    if($i % 2) {
        echo "$i ";
        $sum += $i;
    }
}
echo "\n";
echo "Total Penjumlahan : $sum\n";
?>