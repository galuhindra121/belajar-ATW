<?php 

class mobil {
	public $merk, $tipe, $mesin, $max_speed;

	function cetaktipe(){

		return $this->tipe;
	} 

	function kecepatanMaksimal(){
		return "Kecepatan Maksimal Dari Mobil ini Adalah ". $this->max_speed;
	}
}



$bmw = new mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280km/h";


$mercy = new mobil;
$mercy->merk = "mercy";
$mercy->tipe = "A600";
$mercy->mesin = "2000cc";
$mercy->max_speed = "280km/h";

echo "$mercy->tipe";
echo "<br>";
echo "$bmw->tipe";

if ($bmw === $mercy){
	echo "sama";
}else{
	echo " Tidak";
}