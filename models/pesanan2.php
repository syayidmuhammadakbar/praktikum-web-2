<?php

class pesanan{
    private $koneksi;

    public function __construct(){
        // untuk mengakses dkoneksi
        global $connection;
        $this->koneksi=$connection;
        
    }

    public function tampilkan (){
        // untuk mencetak data dari table pesanan
        $sql="SELECT pesanan.*, pelanggan.nama AS nama_pelanggan
        FROM pesanan INNER JOIN pelanggan ON pelanggan.id = pesanan.pelanggan_id
        ORDER BY pesanan.id DESC";

        // METHOD PREPARE UNTUK MENGIRIM DATA
        $pr=$this->koneksi->prepare($sql);

        // method exec
        $pr->execute();

        // method fetcAll untuk menampilkan data 
        $data=$pr->fetchAll();
        return $data;
    }
}

?>