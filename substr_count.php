<?php
// menjumlahkah string yang sama
$a = "!???";
$b = "!!";

$c = substr_count($b, "!") * substr_count($b, "?");

print $c;
