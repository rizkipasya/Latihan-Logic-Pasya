<?php
$teks = "HAlo sElamAt PaGi dUniA";

$format_judul = ucwords(strtolower($teks));
$format_biasa = strtolower($teks);

// Output
echo "Format Judul: $format_judul\n<br>";
echo "Format Biasa: $format_biasa";
