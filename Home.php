
<div id="alll">
<?php
session_start();
if(!isset($_SESSION['user'])) {
   header('location:Login.php'); 
} else { 
	  $username = $_SESSION['user']; 

}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Progam Invetaris</title>
</head>
<body>
<div class="menuatas">
	
	<img src="img/Icon DM.png " style="padding: 20px; position: absolute; width: 100px ; height: 70px;" >
	<img src="img/Logo 4.jpg" style="padding: 20px; width: 90px; height: 90px;  float: right;">
	<br>
	<h1 style="text-align: center; font-family: times new roman; font-size: 50px;">INVENTARIA</h1>
	<h3 style="text-align: center;">Created by : Muhammad Reza Alfaridzy (SMKN 4 Bogor)</h3>

<br>
	<div class="tContent">
		<h2>Selamat Datang User <i><?php echo $username; ?> </i>, Di website Progam Invetaris CV Delima Mandiri</h2>
		<h4>JL Dreded No 42 Kelurahan Empang Kecamatan Bogor selatan Kota Bogor</h4>
			</div>

</div>


<div class="content">
	
</div>
			<div class="header">
	<div class="menu-malasngoding">
 
		<ul>
			<li class="dropdown"><a href="#">Input Data</a>
				<ul class="isi-dropdown">
					<li><a href="Karyawan.php">Input Data Karyawan</a></li>
					<li><a href="Laptop.php">Input Data Laptop</a></li>
					<li><a href="Handphone.php">Input Data Handphone</a></li>
					<li><a href="transaksiHP.php">Input Data Transaksi Handphone</a></li>
					<li><a href="transaksiLPT.php">Input Data Transaksi Laptop</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"> Barang</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanLPT.php" target="_blank" >Laporan Data Laptop</a></li>
					<li><a href="LaporanHP.php" target="_blank">Laporan Data Handphone</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#"> Karyawan</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanKR1.php" target="_blank">Laporan Karyawan Halaman 1</a></li>
					<li><a href="LaporanKR2.php" target="_blank">Laporan Karyawan Halaman 2 </a></li>
					<li><a href="LaporanKR3.php" target="_blank">Laporan Karyawan Halaman 3</a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi HP</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanTSHP1.php" target="_blank">Laporan Transaksi Handphone Hal. 1</a></li>
					<li><a href="LaporanTSHP2.php" target="_blank">Laporan Transaksi Handphone Hal. 2 </a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Transaksi Laptop</a>
				<ul class="isi-dropdown">
					<li><a href="LaporanTSLPT1.php" target="_blank">Laporan Transaksi Laptop Hal. 1</a></li>
					<li><a href="LaporanTSLPT2.php" target="_blank">Laporan Transaksi Laptop Hal. 2 </a></li>
				</ul>
			</li>
			<li class="dropdown"><a href="#">Stok Barang</a>
				<ul class="isi-dropdown">
					<li><a href="stokbarang.php">Input Data Stok Barang </a></li>
					<li><a href="LaporanStokBarang.php" target="_blank">Laporan Data Stok Barang </a></li>
				</ul>
			</li>
			
				<li class="dropdown" style="float: right; margin-right: 10px;"><a href="#"><img src="img/tools5.png" style="width: 30px; height: 30px"></a>
				<ul class="isi-dropdown" style="margin-left:  -10px;">
					<li><a href="logout.php" onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a></li>
					<li><a href="LaporanStokBarang.php" target="_blank">Info site</a></li>

					
				</ul>
			</li>
			
		</ul>
 
	</div>
<div class="isii">
	
<h1 style="font-size: 50px;">Delima Mandiri</h1>

<h3>Sejak awal kami yang sederhana pada tahun 1991, tim kami telah membangun jajaran produk autobody terluas dibandingkan dengan pesaing domestik kami. Sepanjang bisnis kami, kami telah menyadari bahwa nilai yang paling penting harus dimasukkan ke dalam pemahaman manusia. Manusia mendesain produk kita, dan pada gilirannya produk itu dibuat oleh manusia. Mereka akan digunakan oleh manusia. Interaksi manusia membentuk produk kami, dan karenanya kami dapat menjanjikan satu hal kepada Anda	</h3>

<h2 style="text-align: center;">
"kami berkomitmen untuk membangun produk untuk kepuasan pembangun dan pengguna"</h2>
<img src="img/dm bg3.jpg" style="padding: 20px;" align="left">
<h2>Tentang :</h2>
	<h2 style="font-size: 30px;">Our history: 25 years and counting</h2>	

<h3>CV Delima Mandiri didirikan pada tahun 1989 di kota Bogor, Indonesia. Ini dimulai dengan memproduksi bus untuk transportasi domestik. Lebih dari 20 tahun kemudian, perusahaan kami telah berkembang dengan salah satu portofolio produk terbesar yang pernah Anda temukan di negara ini. Kami membangun berbagai macam kendaraan, dan sebagian besar disesuaikan untuk pelanggan kami.</h3><br>
<img src="img/BUSSS.jpg" style="width: 400px; height: 200px; padding: 20px;" align="right">
<h2>Filosofi Delima Mandiri :</h2>
<h3>"Mengutamakan pelanggan" adalah fondasi kesuksesan kami. Karena kendaraan kami dibuat sesuai dengan kebutuhan Anda, dalam setiap tahap perencanaan dan produksi, kami selalu melibatkan pikiran pelanggan kami. Kami memahami bahwa pelanggan kami membutuhkan solusi yang dapat diandalkan, yang sesuai dengan apa yang sebenarnya mereka butuhkan, dan yang dihargai secara kompetitif. Jika Anda pelanggan seperti itu, kami akan menyediakan produk tersebut untuk Anda.</h3>
<br>
<br>
<img src="img/busatm.jfif" style="padding: 20px; width: 350px; height: 200px" align="left" >
<h2>Komitmen Delima Mandiri :</h2>
<h3>
Kami berkomitmen untuk hanya membangun kendaraan berkualitas terbaik yang sesuai dengan kebutuhan Anda. Dengan memproduksi setiap kendaraan dengan kebutuhan Anda, kami berkomitmen untuk memastikan bahwa kami membangun lebih dari sekadar kendaraan. Kami membangun solusi untuk bisnis Anda. Kami berkomitmen untuk menjadi merek favorit pelanggan kami.</h3>

<br><br><br><br><br>
</div>

<div class="menubawah" align="bottom">
	<div class="tbawah">

	<br>Info Selengkapnya  :<br><br><br>
	 <img src="img/facebook.jpg"><a href="https://www.facebook.com/reza.c.pmr" target="_blank"> Muhammad Reza Alfaridzy </a>
	<img src="img/Logo 4.jpg"><a href="http://www.smkn4bogor.sch.id/" target="_blank"> SMKN 4 Bogor</a>
	<img src="img/tp.png"> Contact Phone: (+62)(251)8324842
	<img src="img/mail.jpg"> dadengpitaklunyu1422@gmail.com
	<br>
	<hr>

	<img src="img/info.png"><a href="http://www.delimamandiri.com/" target="_blank"> www.delimamandiri.com</a>
	<img src="img/tp.png"> Reza Phone/Whatsapp: 08561274352
	<img src="img/twit.png"><a href="https://twitter.com/DelimaMandiri/" target="_blank"> @DelimaMandiri
	<img src="img/mail.jpg"> info@delimamandiri.com</td>
</div>

</div>




</body>

</html>
</div>


<style type="text/css">



body{
	font-family:'Helvetica', sans-serif;
	color:white;
	background-color: lightgray;
}

	
.menuatas{
	background-image: url('img/copybuss.jpg');
	height: 50%;
	background-repeat: no-repeat;
	background-size: cover;
	font-family: sans-serif;
	font-size:15px;



}


.content{
	width: 100%;
	background-color: grey;
	border:1px solid;
	border-radius: 2px;
	
	
	
}
.tContent{
	margin-top: 10px;
	 background-color: rgba(0,0,0, 0.7);
	 padding: 10px;
	 bottom: 0;
}

.isii{
	color: black;
	padding: 10px;
	font-family: 'Helvetica', sans-serif;
	font-size: 15px;
}
.isii img{
	box-shadow: 0px 1px  0px 0px black;

}

	.menu-malasngoding{
		background-color:black;
	}
 
	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}
 
	.menu-malasngoding > ul > li {
		float: left;
	}
 
	
	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}
 
	.menu-malasngoding li a:hover{
		background-color: black;
	}
 
	li.dropdown {
		display: inline-block;
	}
 
	.dropdown:hover .isi-dropdown {
		display: block;
	}
 
	.isi-dropdown a:hover {
		color: #fff !important;
	}
 
	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color:white;
	
	}
 
	.isi-dropdown a {
		color: black !important;
	}
 
	.isi-dropdown a:hover {
		color: white !important;
		background: black!important;
	}


.tools a{
	text-decoration: none;
	color: white;	
}


.tools img{
	width: 40px;
	height: 40px;
	margin-top: -15px ;
	margin-left: -10px;
}



.mainmenubtn {
    background-color: rgba(0,0,0, 0.5);
    color: white;
    border: none;
    cursor: pointer;
    padding:20px;
    margin:20px;
    width: 60px;
    height:50px;
    
    border-radius: 10px;
}
 

 
.dropdownn {
    position: relative;
    display: inline-block;
    transition: 3s;
}
.dropdown-child {
    display: none;
    width: 70px;
     transition: 2s;
}
.dropdown-child a {
    color: white;
    padding: 20px;
    text-decoration: none;
    display: block;
    margin:2px;

}
.dropdownn:hover .dropdown-child {
    display: block;
    margin: 20px;
    transition: 100s;
   

}
.menubawah{

	color: lightgray;
	width: 100%;
	height: 200px;
	background-color: black;
	bottom: 0;
}
.menubawah img{
	width: 20px;
	height: 20px;
	border-radius: 50%;
	margin-left:20;
	 
}
.menubawah a{
	color: white;
}

table{
	margin: 10px;
}
.tbawah{
	padding: 10px;
}









</style>


