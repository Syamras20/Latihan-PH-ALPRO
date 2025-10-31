<?php
$data = [
    ["001", "23-5-2025", 10000],
    ["002", "24-5-2025", 12000],
    ["003", "25-5-2025", 13000]
];

$sum = 0;
foreach($data as $i) {
    $sum += $i[2];
}

$avg = $sum / 3;
echo "Rata Rata Pengeluaran dalam 3 hari = $avg";
?>