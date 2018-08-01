<?php 
include('config.php');
include('cek-login.php'); 
?>
<html>
<head>
	<title>Laporan Appraisal</title>
     <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

    <div id="container">
    	<div id="header">
    		<h1>Laporan Appraisal</h1>
        </div>
    
	<div id="menu">
        	<a href="../dept_head/index.php">Home</a>
            <a href="../dept_head/download.php">Data Appraisal</a>
            <a href="../dept_head/user.php"class="active">User</a>
        </div>
		
<?php
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
    echo '<h3>Berhasil menambah data!</h3>';
}
?>
<a href="../logout.php">Logout</a>

</body>
</html>