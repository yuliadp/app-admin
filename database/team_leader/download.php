<?php
include ("config.php");
include('cek-login.php'); 
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
        	<a href="../team_leader/index.php">Home</a>
            <a href="../team_leader/download.php"class="active">Data Appraisal</a>
			<a href="../team_leader/user.php">User</a>
        </div>

       <div id="content">
        	<h2>Download</h2>
            <p>Silahkan download file yang sudah di Upload di website ini. Untuk men-Download Anda bisa mengklik Judul file yang di inginkan.</p>

<form method="POST" action="">
<input type="text" name="txtsearch">
<select name="kategori">
 <option value="nama_debitur">Nama Debitur</option>
 <option value="nama_penilai">Nama Penilai</option>
 <option value="cabang">Cabang</option>
  <option value="divisi">Divisi</option>
 <option value="desa_kelurahan">Desa / Kelurahan</option>
 <option value="kecamatan">Kecamatan</option>
 <option value="kabupaten_kota">Kabupaten / Kota</option>
  <option value="propinsi">Propinsi</option>
</select>
<input type="submit" value="Search" name="submit"/>

<?php
  if (isset($_POST['submit'])) {
   $search = $_POST['txtsearch'];
   $kategori = $_POST['kategori'];
   
   $sql = "SELECT * FROM lpa WHERE $kategori LIKE '%$search%'";
   $result = mysql_query($sql) or die('Error, failed. ' . mysql_error());
    
   if (mysql_num_rows($result) == 0) {
    echo '<p></p><p>Pencarian tidak ditemukan</p>';
   } else {
    echo '<p></p>';
    ?>
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
				
				$query = mysql_query("SELECT * FROM lpa WHERE $kategori LIKE '%$search%'");
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
			<td><a href="../team_leader/edit-form.php?id=<?php echo $data['id_laporan']; ?>">Edit</a></td>
          </tr>
	  <?php
          $no++;
       
      }
      ?>
    </table>
	<?php
    }
   }
   else
   { ?>
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
				
	           $query = mysql_query("SELECT * FROM lpa");
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
			<td><a href="../team_leader/edit-form.php?id=<?php echo $data['id_laporan']; ?>">Edit</a>
          </tr>
	  <?php
          $no++;
       
      }
      ?>
    </table>
	<?php
   }
  
?>
 
 
	
    </tbody>
</table>
</body>
</html>