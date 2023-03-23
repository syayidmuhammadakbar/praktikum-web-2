<?php
session_start(); //mulai sesion

// cek user apakah sudah submit
// gunkanakan method isset
if (isset($_POST['submit'])){
//amil data berdasarkan uniq name
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == "akbar" && $password == '1234'){
	$_SESSION['username']=$username;
	header("location: home.php");
	exit();
}else{
	$_SESSION['gagal']='password dan username salah'; 
	header("location: index.php");
	exit();
}
}
session_destroy();
header("location: index.php");
?>