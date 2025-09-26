<?php 

$lagu = [
    "name" => ["Unravel", "ライラック "],
    "genre" => ["Rock", "Pop"],
    "rating" => [9.0, 8.5],

];

//Iterasi
// foreach ($lagu as $key => $value){
//   echo $lagu[$key][0];
//   echo "<br />";
// }

foreach ($lagu as $key => $value){
  foreach ($value as $val) {
    echo $val;
    echo "<br />";
  }
   echo "<br />";
}