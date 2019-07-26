<img src="img/karyawan4.png" style="width: 130px; height: 100px" align="left">

<h1 style="padding: 10px; margin: 10px;">CARI DATA KARYAWAN</h1>
<br>
<br>
<hr style="border:1px solid black">
<div class="search">
<form  method="post" >
		
		<input type="text" name="nt" placeholder="Cari kode karyawan disini..">
		<button type="submit" name="cari2" value="cari"  class="btn">Cari</button>

<a href="Karyawan.php" style="background-color: red; padding: 10px; float: right; margin: 10px; box-shadow: 1px 1px 1px 1px black ;">Kembali</a>
<h3 style="margin: 10px; " ><b>Hasil Pencarian :</b></h3>
</form>
</div>


<div class="bloon2">



<form method="post">

	<table border="1" style="border-radius: 10px; border: transparent;">
	

		<tr style="text-align: center; background-color: black; color: white; box-shadow: 1px 1px 1px;">
			
			<td  style="padding: 10px;">NIK</td>
			<td>Nama</td>
			<td>Bagian</td>
			<td>No KTP	</td>
			<td>Tempat Lahir</td>
			<td>Tanggal Lahir	</td>
			<td>Jenis Kelamin</td>
			<td>Alamat</td>
			<td>Aksi</td>
			
		</tr>

<?php
	require_once 'Koneksi.php';
	require_once 'functionall.php';
  if(isset($_POST['cari2'])) {
		$cari = $_POST['nt'];
		$sqli = mysqli_query($db,"SELECT * FROM tbkaryawan WHERE nik LIKE '%$cari%'");
		while($data = mysqli_fetch_array($sqli)){
?>


		<tr style="border: 1px solid; border-radius: 31px; box-shadow: 2px 2px;">
			<td><input type="text" disabled=""  name="nik" value="<?php echo $data['nik'];?>" style="width: 80px; height: 20px;"></td>
			<td><input type="text" name="namakaryawan" value="<?php echo $data['namakaryawan'];?>" style="width: 120px;"></td>
			<td><input type="text" name="bagian" value="<?php echo $data['bagian'];?>" style="width: 120px;"></td>
			<td> <input type="text" name="noktp" value="<?php echo $data['noktp'];?>" style="width: 120px;"><br></td>
			<td><input type="text" name="tempatlahir" value="<?php echo $data['tempatlahir'];?>" style="width: 120px;"></td>
			<td><input type="text" name="tgllahir" value="<?php echo $data['tgllahir'];?>" style="width: 120px;"></td>
			<td><input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" style="width: 120px;"></td>
			<td><input type="text" name="alamat" value="<?php echo $data['alamat'];?>" style="width: 120px;"></td>
			<td ><button type="submit" name="btn-delHP" onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Tersebut ?')" style="background-color: red ">Hapus</button>
				<button style="background-color: green;"><a name="btn-edtHP" href="editKaryawan.php?nik=<?php echo $data['nik']?>"  >Edit/Lihat selengkapnya</a></button>
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
  