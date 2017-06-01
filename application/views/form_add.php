<html>
	<head>
		<title>Tabel Barang</title>
	</head>
	<body>
		<form method="POST" action="<?php echo base_url()."index.php/crud/do_insert"; ?>" enctype="multipart/form-data">
		<table>
			<tr>
				<td>No</td>
				<td><input type="text" name="id" /></td>
			</tr>
			<tr>
				<td>Nama Barang</td>
				<td><input type="text" name="nama_barang" /></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><input type="text" name="jumlah" /></td>
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="text" name="status" /></td>
			</tr>
			<tr>
			<tr>
				<td>Foto</td>
				<form action="/action_page.php">
				<td><input type="file" name="foto" accept="image/*"><td>
				</form>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="btnSubmit" value="Simpan" /></td>
			</tr>
		</table>
		</form>
	</body>
</html>