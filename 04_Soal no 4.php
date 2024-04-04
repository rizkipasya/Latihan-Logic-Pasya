<?php
function hitungkata($contohkalimat)
{
    return count(explode('', $contohkalimat));
}

$contohkalimat = "Saya mempunyai kucing bernama cici";
$menghitungjumlah = str_word_count($contohkalimat);

//output
echo "Jumlah kata dalam kalimat '$contohkalimat' yaitu $menghitungjumlah kata";
