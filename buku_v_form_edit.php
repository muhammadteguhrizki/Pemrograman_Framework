<!DOCTYPE html>
<html>
<head>
	<title>perpus</title>
</head>
<body>
	Tambah Data Buku
	<?php foreach($nilai as $dt){ ?>
	<form action="<?php echo site_url().'/buku/update'; ?>" method="post">
		<table>
			<input type="hidden" name="idbuku" value="<?php echo $dt->idbuku ?>">
			<tr>
				<td>Judul</td>
				<td><input type="text" name="judul" value="<?php echo $dt->judul ?>"></td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="pengarang" value="<?php echo $dt->pengarang ?>"></td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td><input type="text" name="kategori" value="<?php echo $dt->kategori ?>"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="update"></td>
			</tr>
		</table>
	</form>

</body>
</html>
<?php } ?>