<html>
	<head>
		<title>Tabel Barang</title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_update"; ?>">
		<table>
			<tr>
				<td>No</td>
				<td><input type="text" name="id" value="<?php echo $id; ?>" readonly /></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" value="<?php echo $nama_barang; ?>" /></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" value="<?php echo $jumlah; ?>" /></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" value="<?php echo $status; ?>" /></td>
			</tr>
			<tr>
				<td>
				</td>
				<td>
					<input type="submit" name="btnSubmit" value="Simpan" />
				</td>
			</tr>
		</table>
		</form>
	</body>
</html>