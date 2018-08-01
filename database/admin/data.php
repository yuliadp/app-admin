<table border="1">
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
 </tr>
 <?php
 //query menampilkan data
 $sql = mysql_query("SELECT * FROM lpa");
 $no = 1;
 while($data = mysql_fetch_assoc($sql)){
 echo '
 <tr>
 <td>'.$no.'</td>
 <td>'.$data['no_laporan'].'</td>
 <td>'.$data['tanggal_masuk'].'</td>
 <td>'.$data['tujuan_penilaian'].'</td>
 <td>'.$data['nama_debitur'].'</td>
 <td>'.$data['alamat_debitur'].'</td>
 <td>'.$data['desa_kelurahan'].'</td>
 <td>'.$data['kecamatan'].'</td>
 <td>'.$data['kabupaten_kota'].'</td>
 <td>'.$data['propinsi'].'</td>
 <td>'.$data['marketing'].'</td>
 <td>'.$data['cabang'].'</td>
 <td>'.$data['divisi'].'</td>
 <td>'.$data['nama_penilai'].'</td>
 <td>'.$data['tanggal_survey'].'</td>
 <td>'.$data['tanggal_laporan'].'</td>
 <td>'.$data['status_penilaian'].'</td>
 <td>'.$data['jenis_jaminan'].'</td>
 <td>'.$data['mv'].'</td>
 <td>'.$data['lv'].'</td>
 <td>'.$data['keterangan'].'</td>
 <td>'.$data['nama_tl'].'</td>
 <td>'.$data['mv_tl'].'</td>
 <td>'.$data['lv_tl'].'</td>
 <td>'.$data['keterangan_tl'].'</td>
 <td>'.$data['tanggal_review_tl'].'</td>
 <td>'.$data['nama_uh'].'</td>
 <td>'.$data['mv_uh'].'</td>
 <td>'.$data['lv_uh'].'</td>
 <td>'.$data['keterangan_uh'].'</td>
 <td>'.$data['tanggal_review_uh'].'</td>
  <td>'.$data['nama_dh'].'</td>
 <td>'.$data['mv_dh'].'</td>
 <td>'.$data['lv_dh'].'</td>
 <td>'.$data['keterangan_dh'].'</td>
 <td>'.$data['tanggal_review_dh'].'</td>

 </tr>
 ';
 $no++;
 }
 ?>
</table>