<?php 
require_once 'Koneksi.php';
require_once 'functionall.php';

 ?>

<!DOCTYPE html>
<html>
<head>
 <title>Data Stok Barang</title>
 
</head>
<body>
	
<section id="input-form">
<div class="" style="display: flex; flex-direction: column;">
	
<div style="">
	<img src="img/stokbrg.png" style="width: 100px; height: 80px; padding: 10px;" align="left">
	<h1>INPUT DATA Stok Barang</h1>
</div>
	<div >
	<a href="Home.php" style="background-color: red;">Kembali</a>
	<a href="cariSTKBRG.php"  >Cari Data Stok Barang</a>
	
	</div>

</div>
<form method="post" enctype= "multipart/form-data" action="functionall.php" >
	<div class="form">
		<label>Kode Barang</label>
	<input type="text" name="kodebarang" placeholder="...">
	</div>

		<div class="form">
		<label>Nama Barang</label>
	<input type="text" name="nama" placeholder="..." >
	</div>

	<div class="form">
		<label>Jenis Barang</label>
	<input type="text" name="jenis" placeholder="...">
	</div>

	<div class="form">
		<label>Ukuran Barang</label>
	<input type="text" name="ukuran" placeholder="">
	</div>

	
		<div class="form">
		<label>Satuan Barang</label>
	<input type="text" name="satuan" placeholder="...">
	</div>

		<div class="form">
		<label>Stok Barang</label>
	<input type="text" name="stockawal" placeholder="...">
	</div>
	
	<div class="form">

<button type="submit" name="btn-tmbhstok" style="background-color: green; height: 50px; width: 100%; color: white; font-size: 20px; " onclick="berhasil()">Tambah</button>
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










