<?php 
	if($_GET['id_dosen']) {
		include "koneksi.php";
		$qry_delete=mysqli_query($koneksi, "delete from dosen where id_dosen='".$_GET['id_dosen']."'");
		if ($qry_delete) {
			echo "<script>alert('Sukses Hapus Jurusan');location.href='datadosen.php';</script>";
		}else{
			echo "<script>alert('Gagal Hapus Jurusan');location.href='datadosen.php';</script>";
		}
	}
?>