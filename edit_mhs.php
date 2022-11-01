<?php
include "css.php";
include "koneksi.php";
$qry_get_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa where id_mahasiswa = '".$_GET['id_mahasiswa']."'");
$data_mahasiswa=mysqli_fetch_array($qry_get_mahasiswa);
?>
<h3>Ubah Mahasiswa</h3>
<form action="proses_edit.php" method="post">
	<input type="hidden" name="id_mahasiswa" value= "<?=$data_mahasiswa['id_mahasiswa']?>">
	Nama 		:
	<input type="text" name="Nama" value= "<?=$data_mahasiswa['nama']?>" class="from-control">
	NIM  		:
	<input type="text" name="NIM" value="<?=$data_mahasiswa['nim']?>" class="from-control">
	Alamat  	:
	<input type="text" name="Alamat" value="<?=$data_mahasiswa['alamat']?>" class="from-control">
	Username  	:
	<input type="text" name="Username" value="<?=$data_mahasiswa['username']?>" class="from-control">
	Password  	:
	<input type="text" name="Password" value="<?=$data_mahasiswa['password']?>" class="from-control">
	Jurusan  	:
	<input type="text" name="jurusan" value="<?=$data_mahasiswa['jurusan']?>" class="from-control">
	<input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
</form>
