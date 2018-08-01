<?php 
include('config.php');

$id = $_GET['id'];

$query = mysql_query("delete from lpa where id_laporan='$id'") or die(mysql_error());

if ($query) {
	header('location:download.php?message=delete');
}
?>