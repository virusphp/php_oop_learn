<?php
$abj = range("a","z");
$s = strtolower("The sunset sets at twelve o\' clock.");
$str = preg_replace('/[^A-Za-z]/', '',str_replace(" ", "",$s));

$h = str_split($str);

foreach($h as $v)
{
	$gg[] = array_search($v, range("a","z")) + 1;
}
print implode(" ",$gg);


//for($i = 0;$i < strlen($str);++$i)
//{
//	if(ord($str[$i]) >= 97 && ord($str[$i]) <= 122) {
//		echo ord($str[$i]) - 96 . " ";
//	}
//}

//$stra = str_split(preg_replace('/[^A-Za-z]/','',strtolower(str_replace(" ", "",$str))));
//foreach($stra as $b)
//{
//	echo (array_search($b,ord(range("a","z"))+1));
//}
//$str2 = "The sunset sets at twelve o\' clock.";
//
//$c = preg_replace('/[^A-Za-z]/', '',str_replace(" ", "",str_split($str)));
//foreach($c as $a => $val)
//{
//	$z[] = array_search($val, $abj);
//}
//print_r($z);
//print_r($abj);
//print_r(array_map([$str = $arr],$arr, ));
