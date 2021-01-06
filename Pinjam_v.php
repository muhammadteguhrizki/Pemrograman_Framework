<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
Selamat datang di menu kelola Transaksi Pinjam Buku
<br>
Transaksi Yang Terdaftar :
<br><br>
<?php echo anchor('pinjam/add','Tambah Transaksi Pinjam'); ?>
	<table border="1">
		<tr>
			<td>No</td>
			<td>Nim</td>
			<td>Nama Peminjam</td>
			<td>Nama Buku</td>
			<td>Tanggal Pinjam</td>
			<td>Tanggal Kembali</td>
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
							<td>".$row['judul']."</td>
							<td>".$row['tgl_pinjam']."</td>
							<td>".$row['tgl_kembali']."</td>
							<td>".anchor('pinjam/edit/'.$row['idpinjam'].'','Edit')."/
								".anchor('pinjam/hapus/'.$row['idpinjam'].'','Hapus')."
							</td>
						</tr>";
			}
		?>
	</table>
</body>
</html>