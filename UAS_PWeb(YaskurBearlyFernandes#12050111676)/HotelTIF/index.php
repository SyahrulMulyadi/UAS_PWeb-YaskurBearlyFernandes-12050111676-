<?php
	require_once "view/header.php";

?>

<script type="text/javascript">
	function pilih() {
		var type = document.opsi.tipe.value;
		var teks = document.getElementById('selek').options[document.getElementById('selek').selectedIndex].text;
		document.opsi.harga.value = type;
		document.opsi.tipex.value = teks;

	}
</script>
<div>
	<img src="gambar/logo.png" width="100px" style="margin-left: -1110px; margin-top: -70px; margin-bottom: 20px;">
</div>

	<div id="imgindex">
		<div id="imglog">
			
			<p><br>Selamat Datang *** HOTEL TIF<br>

				<br>

		</div>

	</div>

			<div id="reservasi">
				<li>Reservasi</li>
				<form method="post" action="user/pemesanan" name="opsi">
					<table>
						<tr>
							<td>Check-In</td>
							<td>Check-Out</td>
							<td>Type</td>
							<td>Harga/Malam</td>
							<td></td>
						</tr>
						<tr>
							<td>
								<input type="date" name="cekin">
							</td>
							<td>
								<input type="date" name="cekout">
							</td>
							<td>
								<select name="tipe" id="selek" required="required" onchange="pilih()" style="font-weight: bold;">
									<option selected="selected" disabled="disabled">-Pilih-</option>
									<option value="Rp 410.000">Superior</option>
									<option value="Rp 450.000">Deluxe</option>
									<option value="Rp 700.000">Junior Suite</option>
									<option value="Rp 1.200.000">Executive</option>
								</select>
							</td>
							<td>
								<input type="text" name="harga" style="width: 100px;" onchange="pilih()">
								<input type="hidden" name="tipex" style="width: 100px;" onchange="pilih()">
							</td>
							<td>
								<input type="submit" name="ok" value="Pesan" id="tombol">
							</td>
						</tr>
					</table>
				</form>
			</div>

			<div id="tentang">
				<h3>Tentang Kami</h3><br>
				<p>
					Hotel Tif adalah cabang dari UIN SUSKA RIAU yang terletak di pusat Pekanbaru, tepatnya di Jalan Rimbo Panjang. Hotel ini merupakan hotel bintang tiga yang berlokasi strategis di pinggir kota pekanbaru. Lokasi yang sempurna dan akses mudah ke daerah luar kota membuat Hotel Tif tempat yang bagus untuk pengunjung yang singgah. Hotel ini memiliki total 58 kamar yang terdiri atas 7 Kamar Superior, 45 Kamar Deluxe, 4 Suite Junior, dan 2 Suite Eksekutif.
				</p><br>
				<p>
					Hotel Tif berjarak sekitar 12 km dari Stadion Utama Riau. Gedung MTQ yang merupakan landmark kota pekanbaru bisa ditempuh dengan berkendara kurang dari tiga puluh menit, sementara pusat perbelanjaan dapat diakses dengan lima menit berkendara dari penginapan.
				</p>
			</div>

			

			<div id="petalokasi">
				<h3>Peta Lokasi</h3><br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.685731012926!2d101.35557881355783!3d0.4671071996592129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3507bfa7b6f5d243!2sFakultas%20Sains%20dan%20Teknologi%20UIN%20SUSKA%20RIAU!5e0!3m2!1sid!2sid!4v1656497993609!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>

			<div id="cekinout">
				<h3>INFORMASI</h3><br>
				<h4>Check-In</h4>
				<p>Jam Check-In Standar : 12.00 WIB</p>
				<p>*Waktu Check-In dari plan mempunyai prioritas lebih besar</p><br>
				<h4>Check-Out</h4>
				<p>Jam Check-Out Standar : 12.00 WIB</p>
				<p>*Waktu Check-Out dari plan mempunyai prioritas lebih besar</p><br>
			</div>
			</center>
	

<?php
	require_once "view/footer.php"
?>
