<?php
if (isset($_POST['submit'])) {
$bill1 = $_POST['bill1'];
$bill2 = $_POST['bill2'];
$operator = $_POST['operator'];

if ($operator=="+") {
	// code...
	$hasil = $bill1 + $bill2;
	echo "hasil penjumlhannya adalah $hasil";
}
elseif ($operator=="-"){
	$hasil = $bill1 - $bill2;
	echo "hasil pengurangannya adalah $hasil";
}
elseif ($operator=="*"){
	$hasil = $bill1 * $bill2;
	echo "hasil perkaliannya adalah $hasil";
}
elseif ($operator=="/"){
	$hasil = $bill1 / $bill2;
	echo "hasil pembagiannya adalah $hasil";
}
else {
	echo "pilih operator";
}

} ?>