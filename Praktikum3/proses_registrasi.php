<?php

$domisili = ["Jakarta", "Bogor", "Depok", "Tanggerang", "Bekasi"];
$program_studi = [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>'Bisnis Digital'
];

$skills = [
    "HTML"=>10,
    "CSS"=>10,
    "Javascript"=>20,
    "RWD Bootstrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50
];

$total_nilai = $skills+$skills;

if($total_nilai > 75){
    $keterangan = "LULUS";
} else {
    $keterangan = "TIDAK LULLUS";
}

?>