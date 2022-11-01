<?php
if($_POST){
	$datajurusan= $_POST['id_jurusan'];

	if (empty($datajurusan)) {
		echo "<script>alert('nama jurusan tidak boleh kosong');location.href='tambah_jurusan.php';</script>";

	}else {
		include "koneksi.php";
		$insert= mysqli_query($koneksi, "INSERT INTO jurusan(nama) VALUE('".$datajurusan."')") or die (mysqli_error($koneksi));

		if($insert) {
		echo "<script>alert('Sukses menambahkan jurusan baru');location.href='datajurusan.php';</script>";

		}else {
		echo "<script>alert('Gagal menambahkan jurusan baru');location.href='datajurusan.php';</script>";

		}
	}
}
?>