<?php 

require_once 'animal.php';
require_once 'frog.php';
require_once 'ape.php';

$sheep = new animal('shaun', '2', 'false');
echo $sheep->get_name() ."<br>"; // "shaun"
echo $sheep->get_legs()."<br>"; // 2
echo $sheep->get_cold_blooded()."<br><br>"; // false

// NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())


$sungokong = new ape('kera sakti', '2', 'false');
echo $sungokong->get_suara(). "<br>" ; // "Auooo"

$kodok = new frog('buduk','4','false');
echo $kodok->get_suara() ; // "hop hop"

 ?>