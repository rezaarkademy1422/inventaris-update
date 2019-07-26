

<?php 
if (isset($_GET['kodebarang'])) { ?>
	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbtransaksilaptop where kodebarang = '$_GET[kodebarang]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>

	
<section id="input-form">
<div class="" style="display: flex; flex-direction: column;">
	
<div style="">
	<img src="img/tslpt.png" style="width: 100px; height: 100px; padding: 10px;" align="left">
	<h1>SILAHKAN EDIT DATA</h1>
	<a href="cariTSLPT.php" style="background-color: red; padding: 10px; float: right; margin: 10px; box-shadow: 1px 1px 1px 1px black ;">Kembali</a>
</div>


</div>
<form method="post" enctype= "multipart/form-data" >
	<div class="form">
		<label>Tanggal Peminjaman </label>
	<input type="date"  name="tglpeminjaman" value="<?php echo $data['tglpeminjaman'];?>"></div>

		<div class="form">
		<label>Kode Barang</label>
	<input type="text" name="kodebarang" value="<?php echo $data['kodebarang'];?>" >
	</div>

	<div class="form">
		<label>Merk</label>
		<input type="text" name="merk" value="<?php echo $data['merk'];?>" >
	</div>

	<div class="form">
		<label>Tipe</label>
	<input type="text" name="type" value="<?php echo $data['type'];?>">
	</div>

	<div class="form">
		<label>Serial Number</label>
	<input type="text" name="sn" value="<?php echo $data['sn'];?>" >
	</div>
	
	
		<div class="form">
		<label>Status</label>
	<input type="text" name="status" value="<?php echo $data['status'];?>" >
	</div>


		<div class="form">
		<label>Keterangan Barang</label>
	<input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" >
	</div>




		<div class="form">
		<label>Nomor ID</label>
	<input type="text" name="noid" value="<?php echo $data['noid'];?>" >
	</div>


		<div class="form">
		<label>Nama Peminjam</label>
	<input type="text" name="nama" value="<?php echo $data['nama'];?>" >
	</div>


		<div class="form">
		<label>Jabatan</label>
	<input type="text" name="jabatan" value="<?php echo $data['jabatan'];?>" >
	</div>


		<div class="form">
		<label>Pendidikan Terakhir</label>
	<input type="text" name="pendidikaakhir" value="<?php echo $data['pendidikanakhir'];?>" >
	</div>

			<div class="form">
		<label>Jenis Kelaminr</label>
	<input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" >
	</div>

			<div class="form">
		<label>Tempat Tanggal Lahirr</label>
	<input type="text" name="ttl" value="<?php echo $data['ttl'];?>"  placeholder="Contoh : Bogor,14 Febuari 2002">
	</div>

			<div class="form">
		<label>Alamat</label>
	<input type="text" name="alamat" value="<?php echo $data['alamat'];?>" >
	</div>
		
		<div class="form">
		<label>Tahun Masuk</label>
	<input type="text" name="tahunmasuk" value="<?php echo $data['tahunmasuk'];?>" >
	</div>

<div class="form">
		<label>Nomor Handphone</label>
	<input type="text" name="nohp" value="<?php echo $data['nohp'];?>" >
	</div>

	<div class="form">
		<label>Tanggal Pengembalian</label>
	<input type="date" name="tglpengembalian" value="<?php echo $data['tglpengembalian'];?>" >
	</div>


	<div class="form">

<button type="submit" name="btn-edtTSLPT" style="background-color: green; height: 50px; width: 100%; color: white; font-size: 20px; " onclick="berhasil()">Simpan Perubahan</button>
</div>

</form>

	
<?php }
}

 ?>

<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Di Ubah");
		
	
	}
</script>


<!-----Gimana Nch---->


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
	text-decoration: none;
	color: white;;
}


</style>
