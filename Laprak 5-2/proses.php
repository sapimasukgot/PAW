<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $email = $_POST['email'];

    if(empty($nama) || empty($nim) || empty($email)) {
        echo "Semua field harus diisi.";
    } else {
        $namaBersih = htmlspecialchars($nama);
        $nimBersih = htmlspecialchars($nim);
        $emailBersih = htmlspecialchars($email);

        $data = "Nama: $namaBersih . NIM: $nimBersih . Email: $emailBersih\n\n";
        $namaFile = "form_data.txt";

        $file = fopen($namaFile, "a");
        if($file) {
            fwrite($file, $data);
            fclose($file);
            echo "Data berhasil disimpan.";
        } else {
            echo "Gagal membuka file.";
        }
    }
}