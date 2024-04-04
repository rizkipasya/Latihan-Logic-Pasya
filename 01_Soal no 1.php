<?php
$ples = 5; //segitiga atas
$ples2 = 4; //segitiga bawah
for ($i = 1; $i <= $ples; $i++) {
    for ($j = 1; $j <= $ples - $i; $j++) {
        echo "&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "+";
    }
    echo "<br>";
}
for ($i = 1; $i <= $ples2; $i++) {
	for ($j = 1; $j <= $i; $j++) {
		echo "&nbsp";
	}
	for ($k = $ples2; $k>= $i; $k -= 1) {
		echo "+";
	}
	echo "<br>";
}
