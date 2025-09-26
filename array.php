<?php 
// $lagu = [
//     "ねこ",
//     "よる　に　かける",
//     "One Voice",
//     "Unravel"
// ];

// var_dump($lagu); // memanggil semua isi array
// echo $lagu[0];// memanggil salah satu isi array menggunakan index

$lagu = [
    "name" => ["Unravel", "ライラック "],
    "genre" => ["Rock", "Pop"],
    "rating" => 9.0,

];
// var_dump($lagu);
echo $lagu["name"][0]; // cara memanggil array di dalam key array
echo $lagu["rating"]; // panggil key-nys saja