

<?php 
if (isset($_GET['nik'])) { ?>
	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tbkaryawan where nik = '$_GET[nik]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>

	
<section id="input-form">
<div class="" style="display: flex; flex-direction: column;">
	
<div style="">
	<img src="img/karyawan4.png" style="width: 100px; height: 100px; padding: 10px;" align="left">
	<h1>SILAHKAN EDIT DATA</h1>
	<a href="cariKaryawan.php" style="background-color: red; padding: 10px; float: right; margin: 10px; box-shadow: 1px 1px 1px 1px black ;">Kembali</a>
</div>


</div>
<form method="post" enctype= "multipart/form-data" >
	<div class="form">
		<label>Nomor Induk </label>
	<input type="text" disabled=""  name="nik" value="<?php echo $data['nik'];?>"></div>

		<div class="form">
		<label>Nama Karyawan</label>
	<input type="text" name="namakaryawan" value="<?php echo $data['namakaryawan'];?>" >
	</div>

	<div class="form">
		<label>Bagian</label>
		<input type="text" name="bagian" value="<?php echo $data['bagian'];?>" >
	</div>

	<div class="form">
		<label>Nomor KTP</label>
	<input type="text" name="noktp" value="<?php echo $data['noktp'];?>">
	</div>

	<div class="form">
		<label>Tempat Lahir</label>
	<input type="text" name="tempatlahir" value="<?php echo $data['tempatlahir'];?>" >
	</div>
	
		<div class="form">
		<label>Tanggal Lahir</label>
	<input type="text" name="tgllahir" value="<?php echo $data['tgllahir'];?>" >
	</div>

		<div class="form">
		<label>Jenis Kelamin</label>
	<input type="text" name="jeniskelamin" value="<?php echo $data['jeniskelamin'];?>" >
	</div>

		<div class="form">
		<label>Status Nikah</label>
	<input type="text" name="statusnikah" value="<?php echo $data['statusnikah'];?>" >
	</div>


		<div class="form">
		<label>Alamat</label>
	<input type="text" name="alamat" value="<?php echo $data['alamat'];?>" >
	</div>


		<div class="form">
		<label>Nomor Handphone</label>
	<input type="text" name="nohp" value="<?php echo $data['nohp'];?>" >
	</div>


		<div class="form">
		<label>Pendidikan Akhir</label>
	<input type="text" name="pendidikanakhir" value="<?php echo $data['pendidikanakhir'];?>" >
	</div>


		<div class="form">
		<label>Tanggal Mulai Kerja</label>
	<input type="date" name="tglmulaikerja" value="<?php echo $data['tglmulaikerja'];?>" >
	</div>


		<div class="form">
		<label>Tanggal Keluar</label>
	<input type="date" name="tglkeluar" value="<?php echo $data['tglkeluar'];?>" >
	</div>

	<div class="form">

<button type="submit" name="btn-edtKR" style="background-color: green; height: 50px; width: 100%; color: white; font-size: 20px; " onclick="berhasil()">Simpan Perubahan</button>
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
