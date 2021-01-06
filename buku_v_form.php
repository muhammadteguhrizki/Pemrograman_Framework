<!DOCTYPE html>
<html>
<head>
	<title>perpus</title>
</head>
<body>
	Tambah data buku
	<form action="<?php echo site_url().'/buku/simpan'; ?>" method="post">
		<table>
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>pengarang</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr>
				<td>kategori</td>
				<td><input type="text" name="kategori"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>

	</form>

</body>
</html>