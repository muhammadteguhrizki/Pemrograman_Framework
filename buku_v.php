<!DOCTYPE html>
<html>
<head>
	<title>perpus</title>
</head>
<body>
Selamat datang di menu kelola data buku
<br>
Buku yang tersedia :
<br><br>
<?php echo anchor('buku/add','Tambah Data Buku'); ?>
	<table border="1">
		<tr>
			<td>NO</td>
			<td>Judul</td>
			<td>Pengarang</td>
			<td>Kategori</td>
			<td>Aksi</td>
		</tr>
		<?php
			$no=0;
			foreach ($query->result_array() as $row) {
				$no++;
				echo " <tr>
			
							<td>".$no."</td>
							<td>".$row['judul']."</td>
							<td>".$row['pengarang']."</td>
							<td>".$row['kategori']."</td>
							<td>".anchor('buku/edit/'.$row['idbuku'].'','Edit')."/ 
								".anchor('buku/hapus/'.$row['idbuku'].'','Hapus')."
							</td>
						</tr>";
			}
		?>
	</table>

</body>
</html>