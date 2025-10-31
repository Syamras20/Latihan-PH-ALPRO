<?php
class Perjalanan {
    public $jarak;
    public $konsumsiKendaraan;

    public function hitungKebutuhanBensin() {
        return $this->jarak / $this->konsumsiKendaraan;
    }

    public function hitungBiayaPerjalanan() {
        return $this->hitungKebutuhanBensin() * 10000;
    }

    public function tampilkanRincianPerjalanan() {
        $kebutuhanBensin = $this->hitungKebutuhanBensin();
        $biayaPerjalanan = $this->hitungBiayaPerjalanan();

        echo "--- RINCIAN PERJALANAN ---\n";
        echo "Jarak tempuh: $this->jarak km\n";
        echo "Konsumsi Kendaraan $this->konsumsiKendaraan km/liter\n";
        echo "Kebutuhan bensin: $kebutuhanBensin liter\n";
        echo "Biaya perjalanan: Rp $biayaPerjalanan";
    }
}

$perjalanan = new Perjalanan();
echo "Masukkan jarak perjalanan (km): ";
$perjalanan->jarak = trim(fgets(STDIN));
echo "Masukkan konsumsi kendaraan (km/liter): ";
$perjalanan->konsumsiKendaraan = trim(fgets(STDIN));
echo "\n";

$perjalanan->tampilkanRincianPerjalanan();
?>