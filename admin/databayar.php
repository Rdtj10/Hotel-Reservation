<?php
	require_once "view/header.php";
?>

	<aside>
		<center>
			<h3>Data Pembayaran</h3>
			<div id="kanan">
				<table class="tabel1" border="0px solid black">
				<tr style="background: rgba(0,0,10,0.5); color: white;">
					<th>Kode</th>
					<th>Nama</th>
					<th>Jumlah</th>
					<th>Bank</th>
					<th>No Rekening</th>
					<th>Nama Pemilik Rekening</th>
				</tr>
				<?php
					$sql = $pdo->query("SELECT * FROM pembayaran");
			  		while ($caridata = $sql->fetch()) {
			  		$id = $caridata['idpesan'];
			  		$nama = $caridata['nama'];
			  		$jumlah = $caridata['jumlah'];
			  		$bank = $caridata['bank'];
			  		$norek = $caridata['norek'];
			  		$namarek = $caridata['namarek'];

  				?>
				<tr align="center">
					<td><?php echo $id ?></td>
					<td><?php echo $nama ?></td>
					<td><?php echo $jumlah ?></td>
					<td><?php echo $bank ?></td>
					<td><?php echo $norek ?></td>
					<td><?php echo $namarek ?></td>
				</tr>
				<?php
			  	}
			  ?>
			  </table>
			  
			  <a href="laporan-pembayaran" target="_blank"><button id="laporan" style="width:150px;background:white;color:black;font-weight:bold;padding:4px;border:2px solid white; margin-top: 5px;">Cetak Laporan</button></a>
			</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>