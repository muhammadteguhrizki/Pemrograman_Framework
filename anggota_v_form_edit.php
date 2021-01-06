<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
	Tambah Data Anggota
	<?php foreach($nilai as $dt){ ?>
	<form action="<?php echo site_url().'/anggota/update'; ?>" method="post">
		<table>
			<input type="hidden" name="nim" value="<?php echo $dt->nim ?>">
			<tr>
				<td>Nim</td>
				<td><input type="text" name="nim" value="<?php echo $dt->nim ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $dt->nama ?>"></td>
			</tr>
			<tr>
				<td>Progdi</td>
				<td>
					<select name="progdi">
						<option value="<?php echo $dt->progdi ?>"><?php echo $dt->progdi ?></option>
						<option value="">--- pilih progdi ---</option>
						<option value="S1 Teknik Informatika">S1 Teknik Informatika</option>
						<option value="S1 Sistem Informasi">S1 Sistem Informasi</option>
						<option value="S1 Ilmu Komunikasi">S1 Ilmu Komunikasi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php } ?>