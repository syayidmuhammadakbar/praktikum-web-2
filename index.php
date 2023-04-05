<?php
include_once('dbkoneksi.php');

include_once('models/pelanggan2.php');
include_once('models/jenis_produk2.php');
include_once('models/pembayaran2.php');
include_once('models/kartu2.php');
include_once('models/vendor2.php');
include_once('models/pembelian2.php');
include_once('models/pesanan2.php');
include_once('models/produk2.php');
include_once('navbar.php');
include_once('sidebar.php');

// lakukan request halaman di menu url dengan membuka terlebih dahulu file index.php
$hal=$_REQUEST['hal'];

//jika ada request dari url browser berupa hal maka tampilkan halaman sesuai request
if(!empty($hal)){
    include_once $hal. '.php';
}else{
    include_once('home.php');
}
// jika tidak ada request hal dari hal 

include_once('footer.php');
?>