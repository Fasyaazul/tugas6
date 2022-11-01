<?php
if($_POST){
	$id_mahasiswa=$_POST['id_mahasiswa'];
	$Nama=$_POST['Nama'];
	$NIM=$_POST['NIM'];
	$Alamat=$_POST['Alamat'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$Datajurusan=$_POST['id_jurusan'];


	if(empty($Nama)){
		echo "<script>alert('Nama mahasiswa tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($NIM)){
		echo "<script>alert('NIM tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($Alamat)){
		echo "<script>alert('Alamat tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($Username)){
		echo "<script>alert('Username tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($Password)){
		echo "<script>alert('Password tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else {
		include "koneksi.php";
		if(empty($password)) {
			$update=mysqli_query($koneksi,"update mahasiswa set nama = '".$Nama."',NIM='".$NIM."',alamat='".$Alamat."',Username
			='".$Username."', password='".$Password."' where id_mahasiswa = '".$id_mahasiswa."'") or die(mysqli_error($koneksi));
			if($update){
				echo "<script>alert('Sukses update mahasiswa');location.href='datamahasiswa.php';</script>";

			}else {
				echo "<script>alert('Gagal update mahasiswa');location.href='edit_mhs.php?id_mahasiswa=".$id_mahasiswa."';</script>";
			}
			}else {
				$update=mysqli_query($koneksi,"update mahasiswa set nama='".$Nama."',nim='".$NIM."',alamat='".$Alamat."',username='".$Username."',password='".$Password."' where id_mahasiswa = '".$id_mahasiswa."'") or die(mysqli_error($koneksi));
				if($update){
					echo "<script>alert('Sukses update mahasiswa');location.href='datamahasiswa.php';</script>";
				}else {
					echo "<script>alert('Gagal update mahasiswa');location.href='edit_mhs.php?id_mahasiswa=".$id_mahasiswa."';</script>";
				}
			}
		}
	}
?>