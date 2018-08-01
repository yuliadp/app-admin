<?php
session_start();
 
if (!empty($_SESSION['username'])) {
        header('location:index.php');
}
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
        </div>
        
  	 <div id="content">
       <h2 align="center">LOGIN</h2>
</div>
<?php
//kode php ini kita gunakan untuk menampilkan pesan eror
if (!empty($_GET['error'])) {
    if ($_GET['error'] == 1) {
        echo '<h3>Username dan Password belum diisi!</h3>';
    } else if ($_GET['error'] == 2) {
        echo '<h3>Username belum diisi!</h3>';
    } else if ($_GET['error'] == 3) {
        echo '<h3>Password belum diisi!</h3>';
    } else if ($_GET['error'] == 4) {
        echo '<h3>Username dan Password tidak terdaftar!</h3>';
    }
}
?>
 <h2 align="center">
  <form name="login" action="otentikasi.php" method="post">
 <div class="form-group">
   <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
					</div>
					<div class="form-group">
					  <select name="level" class="form-control" required>
                        <option value="">Pilih Level User</option>
                        <option value="admin">Admin</option>
						<option value="penilai">Penilai</option>
						<option value="team_leader">Team Leader</option>
                        <option value="unit_head">Unit Head</option>
                        <option value="dept_head">Dept Head</option>
                        
                      </select>
					</div>
					<div class="form-group">
						<input type="submit" name="login" class="btn btn-primary btn-block" value="login" />
					</div>
					</form>
					</h2>
</body>
</html>