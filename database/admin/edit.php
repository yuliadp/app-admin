<?php 
include('config.php');
include('cek-login.php'); 
?>

<html>
<head>
<title>LOGIN</title>
<link rel="stylesheet" type="text/css" href="../..database/style.css">
</head>
<body>
<div id="container">
    	<div id="header">
    		<h1>Laporan Appraisal</h1>
        </div>
         <div id="content">
        	<h2>Edit</h2>
            </div>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from user where id_user='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="update.php" method="post">
<input type="hidden" name="id_user" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
    <tbody>
    	<tr>
        	<td>Username</td>
        	<td>:</td>
        	<td><input type="text" name="username" maxlength="20" required="required" value="<?php echo $data['username']; ?>" disabled /></td>
        </tr>
    	<tr>
        	<td>Password</td>
        	<td>:</td>
        	<td><input type="password" name="password" maxlength="20" required="required" value="<?php echo $data['password']; ?>" /></td>
        </tr>
        <tr>
        	<td>Nama Lengkap</td>
        	<td>:</td>
        	<td><input type="text" name="nama_lengkap" maxlength="50" required="required" value="<?php echo $data['nama_lengkap']; ?>" /></td>
        </tr>
		<tr>
        	<td>Level</td>
        	<td>:</td>
        	<td><input type="password" name="password" maxlength="20" required="required" value="<?php echo $data['level']; ?>" /></td>
        </tr>
    	<tr>
        	<td align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
        </tr>
    </tbody>
</table>
</form>

<a href="../..database/admin/view.php">Lihat Data</a>

</body>
</html>