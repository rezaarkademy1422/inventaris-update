<?php 
require_once 'Koneksi.php';
require_once 'functionall.php';

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Data Transaksi Laptop</title>
 
</head>
<body>
	
<section id="input-form">
<div class="" style="display: flex; flex-direction: column;">
	
<div style="">
	<img src="img/tslpt.png" style="width: 100px; height: 100px; padding: 10px;" align="left">
	<h1>INPUT DATA Transaksi Laptop</h1>
</div>
	<div >
	<a href="Home.php" style="background-color: red;">Kembali</a>
	<a href="cariTSLPT.php"  >Cari Data Transaksi</a>
	
	</div>

</div>
<form method="post" enctype= "multipart/form-data" action="functionall.php" >
	<div class="form">
		<label>Tanggal Peminjaman</label>
	<input type="date" name="tglpeminjaman" placeholder="...">
	</div>

		<div class="form">
		<label>Kode Barang Yang Akan Di Pinjam</label>
	<input type="text" name="kodebarang" placeholder="..." >
	</div>

	<div class="form">
		<label>Merk Handphone</label>
	<input type="text" name="merk" placeholder="...">
	</div>

	<div class="form">
		<label>Tipe</label>
	<input type="text" name="type" placeholder="">
	</div>

	<div class="form">
		<label>Serial Number</label>
	<input type="text" name="sn" placeholder="...">
	</div>


		<div class="form">
		<label>Status</label>
	<input type="text" name="status" placeholder="...">
	</div>

		<div class="form">
		<label>Keterangan</label>
	<input type="text" name="keterangan" placeholder="...">
	</div>
	
		<div class="form">
		<label>No ID</label>
	<input type="number" name="noid" placeholder="...">
	</div>
	
		<div class="form">
		<label>Nama Peminjam</label>
	<input type="text" name="nama" placeholder="...">
	</div>


		<div class="form">
		<label>Jabatan</label>
	<input type="text" name="jabatan" placeholder="...">
	</div>

		<div class="form">
		<label>Pendidikan Terakhir</label>
	<input type="text" name="pendidikanakhir" placeholder="...">
	</div>

	<div class="form">
		<label>Jenis Kelamin</label>
	<input type="text" name="jeniskelamin" placeholder="...">
	</div>
	
	<div class="form">
		<label>Tempat Tanggal Lahir</label>
	<input type="text" name="ttl" placeholder="Contoh : Bogor, 14 Febuari 2002">
	</div>
	
	<div class="form">
		<label>Alamat</label>
	<input type="text" name="alamat" placeholder="...">
	</div>

	<div class="form">
		<label>Tahun Masuk</label>
	<input type="text" name="tahunmasuk" placeholder="...">
	</div>

	<div class="form">
		<label>Nomor Handphone</label>
	<input type="text" name="jeniskelamin" placeholder="...">
	</div>
	<div class="form">
		<label>Tanggal Pengembalian</label>
	<input type="date" name="tglpengembalian" placeholder="...">
	</div>
		
	<div class="form">
<button type="submit" name="btn-tmbhTSLPT" style="background-color: green; height: 50px; width: 100%; color: white; font-size: 20px; " onclick="berhasil()">Tambah</button>
</div>

</form>


</section>
<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Ditambahkan");
		
	
	}
</script>


</body>
</html>


<!-----Gimana Nch---->

<style type="text/css">
	body{
		background-color: lightgray;
		padding: 10px;
		font-family: 'Helvetica', sans-serif;
	}
section#input-form{
	position: relative;
	max-width: 80%;
	margin-left: 10%;
	margin-right: 10%;
	margin-top: 30px;
	border-radius: 6px;
	background-color: #fff;
	box-shadow: 1px 1px 1px 1px black;
	padding: 30px;

}

#input-form .form{
	width: 100%;
	display: grid;
	margin-top: 10px;
	margin-bottom: 15px;

}
label{
	font-family: 'Helvetica', sans-serif;
	font-size: 16px;
	color: #333;
	font-weight: 600;

}
input{
	font-family: 'Helvetica', sans-serif;
	padding: 10px 20px 10px 20px;
	outline: none;
	border-radius: 3px;
	border:1px solid #8888;
	margin-top: 5px;
	margin-bottom: 5px;
	font-size: 16px;

}
a{
	 background-color: green; padding:15px; float: right;
	margin: 0px 10px; 
	text-decoration: none;
	color: white;
	text-align: center;
	box-shadow: 1px 1px 1px black;
}

</style>










