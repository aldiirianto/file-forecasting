<?php include "_header.php"; ?>

	<div>
		<form action="tampil.php" method="post">
			Peramalan jumlah qty untuk 
			<select name="date" required>
				<?php
				for ($i = 1; $i <= 10; $i++) {
					echo "<option value='$i'>$i</option>";
				}
				?>
			</select> 
			periode berikutnya <input type="submit" name="prediksi" value="Prediksi">
		</form>
	</div>
	<div>
		<a href="./">
			<button>Halaman Utama</button>
		</a>
	</div>

<?php include "_footer.php"; ?>