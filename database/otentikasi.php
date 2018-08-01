<?php
include('config.php');

session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

echo $level;

$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:login.php?error=1');
	break;
} else if (empty($username)) {
	header('location:login.php?error=2');
	break;
} else if (empty($password)) {
	header('location:login.php?error=3');
	break;
}

$q = mysql_query("select * from user where username='$username' and password='$password'");

if (mysql_num_rows($q) == 1) {
	$_SESSION['username'] = $username;
	$_SESSION['level'] = $level;
	
	echo '1';
  	if($_SESSION['level'] == 'admin')
	{
		header('location:admin/index.php');
	}
	
	else if($_SESSION['level'] == 'dept_head')
	{
		header('location:dept_head/index.php');
	}
	
	else if($_SESSION['level'] == 'unit_head')
	{
		header('location:unit_head/index.php');
	}
	
	else if($_SESSION['level'] == 'team_leader')
	{
		header('location:team_leader/index.php');
	}
	
	else if($_SESSION['level'] == 'penilai')
	{
		header('location:penilai/index.php');
	}
	
} else {


	header('location:login.php?error=4');
}
?>