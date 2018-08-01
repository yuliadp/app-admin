<?php 
include('config.php');
include('cek-login.php'); 
?>
<html>
<head>
	<title>Laporan Appraisal</title>
     <link rel="stylesheet" type="text/css" href="../database/style.css">
</head>
<body>

    <div id="container">
    	<div id="header">
    		<h1>Laporan Appraisal</h1>
        	<span>Dibuat oleh YuliaDp</span>
        </div>
    
	 <div id="menu">
        	<a href="../database/index.php">Home</a>
            <a href="../database/upload.php">Upload</a>
            <a href="../database/download.php">Download</a>
            <a href="../database/user.php" class="active">User</a>
        </div>
		
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>
<form name="input_data" action="../database/insert.php" method="post">
 <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
 <tr>
                	<td width="40%" align="right"><b>Username</b></td><td><b>:</b></td><td><input type="text" name="username" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Password</b></td><td><b>:</b></td><td><input type="text" name="password" size="40" required /></td>
                </tr>
                <tr>
                	<td width="40%" align="right"><b>Nama Lengkap</b></td><td><b>:</b></td><td><input type="text" name="nama_lengkap" size="40" required /></td>
                </tr>
				 <tr>
                	<td width="40%" align="right"><b>Level</b></td><td><b>:</b></td>
					<td>
					<select name="level" class="form-control" required/>
                        <option value="">Pilih Level User</option>
                        <option value="1">Admin</option>
                        <option value="2">Unit Head</option>
                        <option value="3">Dept Head</option>
                        <option value="4">Team Leader</option>
                        <option value="5">Penilai</option>
                      </select>
					  </td>
                </tr>
                <tr>
                	<td width="40%" align="right" colspan="3"><input type="submit" name="submit" value="Simpan" /></td>
                </tr>
    	
</table>
</form>

<a href="../database/view.php">Lihat Data</a> ||  <a href="../database/logout.php">Logout</a>

</body>
</html>