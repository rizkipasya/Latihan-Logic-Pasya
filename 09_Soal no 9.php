<?php
class matematika {
  private $data;

  public function __construct(array $data) {
    $this->data = $data;
  }

  public function rataRata() {
    return array_sum($this->data) / count($this->data);
  }

  public function median() {
    sort($this->data);
    $jumlahData = count($this->data);
    $tengah = $jumlahData / 2;
    return $jumlahData % 2 == 0 ? ($this->data[$tengah - 1] + $this->data[$tengah]) / 2 : $this->data[$tengah];
  }

  public function modus() {
    $hitungKemunculan = array_count_values($this->data);
    $nilaiTerbanyak = max($hitungKemunculan);
    return array_keys($hitungKemunculan, $nilaiTerbanyak);
  }
}

$data = [
  15, 20, 25, 30, 35, 40, 45, 50, 55, 60, 60, 15
];

$objekData = new matematika($data);

$rataRata = $objekData->rataRata();
echo "Rata-rata: " . $rataRata . "<br>";

$median = $objekData->median();
echo "Median: " . $median . "<br>";

$modus = $objekData->modus();
echo "Modus: ";
if (count($modus) > 1) {
  echo implode(", ", $modus);
} else {
  echo $modus[0];
}

echo "<br>";

