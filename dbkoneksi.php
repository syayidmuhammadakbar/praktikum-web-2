<?php
// konfigurasi database

$host="localhost";
$dbname="dbpenjualan";
$username="root";
$password="";

// membuat koneksi pdo dan try catch

try {
    $connection = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "<h1>koneksi database berhasil</h1>";
} catch(PDOException $e){
    echo "database tidak terhubung :" .$e->getMessage();
}

?>