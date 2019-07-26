	<?php
   session_start();
   if(isset($_SESSION['user'])) {
   header('location:Home.php'); }
   require_once("Koneksi.php");
?>


<!DOCTYPE html>
	<html>
		<head>
			<link rel="stylesheet" type="text/css" href="css.css">
				<title> Delima Mandiri</title>
		</head>
<body>
	<div class="body1">
<div class="welcome">
	
	<h3>~ SELAMAT DATANG ~</h3>
	
	<h4>Di Website Aplikasi Progam Invetaris CV Delima <br> Mandiri <br><hr style="border:1px solid;">Jl Dreded No 42 Kelurahan Empang Kec. Bogor<br> Selatan Kota Bogor, Telp. <0251> 832 4842</h4>

</div>

<br>

<br>
<div class="body"> 
	
	<div class="tBody">

		<h1 style="font-size: 50px;">Masuk - Login</h1>
	</div>
	<form  action="proseslogin.php" method="post">	

		 <input type="text" name="user" placeholder="Nama User">
		
		<input type="password" name="password" placeholder="Kata sandi">

		<br> 
		<input type="submit" value="Login" style=" height: 40px; background-color: green; color:white;  margin-top: 40px; margin-left: 30px; border-radius: 3px;  " >
<br><br><br>
		<div class="header">

		<a href="Register.php" style="background-color: red;">Belum Punya Akun? - Daftar sekarang</a>  <a href="" style="background-color: blue;">Info Website</a>
	</div>

</form>

 	</div>

 	
<!-----

<div class="created">
	<h3>CREATED BY :<br> MUHAMMAD REZA ALFARIDZY</h3>
</div>
 
-->

	</body>
</html>

<!----------------------------------->



<style type="text/css">
	body{
	background-image :url('img/LOG.jpg');
	color: black;
	font-family: 'Helvatica ', sans-serif;
	background-attachment: fixed;
	background-size: cover;
	background-repeat: none;
}

.welcome{
	color: white;
	position: fixed;
	padding: 15px;
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





.body{
	width: 30%;
	height: 350px;
	float: right;

	animation-name: gerakanbody;
	animation-duration: 1s;
	margin:55px;
	
	
}


@keyframes gerakanbody{

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


.tBody{
	text-align: center;

}

.body input{
	width: 350px;
	height: 50px;
	border: none;
	font-size:20px;
	margin: 15px 0px 0px 30px;
	border-radius: 2px;
	border:1px solid black;
	box-shadow: 1px 1px 1px 1px black;
	
}
::placeholder {
	color: grey;
	font-size: 20px;
	margin-left: 3px
}

button{
	width: 260px;
	height: 35px;
	border-radius: 5px;

	border:1px solid;
	font-family: times new roman;
	font-size: 19px;
}
a{

	padding: 6px;
	text-decoration:none;
	color: white;
	box-shadow: 1px 1px 1px 1px black;
	border-radius: 3PX;
	margin: 2px;
	}
.created{
	color: rgba(220,220,220, 0.5);
	float: right;
	margin: px;
}
.header {

</style>





`














