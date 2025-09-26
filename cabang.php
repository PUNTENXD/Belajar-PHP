<?php 

$namalagu = "Neko";
$menit = 3;
 
if($menit < 3 || $menit = 0){
    echo $namalagu.": bagian awal lagu";
} else if($menit > 2 || $menit = 4){
    echo $namalagu.": bagian akhir lagu";
} else {
    echo $namalagu.": bagian reff lagu";
}

// (||) ini artinya OR = atau
echo  str_repeat(".", 5) ;

$menit1 = 1;

switch ($menit1) {
    case 1:
        echo $namalagu.": bagian reff lagu";
        break;

      case 3:
        echo $namalagu.": bagian akhir lagu";
        break;

      case 4:
        echo $namalagu.": bagian outro lagu";
        break;
    

    default:
        echo $namalagu.": kepanjangan";
        break;
}

echo  str_repeat(".", 5) ;

$lagu = $menit1 >= 4 ? $namalagu.": tidak ada" : $namalagu.": ada";
echo $lagu;
