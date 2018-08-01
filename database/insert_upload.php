<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form
				$no_laporan    			 = $_POST['no_laporan'];
				$tanggal_masuk			 = date("Y-m-d");
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
				$tanggal_survey		     = date("Y-m-d");
				$tanggal_laporan   		 = date("Y-m-d");
				$status_penilaian		 = $_POST['status_penilaian'];
				$jenis_jaminan			 = $_POST['jenis_jaminan'];
				$mv	                     = $_POST['mv'];
				$lv          			 = $_POST['lv'];
				$keterangan		         = $_POST['keterangan'];
				$nama_tl 			     = $_POST['nama_tl'];
				$mv_tl		             = $_POST['mv_tl'];
				$lv_tl			         = $_POST['lv_tl'];
				$keterangan_tl	         = $_POST['keterangan_tl'];
				$tanggal_review_tl		 = date("Y-m-d");
				$nama_uh 			     = $_POST['nama_uh'];
				$mv_uh   	             = $_POST['mv_uh'];
				$lv_uh  		         = $_POST['lv_uh'];
				$keterangan_uh	         = $_POST['keterangan_uh'];
				$tanggal_review_uh		 = date("Y-m-d");
				$nama_dh 			     = $_POST['nama_dh'];
				$mv_dh	                 = $_POST['mv_dh'];
				$lv_dh			         = $_POST['lv_dh'];
				$keterangan_dh	         = $_POST['keterangan_dh'];
				$tanggal_review_dh		 = date("Y-m-d");
				$file   		         = $_POST['file'];


//simpan data ke database
$query = mysql_query("INSERT INTO lpa VALUES(NULL, '$no_laporan', '$tanggal_masuk', '$tujuan_penilaian', '$nama_debitur', '$alamat_debitur', '$desa_kelurahan', '$kecamatan', '$kabupaten_kota', '$propinsi', '$marketing', '$cabang', '$divisi', '$nama_penilai', '$tanggal_survey', '$tanggal_laporan', '$status_penilaian', '$jenis_jaminan', '$mv', '$lv', '$keterangan', '$nama_tl', '$mv_tl', '$lv_tl', '$keterangan_tl', '$tanggal_review_tl', '$nama_uh', '$mv_uh', '$lv_uh', '$keterangan_uh', '$tanggal_review_uh', '$nama_dh', '$mv_dh', '$lv_dh', '$keterangan_dh', '$tanggal_review_dh', '&file')") or die(mysql_error());

if ($query) {
	header('location:upload.php?message=success');
}
?>
