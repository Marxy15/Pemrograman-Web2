<?php 
//ini sebuah komentar (ctrl+/)
/* ini sebuah komentar (dipakai untuk kode kode yang cukup panjang) */
# ini sebuah komentar

// echo "Hello World <br>";
// echo 'Hello World <br>';
// print_r("Muhammad Ammar <br>");
// var_dump("STT Terpadu Nurul Fikri <br>");

// Membuat variabel user (variabel yaitu tempat untuk menaruh angka)
// $nama = "Muhammad Ammar";
// $umur = 20;
// $berat = 50;
// $mahasiswa = true;

// echo "Nama saya adalah $nama <br>";
// echo "Umur saya $umur <br>";
// echo "Berat badan saya mencapai $berat kg <br>";

// Membuat variabel sistem
// echo 'Dokument Root'.$_SERVER["DOCUMENT_ROOT"];
// echo "<br>";
// echo 'Nama File'.$_SERVER["PHP_SELF"];

// Membuat variabel konstanta
// define('PHI', 3.14);
// $jari = 10;
// $luas = PHI * $jari * $jari;
// $keliling = 2 * PHI * $jari;

// echo "Luas lingkaran dengan jari-jari $jari cm = $luas cm <br>";
// echo "Keliling lingkarang dengan jari-jari $jari cm = $keliling cm";


// Membuat Array
$programs = ['PHP', 'Javascript', 'HTML', 'CSS'];
// echo $programs[0];
// echo "Jumlah data variabel programs sebanyak " . count($programs);
foreach($programs as $program){
    echo "Bahasa $program <br>";
}




?>