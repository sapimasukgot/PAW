<?php

$namaFile = "catatan.txt";
$tambahIsi = "nambah aja";

$proses = fopen($namaFile, "a");
if ($proses) {
    fwrite($proses, $tambahIsi);
    fclose($proses);
    echo "File berhasil ditambah";
} else {
    echo "File gagal ditambah";
}
