<?php
echo "PROGRAM MENGHITUNG Luas\n";

function choice(){
    echo "1. Luas Segitiga\n\n";
}

function luas_segitiga(int $x, int $y) {
    return 0.5 * $x * $y; 
}
choice();
$method = readline("Pilih Metode : ");
if ($method == 1) {
    echo "Rumus : panjang x lebar\n";
    echo "==========================\n";
    echo "masukkan nilai x dan y: \n";
    $panjang = readline("panjang : ");
    $lebar = readline("lebar : ");
    $luas = luas_segitiga($panjang, $lebar);
    echo "Hasil Dari ".$panjang." * ".$lebar." adalah ".$luas;
    
}else {
    echo "wahyuuuuuuuuuuuuu";
}