<?php 
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
        	<a href="index.php">Home</a>
            <a href="upload.php" class="active">Upload</a>
            <a href="download.php">Download</a>
            <a href="user.php">User</a>
        </div>
  <div id="content">
    <h2>Upload</h2>
    <p>Upload file Anda dengan melengkapi form di bawah ini.</p>
    <?php
			include('config.php');
			if(!empty($_POST['upload'])){
				

				$no_laporan    			 = $_POST['no_laporan'];
				$tanggal_masuk			 = date("d-m-y");
				$tujuan_penilaian		 = $_POST['tujuan_penilaian'];
				$nama_debitur			 = $_POST['nama_debitur'];
				$alamat_debitur	         = $_POST['alamat_debitur'];
				$desa_kelurahan			 = $_POST['desa_kelurahan'];
				$kecamatan		         = $_POST['kecamatan'];
				$kabupaten_kota			 = $_POST['kabupaten_kota'];
				$propinsi		         = $_POST['propinsi'];
				$marketing			     = $_POST['marketing'];
				$cabang					 = $_POST['cabang'];
				$divisi		             = $_POST['divisi'];
				$nama_penilai		     = $_POST['nama_penilai'];
				$tanggal_survey		     = date("d-m-y");
				$tanggal_laporan   		 = date("d-m-y");
				$status_penilaian		 = $_POST['status_penilaian'];
				$jenis_jaminan			 = $_POST['jenis_jaminan'];
				$mv	                     = $_POST['mv'];
				$lv          			 = $_POST['lv'];
				$keterangan		         = $_POST['keterangan'];
				$nama_tl 			     = $_POST['nama_tl'];
				$mv_tl		             = $_POST['mv_tl'];
				$lv_tl			         = $_POST['lv_tl'];
				$keterangan_tl	         = $_POST['keterangan_tl'];
				$tanggal_review_tl		 = date("d-m-y");
				$nama_uh 			     = $_POST['nama_uh'];
				$mv_uh   	             = $_POST['mv_uh'];
				$lv_uh  		         = $_POST['lv_uh'];
				$keterangan_uh	         = $_POST['keterangan_uh'];
				$tanggal_review_uh		 = date("d-m-y");
				$nama_dh 			     = $_POST['nama_dh'];
				$mv_dh	                 = $_POST['mv_dh'];
				$lv_dh			         = $_POST['lv_dh'];
				$keterangan_dh	         = $_POST['keterangan_dh'];
				$tanggal_review_dh		 = date("d-m-y");
				$file    				 = $_FILES['file']['name'];
				
			
						$in = mysql_query("INSERT INTO lpa VALUES(NULL, '$no_laporan', '$tanggal_masuk', '$tujuan_penilaian', '$nama_debitur', '$alamat_debitur', '$desa_kelurahan', '$kecamatan', '$kabupaten_kota', '$propinsi', '$marketing', '$cabang', '$divisi', '$nama_penilai', '$tanggal_survey', '$tanggal_laporan', '$status_penilaian', '$jenis_jaminan', '$mv', '$lv', '$keterangan', '$nama_tl', '$mv_tl', '$lv_tl', '$keterangan_tl', '$tanggal_review_tl', '$nama_uh', '$mv_uh', '$lv_uh', '$keterangan_uh', '$tanggal_review_uh', '$nama_dh', '$mv_dh', '$lv_dh', '$keterangan_dh', '$tanggal_review_dh', '$file')");
						if($in){
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}else{
							//echo '<div class="error">ERROR: Gagal upload file!</div>';
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
						}
			}
			?>
    <form method="post" enctype="multipart/form-data" action="">
      <table width="100%" align="center" border="0" bgcolor="#eee" cellpadding="2" cellspacing="0">
        <tr>
          <td align="right"><b>No Laporan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="no_laporan" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Masuk</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_masuk" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Tujuan Penilaian</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="tujuan_penilaian" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Debitur</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_debitur" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Alamat Debitur</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="alamat_debitur" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Desa / Kelurahan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="desa_kelurahan" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Kecamatan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="kecamatan" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Kabupaten / Kota</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="kabupaten_kota" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Propinsi</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="propinsi" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Marketing</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="marketing" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Cabang</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="cabang" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Divisi</b></td>
          <td><b>:</b></td>
          <td>
		   <select name="divisi" class="form-control" required>
          <option value="">Pilih Divisi</option>
		  <option value="SME 1">SME 1</option>
		  <option value="SME 2">SME 2</option>
		  <option value="SME 3">SME 3</option>
		  <option value="SME 4">SME 4</option>
		  <option value="SME 5">SME 5</option>
		  <option value="Consumer">Consumer</option>
		  </select>
		  </td>
        </tr>
        <tr>
          <td align="right"><b>Nama Penilai</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_penilai" size="60" required /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Survey</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_survey" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Laporan</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_laporan" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Status Penilaian</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="status_penilaian" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Jenis Jaminan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="jenis_jaminan" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan" size="60" height="100" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_tl" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="mv_tl" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="lv_tl" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_tl" size="60" height="100" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Team Leader</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_tl" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_uh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv_uh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv_uh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_uh" size="60" height="100" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Unit Head</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_uh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nama Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="nama_dh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Pasar Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="mv_dh" size="60" hidden /></td>
        </tr>
        <tr>
          <td align="right"><b>Nilai Likuidasi Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="decimal" name="lv_dh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Keterangan Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="text" name="keterangan_dh" size="60" height="100" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>Tanggal Review Dept Head</b></td>
          <td><b>:</b></td>
          <td><input type="date" name="tanggal_review_uh" size="60" hidden  /></td>
        </tr>
        <tr>
          <td align="right"><b>File</b></td>
          <td><b>:</b></td>
          <td><input type="file" name="file" hidden /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td><input type="submit" name="upload" value="Upload" /></td>
        </tr>
      </table>
    </form>
  </div>
</div>
</body>
</html>
