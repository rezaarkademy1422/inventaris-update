<img src="img/stokbrg.png" style="width: 130px; height: 100px" align="left">

<h1 style="padding: 10px; margin: 10px;">CARI DATA BARANG</h1>
<br><br>
<hr style="border:1px solid black">
<div class="search">
<form  method="post" >
		
		<input type="text" name="nt" placeholder="Cari kode Barang disini..">
		<button type="submit" name="cari2" value="cari"  class="btn">Cari</button>

<a href="stokbarang.php" style="background-color: red; padding: 10px; float: right; margin: 10px; box-shadow: 1px 1px 1px 1px black ;">Kembali</a>
<h3 style="margin: 10px; " ><b>Hasil Pencarian :</b></h3>
</form>
</div>


<div class="bloon2">



<form method="post">

	<table border="1" style="border-radius: 10px; border: transparent;">
	

		<tr style="text-align: center; background-color: black; color: white; box-shadow: 1px 1px 1px;">
			<td style="padding: 10px;">Kode Barang</td>
			<td>Nama Barang</td>
			<td>Jenis Barang</td>
			<td>Ukuran Barang</td>
			<td>Satuan Barang </td>
			<td>Stok Awal</td>
			<td>Aksi</td>
			
		</tr>

<?php
	require_once 'Koneksi.php';
	require_once 'functionall.php';
  if(isset($_POST['cari2'])) {
		$cari = $_POST['nt'];
		$sqli = mysqli_query($db,"SELECT * FROM tbstokbarang WHERE kodebarang LIKE '%$cari%'");
		while($data = mysqli_fetch_array($sqli)){
?>


		<tr style="border: 1px solid; border-radius: 31px; box-shadow: 2px 2px;">
			<td><input type="text" disabled=""  name="kodebarang" value="<?php echo $data['kodebarang'];?>" style="width: 80px; height: 20px;"></td>
			<td><input type="text" name="nama" value="<?php echo $data['nama'];?>" style="width: 120px;"></td>
			<td><input type="text" name="jenis" value="<?php echo $data['jenis'];?>" style="width: 120px;"></td>
			<td> <input type="text" name="ukuran" value="<?php echo $data['ukuran'];?>" style="width: 120px;"><br></td>
			<td><input type="text" name="satuan" value="<?php echo $data['satuan'];?>" style="width: 120px;"></td>
			<td><input type="text" name="stockawal" value="<?php echo $data['stockawal'];?>" style="width: 120px;"></td>
			<td ><button type="submit" name="btn-delstok" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut ?')" style="background-color: red ">Hapus</button>
				<button style="background-color: green;"><a name="btn-edtSTK" href="editStkbarang.php?kodebarang=<?php echo $data['kodebarang']?>"  >Edit/Lihat</a></button>
			</td>
		</tr>




</form>



<?php } ?>
</table>

<?php	} ?>

	</div>

<style type="text/css">
	
	body{
		background-color: lightgrey;
		padding: 10px;
		font-family: 'Helvetica' , sans-serif;
	}

	table{
		box-shadow: 1px 1px 1px;
		padding: 15px;
		height: 65px;
		width: 100%;
		border-radius: 10px;
		background-color: white;

	}
	input{
		background-color: transparent;
		border:none;
		padding: 10px;
		border-radius: 10px;
	}
	button{
		margin: 5px;
		color: white;
		border:1px solid grey;
		padding: 7px;
		border-radius: 10px;
	}
	a{
		text-decoration:none;
		color: white;
	}

	.search input{
		border: 1px solid grey;
		background-color: white;
		border-radius: 2px;
		width: 300px;
		box-shadow: 1px 1px 1px;
	}
	.search button{
		border: 1px solid black;
		background-color: green;
		border-radius: 2px;
		width: 70px;
		height: 38px;
		box-shadow: 1px 1px 1px;
	}

	::placeholder{
		color: black;
	}

</style>
  