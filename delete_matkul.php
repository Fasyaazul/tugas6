<?php 
	if($_GET['id_matkul']) {
		include "koneksi.php";
		$qry_delete=mysqli_query($koneksi, "delete from matakuliah where id_matkul='".$_GET['id_matkul']."'");
		if ($qry_delete) {
			echo "<script>alert('Sukses Hapus Jurusan');location.href='datamatkul.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus Jurusan');location.href='datamatkul.php';</script>";
		}
	}
?>