<?php
class KalkulatorSewaKendaraan {
    public $kendaraan;
    public $durasi;
    
    public function hitungBiayaSewa() {
        $harga = 100000;
        if($this->kendaraan == "Mobil") $harga = 300000;
        
        return $harga * $this->durasi;
    }
    
    public function hitungBiayaTambahan() {
        return $this->durasi * (200000);
    }
    
    public function hitungTotalBiaya() {
        return $this->hitungBiayaSewa() + $this->hitungBiayaTambahan();
    }
    
    public function tampilkanDetailSewa() {
        $biayaSewa = $this->hitungBiayaSewa();
        $biayaTambahan = $this->hitungBiayaTambahan();
        $totalBiaya = $this->hitungTotalBiaya();
        
        echo "--- DETAIL SEWA KENDARAAN ---\n";
        echo "Jenis Kendaraan: $this->kendaraan\n";
        echo "Lama Sewa: $this->durasi hari\n";
        echo "Biaya Sewa: Rp $biayaSewa\n";
        echo "Biaya Tambahan: Rp $biayaTambahan\n";
        echo "Total Biaya: Rp $totalBiaya\n";
    }
    
}

$sewa = new KalkulatorSewaKendaraan();
echo "Pilih jenis kendaraan (Mobil/Motor): ";
$sewa->kendaraan = trim(fgets(STDIN));
echo "Masukkan lama sewa (hari): ";
$sewa->durasi = trim(fgets(STDIN));
echo "\n";

$sewa->tampilkanDetailSewa();
?>