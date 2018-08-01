<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
$username     = $_POST['username'];
$password     = $_POST['password'];
$nama_lengkap = $_POST['nama_lengkap'];
$level        = $_POST['level'];

//simpan data ke database
$query = mysql_query("insert into user values('id_user', '$username', '$password', '$nama_lengkap', '$level')") or die(mysql_error());

if ($query) {
	header('location:user.php?message=success');
}
?>