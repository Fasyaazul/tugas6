<?php
?>
<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
	<title>Dosen</title>
</head>
<body>
	<h3>Data Dosen</h3>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA DOSEN</th>
				<th>ALAMAT</th>
                <th>TELEPON</th>
				<th>AKSI</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include "koneksi.php";
			$qry_dosen=mysqli_query($koneksi,"select *from dosen");
			$no=0;
			while($data_dosen=mysqli_fetch_array ($qry_dosen)){
				$no++;?>
			<tr>
                <td><?=$no?></td>
				<td><?=$data_dosen['nama_dosen']?></td>
				<td><?=$data_dosen["alamat"]?></td>
                <td><?=$data_dosen["telepon"]?></td>                
            <td><a href = "edit_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"
            class= "btn btn-success">edit</a>
            <a href ="delete_dosen.php?id_dosen=<?=$data_dosen['id_dosen']?>"
            onclick="return confirm('apakah anda yakin menghapus data ini?')"class="btn btn-danger">
            delete</a></td>
			</tr>
			<?php
			
			}
			?>
		</tbody>
	</table>
	<center>
	<a href="tambah_dosen.php" class="btn btn-primary">tambah dosen</a>
</body>
</html>
<?php 

?>


