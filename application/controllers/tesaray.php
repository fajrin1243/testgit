<?php 

class Tesaray extends CI_Controller {


function contoh_array(){
	$definisi = "array adalah variable khusus yang bisa menampung banyak nilai dalam satu awaktu";
	echo $definisi;
	echo "<br>";
	
	$data = array (
		'a' => 1,
		'b' => 2,
		'c' => 3,
		'd' => 4
	);
	echo "<br>";
	foreach ($data as $loop){
	echo "mencetak array dengan nilai ".$loop;
	echo "<br>";
	}
}
function latihan(){

echo "<center>";
echo "Tanpa Array";
echo "</center>";
echo"<br>";
$pppk = 5;
$lppk =25;	
$luaspersegik = $pppk *$lppk;
$def1 = "Luas Persegi Panjang Kecil 	";

echo $def1 .$luaspersegik;
echo "<br>";

$lppb = 40;
$pppb = 60; 
$luaspersegib = $pppb *$lppb;
$def2 = "Luas Persegi Panjang Besar 	=";

echo $def2.$luaspersegib;
echo "<br>";

$r = 20;
$pi = 3.14;
$luasling = $pi *$r *$r * 1/2;
$def3 = "Luas Setengah Lingkaran	=";
echo $def3 .$luasling;
echo "<br>";

$a = 10;
$t = 15;
$luassegitiga = $a*$t/2;
$def4 = "Luas Segitiga 	=";

echo $def4 .$luassegitiga;
echo "<br>";




$data = array (
		'a' => $def1.$luaspersegik,
		'b' => $def2.$luaspersegib,
		'c' => $def3.$luasling,
		'd' => $def4.$luassegitiga
	);

echo "<br>";
echo "<hr></hr>";
echo "<center>";
echo "Dengan Array";
echo "</center>";

	foreach ($data as $loop){
	echo "Jadi Hasilnya Adalah ".$loop;
	echo "<br>";
	}

	echo "<br>";
	echo "<hr></hr>";
	echo "Jadi Luas Bangun datar Campuran Tersebut Adalah " ;
	echo "<b>";
	echo "<u>";
	echo  $luaspersegik + $luaspersegib + $luasling + $luassegitiga;
	echo "</u>";
	echo "</b>";

}
}