<?php include "_header.php"; ?>

	<form action="simpan.php" method="post">
		<fieldset style="width: 25%; margin-bottom: 5px;">
			<legend>Input Data Penjualan</legend>
			<table border="0">
			{{ $barangs->nama_barang }}
				<tr>
					<td>Tanggal Transaksi</td>
					<td>:</td>
					<td>
						<input type="date" name="date" value="date" required method="post">
					</td>
				</tr>
				<tr>
					<td>Nama Produk</td>
					<td>:</td>
					<td>
						<select name="nm_produk" class="form-control">
							<?php $sql = mysqli_query($conn, "SELECT * FROM tbl_produk");
                            while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                <option value="<?php echo $row['id_produk'] ?>"><?php echo $row['nm_produk'] ?></option>
                            <?php } ?>
                        </select>
					</td>
				</tr>
				<tr>
					<td>Qty</td>
					<td>:</td>
					<td>
					<input id="spinner-basic" name="qty" class="form-control" min="0" value="0" required>
					</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td>
						<input type="submit" name="simpan" value="Simpan">
					</td>
				</tr>
			</table>
		</fieldset>
	</form>

	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>

<?php include "_footer.php"; ?>