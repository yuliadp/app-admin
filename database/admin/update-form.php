<?php
include('config.php');

                $no_laporan              = $_POST['no_laporan'];
                $tanggal_masuk			 = $_POST['tanggal_masuk'];
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
				$tanggal_survey		     = $_POST['tanggal_survey'];
				$tanggal_laporan   		 = $_POST['tanggal_laporan'];
				$status_penilaian		 = $_POST['status_penilaian'];
				$jenis_jaminan			 = $_POST['jenis_jaminan'];
				$mv	                     = $_POST['mv'];
				$lv          			 = $_POST['lv'];
				$keterangan		         = $_POST['keterangan'];
				$nama_tl 			     = $_POST['nama_tl'];
				$mv_tl		             = $_POST['mv_tl'];
				$lv_tl			         = $_POST['lv_tl'];
				$keterangan_tl	         = $_POST['keterangan_tl'];
				$tanggal_review_tl		 = $_POST['tanggal_review_tl'];
				$nama_uh 			     = $_POST['nama_uh'];
				$mv_uh   	             = $_POST['mv_uh'];
				$lv_uh  		         = $_POST['lv_uh'];
				$keterangan_uh	         = $_POST['keterangan_uh'];
				$tanggal_review_uh		 = $_POST['tanggal_review_uh'];
				$nama_dh 			     = $_POST['nama_dh'];
				$mv_dh	                 = $_POST['mv_dh'];
				$lv_dh			         = $_POST['lv_dh'];
				$keterangan_dh	         = $_POST['keterangan_dh'];
				$tanggal_review_dh		 = $_POST['tanggal_review_dh'];
				
				if(!empty($_POST['file'])){
				$allowed_ext  	= array('doc', 'docx', 'xls', 'xlsx', 'ppt', 'pptx', 'pdf', 'rar', 'zip');
				$file_name		= $_FILES['file']['name'];
				$file_ext		= substr($file_name, strrpos($file_name, '.')+1);
				$file_size		= $_FILES['file']['size'];
				$file_tmp		= $_FILES['file']['tmp_name'];
				
				$file    				 = $_FILES['file']['name'];
				
				echo "c";
 				if($file != "")
				{
				echo "a";
				if(in_array($file_ext, $allowed_ext) === true)
					{
					if($file_size < 1000000)
						{
						$lokasi = 'file_upload/'.$file_name.'.'.$file_ext;
						move_uploaded_file($file_tmp, $lokasi);
						$in = mysql_query("update lpa set  tanggal_masuk='$tanggal_masuk', tujuan_penilaian='$tujuan_penilaian', nama_debitur='$nama_debitur', alamat_debitur='$alamat_debitur', desa_kelurahan='$desa_kelurahan', kecamatan='$kecamatan', kabupaten_kota='$kabupaten_kota', propinsi='$propinsi', marketing='$marketing', cabang='$cabang', divisi='$divisi', nama_penilai='$nama_penilai', tanggal_survey='$tanggal_survey', tanggal_laporan='$tanggal_laporan', status_penilaian='$status_penilaian', jenis_jaminan='$jenis_jaminan', mv='$mv', lv='$lv', keterangan='$keterangan', nama_tl='$nama_tl', mv_tl='$mv_tl', lv_tl='$lv_tl', keterangan_tl='$keterangan_tl', tanggal_review_tl='$tanggal_review_tl', nama_uh='$nama_uh', mv_uh='$mv_uh', lv_uh='$lv_uh', keterangan_uh='$keterangan_uh', tanggal_review_uh='$tanggal_review_uh', nama_dh='$nama_dh', mv_dh='$mv_dh', lv_dh='$lv_dh', keterangan_dh='$keterangan_dh', tanggal_review_dh='$tanggal_review_dh', file='$file' where no_laporan='$no_laporan'");
						if($in)
							{
									header('location:view-form.php?message=success');
							}
						else
							{
							//echo '<div class="error">ERROR: Gagal upload file!</div>';
							echo '<div class="ok">SUCCESS: File berhasil di Upload!</div>';
							}
						}
					else
						{
						echo '<div class="error">ERROR: Besar ukuran file (file size) maksimal 1 Mb!</div>';
						}
					}
				else
					{
					echo '<div class="error">ERROR: Ekstensi file tidak di izinkan!</div>';
					}
				}
				}
				else
				{
				echo "b";
				$query = mysql_query("update lpa set  tanggal_masuk='$tanggal_masuk', tujuan_penilaian='$tujuan_penilaian', nama_debitur='$nama_debitur', alamat_debitur='$alamat_debitur', desa_kelurahan='$desa_kelurahan', kecamatan='$kecamatan', kabupaten_kota='$kabupaten_kota', propinsi='$propinsi', marketing='$marketing', cabang='$cabang', divisi='$divisi', nama_penilai='$nama_penilai', tanggal_survey='$tanggal_survey', tanggal_laporan='$tanggal_laporan', status_penilaian='$status_penilaian', jenis_jaminan='$jenis_jaminan', mv='$mv', lv='$lv', keterangan='$keterangan', nama_tl='$nama_tl', mv_tl='$mv_tl', lv_tl='$lv_tl', keterangan_tl='$keterangan_tl', tanggal_review_tl='$tanggal_review_tl', nama_uh='$nama_uh', mv_uh='$mv_uh', lv_uh='$lv_uh', keterangan_uh='$keterangan_uh', tanggal_review_uh='$tanggal_review_uh', nama_dh='$nama_dh', mv_dh='$mv_dh', lv_dh='$lv_dh', keterangan_dh='$keterangan_dh', tanggal_review_dh='$tanggal_review_dh' where no_laporan='$no_laporan'") or die(mysql_error());
				
				if ($query) {
						header('location:view-form.php?message=success');
						}
				}
				




?>
				
			