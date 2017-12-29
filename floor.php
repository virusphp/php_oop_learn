<?php

// floor ada fungsi untuk menghitung jarak empuh
$jarak = [720, 850, 70];

function hitung($a, $b, $c){
	if($a >= $b) return null;
	$jam = $c / ($b-$a);

	return [floor($jam), floor(($jam * 60) % 60), floor(($jam * 3600) % 60)];
}

print_r(hitung($jarak[0], $jarak[1], $jarak[2]));
