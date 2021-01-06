<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
	Tambah data Transaksi Pinjam Buku
	<form action="<?php echo site_url().'/pinjam/simpan'; ?>" method="post">
		<table>
			<tr>
				<td>Nim</td>
				<td>
					<?php
						$qanggota = $this->db->get('tb_anggota');
					?>
					<select name="nim">
						<option value="">--- pilih nim / nama ---</option>
						<?php
							foreach ($qanggota->result_array() as $qa){
								echo "<option value='".$qa['nim']."'>".$qa['nim']."/".$qa['nama']."</option>";
							}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Nama Buku</td>
				<td>
					<?php
						$qbuku = $this->db->get('tb_buku');
					?>
					<select name="buku">
						<option value="">--- pilih Buku ---</option>
						<?php
							foreach ($qbuku->result_array() as $qb){
								echo "<option value='".$qb['idbuku']."'>".$qb['judul']."</option>";
							}
						?>
					</select>	
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="text" name="tgl_pinjam" placeholder="yyyy-mm-dd"></td> <td>Tahun-Bulan-Tanggal</td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="text" name="tgl_kembali" placeholder="yyyy-mm-dd"></td> <td>Tahun-Bulan-Tanggal</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Tambah"></td>
			</tr>
		</table>
	</form>
</body>
</html>