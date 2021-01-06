<!DOCTYPE html>
<html>
<head>
	<title>Perpus</title>
</head>
<body>
	Tambah data Transaksi Pinjam Buku
	<?php foreach($nilai as $dt){ ?>
	<form action="<?php echo site_url().'/pinjam/update'; ?>" method="post">
		<table>
			<input type="hidden" name="id" value="<?php echo $dt->idpinjam ?>">
			<tr>
				<td>Nim</td>
				<td>
					<select name="nim">
						<?php
							$qag = $this->db->query("SELECT * FROM tb_anggota WHERE nim = '$dt->nim' LIMIT 1");
							$qav = $qag->row_array();
							echo "<option value='".$qav['nim']."'>".$qav['nim']."/".$qav['nama']."</option>";
						?>
						<option value="">--- pilih nim / nama ---</option>
						<?php
							$qanggota = $this->db->get('tb_anggota');
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
					<select name="buku">
						<?php
							$qbk = $this->db->query("SELECT * FROM tb_buku WHERE idbuku = '$dt->idbuku' LIMIT 1");
							$qbku = $qbk->row_array();
							echo "<option value='".$qbku['idbuku']."'>".$qbku['judul']."</option>";
						?>
						<option value="">--- pilih Buku ---</option>
						<?php
							$qbuku = $this->db->get('tb_buku');
							foreach ($qbuku->result_array() as $qb){
								echo "<option value='".$qb['idbuku']."'>".$qb['judul']."</option>";
							}
						?>
					</select>	
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="text" name="tgl_pinjam" placeholder="yyyy-mm-dd" value="<?php echo $dt->tgl_pinjam ?>"></td>
				<td>Tahun-Bulan-Tanggal</td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="text" name="tgl_kembali" placeholder="yyyy-mm-dd" value="<?php echo $dt->tgl_kembali ?>"></td> 
				<td>Tahun-Bulan-Tanggal</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Edit"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php } ?>