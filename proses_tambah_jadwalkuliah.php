<?php 
if ($_POST) {
	$hari=$_POST['hari'];
    $jam=$_POST['jam'];
	if (empty($hari)) {
		echo "<script>alert('Hari Tidak Boleh Kosong');location.href='tambah_jadwalkuliah.php';</script>";
    }elseif (empty($jam)) {
		echo "<script>alert('Jam Tidak Boleh Kosong');location.href='tambah_jadwalkuliah.php';</script>";
    }else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into jadwalkuliah (hari, jam) value ('".$hari."','".$jam."')")or die(mysqli_error($koneksi));
		if ($insert) {
			echo "<script>alert('Sukses Menambahkan Data');location.href='datajadwalkuliah.php';</script>";
		}else{
			echo "<script>alert('Gagal Menambahkan Data');location.href='tambah_jadwalkuliah.php';</script>";
		}
	}
}
?>