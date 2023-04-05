<?php

class pembelian{
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
        $sql ="SELECT pembelian.*, produk.nama as nama_produk, vendor.nama as nama_vendor
        FROM pembelian 
        JOIN produk ON (produk.id=pembelian.produk_id)
        JOIN vendor ON (vendor.id=pembelian.vendor_id)";
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