<?php 
include('config.php');
?>
<html>
<head>
	<title>Laporan Appraisal</title>
     <link rel="stylesheet" type="text/css" href="../style2.css">
</head>
<body>

    <div id="container">
    	<div id="header">
    		<h1>Laporan Appraisal</h1>
        </div>
    
	<div id="menu">
        	<a href="index.php">Home</a>
            <a href="upload.php">Upload</a>
            <a href="download.php" class="active">Download</a>
            <a href="user.php">User</a>
        </div>

<?php 
if (!empty($_GET['message']) && $_GET['message'] == 'success') {
	echo '<h3>Berhasil meng-update data!</h3>';
} else if (!empty($_GET['message']) && $_GET['message'] == 'delete') {
	echo '<h3>Berhasil menghapus data!</h3>';
}
?>
<a href="upload.php">+ Tambah Data</a>
<table class="table" width="100%" cellpadding="3" cellspacing="0">
    	<tr>
        	<th>No.</th>
        	<th>No. Laporan</th>
            <th>Tanggal Masuk</th>
        	<th>Tujuan Penilaian</th>
            <th>Nama Debitur</th>
        	<th>Alamat Debitur</th>
        	<th>Desa / Kelurahan</th>
            <th>Kecamatan</th>
        	<th>Kabupaten / Kota</th>
            <th>Propinsi</th>
        	<th>Marketing</th>
            <th>Cabang</th>
        	<th>Divisi</th>
			<th>Nama Penilai</th>
        	<th>Tanggal Survey</th>
            <th>Tanggal Laporan</th>
        	<th>Status Penilaian</th>
            <th>Jenis Jaminan</th>
        	<th>Nilai Pasar</th>
			<th>Nilai Likuidasi</th>
        	<th>Keterangan</th>
			<th>Nama Team Leader</th>
        	<th>Nilai Pasar Team Leader</th>
            <th>Nilai Likuidasi Team Leader</th>
        	<th>Keterangan Team Leader</th>
            <th>Tanggal Review Team Leader</th>
        	<th>Nama Unit Head</th>
			<th>Nilai Pasar Unit Head</th>
        	<th>Nilai Likuidasi Unit Head</th>
			<th>Keterangan Unit Head</th>
        	<th>Tanggal Review Unit Head</th>
			<th>Nama Dept Head</th>
			<th>Nilai Pasar Dept Head</th>
        	<th>Nilai Likuidasi Dept Head</th>
			<th>Keterangan Dept Head</th>
        	<th>Tanggal Review Dept Head</th>
			<th>Opsi</th>
        </tr>
                
                <?php 
				
	           $query = mysql_query("SELECT * FROM lpa ");
               $no = 1;
               while($data = mysql_fetch_array($query)){
		       ?>
		
    	    <tr>
		    <td><?php echo $no; ?></td>
        	<td><?php echo $data['no_laporan']; ?></td>
        	<td><?php echo $data['tanggal_masuk']; ?></td>
            <td><?php echo $data['tujuan_penilaian']; ?></td>
            <td><?php echo $data['nama_debitur']; ?></td>
        	<td><?php echo $data['alamat_debitur']; ?></td>
            <td><?php echo $data['desa_kelurahan']; ?></td>
            <td><?php echo $data['kecamatan']; ?></td>
        	<td><?php echo $data['kabupaten_kota']; ?></td>
            <td><?php echo $data['propinsi']; ?></td>
            <td><?php echo $data['marketing']; ?></td>
        	<td><?php echo $data['cabang']; ?></td>
            <td><?php echo $data['divisi']; ?></td>
			<td><?php echo $data['nama_penilai']; ?></td>
        	<td><?php echo $data['tanggal_survey']; ?></td>
            <td><?php echo $data['tanggal_laporan']; ?></td>
            <td><?php echo $data['status_penilaian']; ?></td>
        	<td><?php echo $data['jenis_jaminan']; ?></td>
            <td><?php echo $data['mv']; ?></td>
            <td><?php echo $data['lv']; ?></td>
        	<td><?php echo $data['keterangan']; ?></td>
            <td><?php echo $data['nama_tl']; ?></td>
            <td><?php echo $data['mv_tl']; ?></td>
        	<td><?php echo $data['lv_tl']; ?></td>
            <td><?php echo $data['keterangan_tl']; ?></td>
			<td><?php echo $data['tanggal_review_tl']; ?></td>
			<td><?php echo $data['nama_uh']; ?></td>
            <td><?php echo $data['mv_uh']; ?></td>
        	<td><?php echo $data['lv_uh']; ?></td>
            <td><?php echo $data['keterangan_uh']; ?></td>
			<td><?php echo $data['tanggal_review_uh']; ?></td>
			<td><?php echo $data['nama_dh']; ?></td>
            <td><?php echo $data['mv_dh']; ?></td>
        	<td><?php echo $data['lv_dh']; ?></td>
            <td><?php echo $data['keterangan_dh']; ?></td>
			<td><?php echo $data['tanggal_review_dh']; ?></td>
			<td><a href="edit-form.php?id=<?php echo $data['id_laporan']; ?>">Edit</a> || 
                <a href="delete-form.php?id=<?php echo $data['id_laporan']; ?>">Delete</a></td>
          </tr>
	  <?php
          $no++;
       
      }
      ?>
    </table>
</body>
</html>