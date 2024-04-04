<?php

function hitung_huruf_sama($kata) {
  $panjangKata = strlen($kata);
  $karakterSebelumnya = '';
  $jumlahKemunculan = 0;

  for ($i = 0; $i < $panjangKata; $i++) {
    $karakterSaatIni = $kata[$i];

    if ($karakterSaatIni === $karakterSebelumnya) {
      $jumlahKemunculan++;
    } else {
      if ($karakterSebelumnya !== '') {
        echo "$karakterSebelumnya : $jumlahKemunculan<br>";
      }
      $karakterSebelumnya = $karakterSaatIni;
      $jumlahKemunculan = 1;
    }
  }

  echo "$karakterSebelumnya : $jumlahKemunculan<br>";
}

$input = "aabbaaacccdddcc";
hitung_huruf_sama($input);