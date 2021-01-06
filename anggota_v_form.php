<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
	Tambah Data Anggota
	<form action="<?php echo site_url().'/anggota/simpan'; ?>" method="post">
		<table>
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input typr="text" name="nama"></td>
			</tr>
			<tr>
				<td>Progdi</td>
				<td>
					<select name="progdi">
						<option value="">--- pilih progdi ---</option>
						<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
						<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
						<option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>