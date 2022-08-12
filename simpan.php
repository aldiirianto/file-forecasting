<?php
include "connection.php";
if(isset($_POST['simpan'])) {
	$tgl = $_POST['tgl_transaksi'];
	$jumlah = $_POST['qty'];
	$sql = mysqli_query($conn, "INSERT INTO tbl_penjualan (tgl_transaksi, qty) VALUES ('$tgl','$jumlah')") or die (mysqli_error($conn));
	if($sql) {
		echo "<script>alert('Berhasil menambahkan data'); window.location='./';</script>";
	}
}
?>