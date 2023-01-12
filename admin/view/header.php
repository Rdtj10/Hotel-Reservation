<?php
	session_start();
	require_once "fungsi/koneksi.php";
	if(!isset($_SESSION['ceklog'])) {
?>
		<html>
		<head>
		<title></title>
		<script type="text/javascript" src="../lib/sweet.js"></script>
		</head>
		<body>
			<script>
				swal({
			  		title: 'Oops...?',
			  		text: 'Silahkan Login Terlebih Dahulu!',
			  		showConfirmButton: false,
			  		type: 'warning',
			  		backdrop: 'rgba(123,0,0,5)',
				});
				window.setTimeout(function(){
					window.location.replace('index.php');
		 		} ,2000); 
		 	</script>;
		</body>
		</html>
<?php
	}	
?>

<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<header>
	<div id="top-header">
		<div id="logo">
			<img src="gambar/logo.png" />
		</div>
	<nav>
		<div id="menu">
		<ul>
			<li class="active"><a href="#">Home</a></li>
			<li><a href="#">About Us</a></li>
			<li><a href="#">Our Products</a></li>
			<li><a href="#">Contact Us</a></li>
		</ul>
		</div>
	</nav>
	</div>
</header>
	<main>
		<ul>
			<li><a href="beranda" class="kiri">Beranda Admin</a></li>
			<li><a href="pemesanan" class="kiri">Pemesanan</a></li>
			<li><a href="inputkamar" class="kiri">Input Kamar</a></li>
			<li><a href="datakamar" class="kiri">Data Kamar</a></li>
			<li><a href="stokkamar" class="kiri">Stok Kamar</a></li>
			<li><a href="databayar" class="kiri">Data Pembayaran</a></li>
			<li><a href="konfirmasi" class="kiri">Konfirmasi Pesanan</a></li>
			<li><a href="transaksiberhasil" class="kiri">Transaksi Sukses</a></li>
			<li><a href="transaksibatal" class="kiri">Transaksi Batal</a></li>
			<li><a href="kontak" class="kiri">Kontak</a></li>
			<li><a href="fungsi/proseskeluar" class="kiri">Keluar</a></li>
		</ul>
		
	</main>