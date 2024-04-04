<?php
function hurufyang_seringmuncul($kata) {
  $jumlahKarakter = array_count_values(str_split($kata)); //menghitung jumlah kemunculan
  $hurufTerbanyak = array_key_first($jumlahKarakter); // Mencari karakter dengan jumlah kemunculan terbanyak
  return $hurufTerbanyak;
}

$kata = "aqua";
$hurufTerbanyak = hurufyang_seringmuncul($kata);

echo "Huruf yang paling sering muncul dalam kata '$kata' adalah '$hurufTerbanyak'.";

