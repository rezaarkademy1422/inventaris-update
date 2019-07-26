

<?php 
if (isset($_GET['kodebarang'])) { ?>
	
<?php
require_once 'functionall.php';
require_once 'Koneksi.php';
 $sql = mysqli_query($dbc, "SELECT * FROM tblaptop where kodebarang = '$_GET[kodebarang]' ");
 while($data = mysqli_fetch_array($sql)){
 ?>

	
<section id="input-form">
<div class="" style="display: flex; flex-direction: column;">
	
<div style="">
	<img src="img/handphone2.png" style="width: 100px; height: 100px; padding: 10px;" align="left">
	<h1>SILAHKAN EDIT DATA</h1>
	<a href="cariHP.php" style="background-color: red; padding: 10px; float: right; margin: 10px; box-shadow: 1px 1px 1px 1px black ;">Kembali</a>
</div>


</div>
<form method="post" enctype= "multipart/form-data" >
	<div class="form">
		<label>Kode Barang</label>
	<input type="text" disabled=""  name="kodebarang" value="<?php echo $data['kodebarang'];?>"></div>

		<div class="form">
		<label>Merk</label>
	<input type="text" name="merk" value="<?php echo $data['merk'];?>" >
	</div>

	<div class="form">
		<label>Tipe</label><input type="text" name="type" value="<?php echo $data['type'];?>" >
	</div>

	<div class="form">
		<label>Serial Number</label>
	<input type="text" name="sn" value="<?php echo $data['sn'];?>">
	</div>

		<div class="form">
		<label>status barang</label>
	<input type="text" name="status" value="<?php echo $data['status'];?>" >
	</div>

		<div class="form">
		<label>Keterangan Barang</label>
	<input type="text" name="keterangan" value="<?php echo $data['keterangan'];?>" >
	</div>
	<div class="form">

<button type="submit" name="btn-edtLPT" style="background-color: green; height: 50px; width: 100%; color: white; font-size: 20px; " onclick="berhasil()">Simpan Perubahan</button>
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
