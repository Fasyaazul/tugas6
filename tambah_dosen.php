<html>
    <head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<meta charset="utf-8">
</head>

<body>
    <h3>Tambah data dosen</h3>
<form action="proses_tambah_dosen.php" method="POST">
    nama    :
    <input type="text" name ="nama_dosen" class="form-control" placeholder="masukkan nama disini"><br>
    alamat  :
    <textarea name="alamat" cols="30" rows="10" class="form-control" placeholder="masukkan alamat disini"></textarea> <br>
    telepon :
    <input type="number" name="telepon" class="form-control" placeholder="masukkan telepon disini"> <br>
    <input type="submit" name="simpan" value="tambah dosen" class="btn btn-primary">
</from>

</body>
</html>