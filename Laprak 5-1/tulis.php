<?php

$namaFile = "catatan.txt";
$isi="nice ingfo";

$ngisi =file_put_contents($namaFile, $isi);

if ($ngisi) {
    echo "File berhasil dibuat";
} else {
    echo "File gagal dibuat";
}