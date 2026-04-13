<?php

class Mahasiswa{
    public $NIM;
    public $nama;
    public $prodi;
    public function __construct($NIM, $nama, $prodi){
        $this->NIM = $NIM;
        $this->nama = $nama;
        $this->prodi = $prodi;
    }
    public function kuliah(){
        return "Mahasiswa dengan NIM $this->NIM, nama $this->nama, dan prodi $this->prodi sedang kuliah.";
    }
    public function praktikum(){
        return "Mahasiswa dengan NIM $this->NIM, nama $this->nama, dan prodi $this->prodi sedang praktikum.";
    }
    public function ujian(){
       return "Mahasiswa dengan NIM $this->NIM, nama $this->nama, dan prodi $this->prodi sedang ujian.";
    }
}

$Mahasiswa1 = new Mahasiswa(245150201111050,"Jason Manuel","Teknik Informatika");
$Mahasiswa2 = new Mahasiswa(245150201111001,"Joshua Nathanael Purba","Teknik Informatika");
echo $Mahasiswa1->ujian();
echo "<br>";
echo $Mahasiswa1->kuliah();
echo "<br>";
echo $Mahasiswa1->praktikum();
echo "<br>";
echo "<br>";
echo $Mahasiswa2->ujian();
echo "<br>";
echo $Mahasiswa2->kuliah();
echo "<br>";
echo $Mahasiswa2->praktikum();
