<?php

class produk{
    private $koneksi;
    //akses property yang bersifat private menggunakan $this
    public function __construct(){
        // __construct adalah function yang dijalankan terlebih dahulu
        global $connection;
        $this->koneksi=$connection;
    }
    public function tampil(){
        // untuk mencetak seluruh data table mengunakan query select
        // query untuk menampilkan data dengan inner join
        $sql ="SELECT p.*, j.nama as namajenisproduk 
        from produk p 
        inner join jenis_produk j on j.id = p.jenis_produk_id
        order by p.id desc";
        // gunakan method prepare untuk mengirim data 
        $ps= $this->koneksi->prepare($sql);
        // eksekusi data yang sudah disiapkan 
        $ps->execute();
        // siapkan data sql yang suda dieksekusi mengunakan method fetchAll
        $data=$ps->fetchAll();
        // kembalikan data produk yang masih dalam bentuk array 
        return $data;
    }
}

?>