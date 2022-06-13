<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include '../setting/config.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$login = mysqli_query($mysqli,"select * from tbl_login where username='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0) {
	$data = mysqli_fetch_assoc($login);

	if($data['role'] == 'admin') {
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		header("location:../admin/dashboard.php");
	}  else if ($data['role'] == 'guest'){ 
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "guest";
		header("location:../guest/dashboard.php");
	} else {
		header("location:../index.php?pesan=gagal");
	}
} else {
	header("location:../index.php?pesan=gagal");
}
?>