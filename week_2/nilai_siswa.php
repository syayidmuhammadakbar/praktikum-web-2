<?php
// ambil data yang di input oleh user
require_once 'fungction.php'; //untuk memanggil codingan di file berbeda
$name = $_POST['name'];
$mata_kuliah = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$_nilai=($uts + $uas + $nilai_tugas) / 3;
$keterangan = kelulusan($_nilai);
$grade= grade($_nilai);
//mencetak nilai 
echo "Nama Mahasiswa : $name";
echo "<br/>Mata kuliah : $mata_kuliah";
echo "<br/>Nilai UTS : $uts";
echo "<br/>Nilai UAS : $uas";
echo "<br/>Nilai Tugas Praktikum : $nilai_tugas";
echo "<br/>nilai akhir: $_nilai";
echo "<br/> Keterangan: $keterangan";
echo "<br/> Grade: $grade";

?>