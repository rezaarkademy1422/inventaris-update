
<?php 
require_once 'Koneksi.php';
require_once 'functionall.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Daftar</title>
</head>
<body>
<div class="welcome">
<img src="img/icon DM.png">
<h2>CAROSERRIE</h2>
<h1>DELIMA MANDIRI</h1>
<h3>AUTOBODY MANUFACTURES</h3>
</div>
<div class="body"> 
<h1>Daftar - Register Akun</h1>
<hr>


<div class="daftar">
	
	 <form method="post" enctype="multipart/form-data">
 	
	<h3>Nama: </h3>
	<input type="text" name="nama" placeholder="...">
	<h3>Username : </h3>
	<input type="text" name="user" placeholder="...">
	<h3>Password : </h3>
	<input type="password" name="password" placeholder="...">
	<h3>Konfirmasi Password : </h3>
	<input type="password" name="confirmpassword" placeholder="...">
	
	<br>
	<br>
	<br>
	
	<button type="submit" name="btn-tmbhDFTR" onclick="berhasil()" style="width: 400px; height: 50px; background-color: blue; box-shadow: 1px 1px 1px black; border: 1px solid; border-radius: 7px; color: white">Daftar Sekarang</button><br><br>
	<a href="Login.php"> Kembali</a>


	<script type="text/javascript">
	function berhasil(){
			var $a = confirm("Data Berhasil Ditambahkan");
	}
	</script>


	</form>

</div>


</div>
</body>
</html>


<style type="text/css">
	body{
	background-image :url('img/daftar2.jpg');
	color: black;
	font-family: 'helvatica' , sans-serif;
	background-repeat: none;
	background-size: cover;
	padding: 5px;
}


::placeholder {
	
	font-size: 20px;
	margin-left: 3px
}
input{
	width: 370px;
	height: 30px;
	border: none;
	font-size:20px;
	margin: ; 
	box-shadow: 1px 1px 1px black;
	border:1px solid;
	border-radius: 5px;

	
	
}
.body{
	padding: 15px;
	height: 550px;
	margin-right: 30px;
	width: 30%;
	float: right;
	animation-name: gerakan;
	animation-duration: 1s;

}

@keyframes gerakan{

	0%{
		transform: scale(0);
		
	}
	25%{
		transform: scale(0.1);
		
		}
	50%{
		transform: scale(0.1;); 
		
	}
	75%{
		
		
	}
	100%{
		
	}
}


button{
	width: 140px;
	height: 35px;
	
}
a{
	background-color: red;
	padding: 10px;
	margin:320px;
	text-decoration: none;
	color: white;
	box-shadow: 1px 1px 1px black;
	border: 1px solid black;
	border-radius: 3px;
	margin-top: 100px;
}

.welcome img{
	width: 100px;
	height: 70px;
}
.welcome{
	color: white;
	position: fixed;
	font-size: 30px;
	font-family: Calibri;
	margin-left: 30px;
	padding: 100px;
	text-align: center;
	animation-name: gerakan;
	animation-duration: 1s;
}

</style>	