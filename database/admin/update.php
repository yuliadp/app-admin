<?php
include('config.php');

$id = $_POST['id_user'];
$password = $_POST['password'];

$query = mysql_query("update user set password='$password' where id_user='$id'") or die(mysql_error());

if ($query) {
	header('location:database/admin/view.php?message=success');
}
?>