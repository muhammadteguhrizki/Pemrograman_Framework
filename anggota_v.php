<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
Selamat datang di menu kelola data anggota
<br>
Data daftar anggota yang tersedia :
<br><br>
<?php echo anchor('anggota/add','Tambah Data Anggota'); ?>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nim</td>
			<td>Nama</td>
			<td>Progdi</td>
			<td>Aksi</td>
		</tr>
		<?php
			$no=0;
			foreach ($query->result_array() as $row) {
				$no++;
				echo " <tr>
							<td>".$no."</td>
							<td>".$row['nim']."</td>
							<td>".$row['nama']."</td>
							<td>".$row['progdi']."</td>
							<td>".anchor('anggota/edit/'.$row['nim'].'','Edit')."/".anchor('anggota/hapus/'.$row['nim'].'','Hapus')."
							</td>
						</tr>";
			}
		?>
	</table>
</body>
</html>