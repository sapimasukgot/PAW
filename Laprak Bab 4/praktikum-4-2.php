<?php

function hitungPerkalian ($a1, $a2) {
    $hasil = $a1 * $a2;
    return $hasil; 
}
echo hitungPerkalian(4, 9);
echo "<br>";
echo hitungPerkalian(6,11);

echo "<br>";
echo "<br>";
function panjangStr ($a1) {
    $hasil = strlen($a1);
    return $hasil;
}

echo panjangStr("PHP");
echo "<br>";
echo panjangStr("Praktikum Pemrograman Web");