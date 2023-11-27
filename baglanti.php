<?php

$host="localhost";
$kullanici="root";
$parola="5835529";
$vt="otomasyon";

$baglanti = mysqli_connect($host, $kullanici, $parola, $vt);
mysqli_set_charset($baglanti, "UTF8");

?>