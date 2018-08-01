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
        	<a href="../team_leader/index.php">Home</a>
            <a href="../team_leader/download.php"class="active">Data Appraisal</a>
			<a href="../team_leader/user.php">User</a>
        </div>
         <div id="content">
        	<h2>Edit</h2>
            </div>

<?php 
$id = $_GET['id'];

$query = mysql_query("select * from lpa where id_laporan='$id'") or die(mysql_error());

$data = mysql_fetch_array($query);
?>

<form name="update_data" action="../team_leader/update-form.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="id_laporan" value="<?php echo $id; ?>" />
<table border="0" cellpadding="5" cellspacing="0">
 <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
		<tr>
          <td align="right"><b>No Laporan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="no_laporan" size="60" value="<?php echo $data['no_laporan']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Masuk</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_masuk" size="60" value="<?php echo $data['tanggal_masuk']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tujuan Penilaian</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="tujuan_penilaian" size="60" value="<?php echo $data['tujuan_penilaian']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Debitur</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_debitur" size="60" value="<?php echo $data['nama_debitur']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Alamat Debitur</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="alamat_debitur" size="60" value="<?php echo $data['alamat_debitur']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Desa / Kelurahan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="desa_kelurahan" size="60" value="<?php echo $data['desa_kelurahan']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Kecamatan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="kecamatan" size="60" value="<?php echo $data['kecamatan']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Kabupaten / Kota</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="kabupaten_kota" size="60" value="<?php echo $data['kabupaten_kota']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Propinsi</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="propinsi" size="60" value="<?php echo $data['propinsi']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Marketing</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="marketing" size="60" value="<?php echo $data['marketing']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Cabang</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="cabang" size="60" value="<?php echo $data['cabang']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Divisi</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="divisi" size="60" value="<?php echo $data['divisi']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Penilai</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_penilai" size="60" value="<?php echo $data['nama_penilai']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Survey</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_survey" size="60" value="<?php echo $data['tanggal_survey']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Laporan</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_laporan" size="60" value="<?php echo $data['tanggal_laporan']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Status Penilaian</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="status_penilaian" size="60" value="<?php echo $data['status_penilaian']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Jenis Jaminan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="jenis_jaminan" size="60" value="<?php echo $data['jenis_jaminan']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv" size="60" value="<?php echo $data['mv']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv" size="60" value="<?php echo $data['lv']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan" size="60" height="100" value="<?php echo $data['keterangan']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_tl" size="60" value="<?php echo $data['nama_tl']; ?>" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="mv_tl" size="60" value="<?php echo $data['mv_tl']; ?>" required  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="lv_tl" size="60" value="<?php echo $data['lv_tl']; ?>" required  /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_tl" size="60" height="100" value="<?php echo $data['keterangan_tl']; ?>" required  /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_tl" size="60" value="<?php echo $data['tanggal_review_tl']; ?>" required  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_uh" size="60" value="<?php echo $data['nama_uh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv_uh" size="60" value="<?php echo $data['mv_uh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv_uh" size="60" value="<?php echo $data['lv_uh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_uh" size="60" height="100" value="<?php echo $data['keterangan_uh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_uh" size="60" value="<?php echo $data['tanggal_review_uh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_dh" size="60" value="<?php echo $data['nama_dh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv_dh" size="60" value="<?php echo $data['mv_dh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv_dh" size="60" value="<?php echo $data['lv_dh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_dh" size="60" height="100" value="<?php echo $data['keterangan_dh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_dh" size="60" value="<?php echo $data['tanggal_review_dh']; ?>" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>File</b></td>
          <td><b>:</b></td>
          <td><input type="file" name="file" value="<?php echo $data['file']; ?>" hidden  /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="upload"  /></td>
        </tr>
      </table>
</form>
</body>
</html>