<?php
	require_once "view/header.php";
?>
	<aside>
		<center>
		<div id="forminput">
		<h3>Input Kamar</h3>
		<form method="post" action="fungsi/inputtamu" enctype="multipart/form-data">
			<table>
				<tr>
					<td class="table">Email</td>
					<td class="table"><input type="email" required="required" name="email"></td>
				</tr>
				<tr>
					<td class="table">Nama</td>
					<td class="table"><input type="text" required="required" name="nama"></td>
				</tr>
				<tr>
					<td class="table">Alamat</td>
					<td class="table"><input type="text" required="required" name="alamat"></td>
				</tr>
				<tr>
					<td class="table">No.Telp</td>
					<td class="table"><input type="text" required="required" name="telepon"></td>
				</tr>
				<tr>
					<td class="table"></td>
					<td class="table"><button type="submit" style="width:100px;background:#008B8B; color:white;font-weight:bold;padding:4px;border:2px solid white;">Input</button></td>
				</tr>
			</table>
		</form>
		</div>
		</center>
	</aside>

<?php
	require_once "view/footer.php"
?>
