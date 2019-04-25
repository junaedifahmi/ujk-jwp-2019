<?php
include_once("util_function.php"); //include semua basic util
include_once("event_handler.php"); // include semua event handler

session_start();

//sebagai penyimpanan template header
$header='
<html lang="en">
	<head>
		<title>SITA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="widht-device-widht, initial-scale=1.0">
		<link href="bs/css/bootstrap.min.css" rel="stylesheet">
		<script src="bs/js/jquery.min.js"> </script>
		<script src="bs/js/bootstrap.min.js"> </script>
	</head>
	<body>
	<div class="container-fluid">
		<div class="row jumbotron"style="margin:0px;border-radius:0px">
			<div class="col col-sm-12 pull-right" style="text-align:center; color:#3d3d5c">
				<h2>Welcome to</h2>
				<h1>Fakultas Ilmu Komputer</h1>
				<h3>Universitas Singaperbangsa Karawang</h3>
			</div>
		</div>

		<nav class="navbar navbar-default"   style="background-color:#ccccb3; padding:5px; color:#ffffff">
			<div class="navbar-header">
			</div>
			<div>
				<ul class="nav nav-pills pull-right">
					<li><a href="index.php">Daftar Nilai</a></li>
					<li> <a href="cari_nilai.php">Cari Nilai</a></li>';
					if(isset($_SESSION['user'])){ // Sub menu yang akan tampil jika sudah login
						$header .='<li><a href="tambah_nilai.php">Tambah Nilai</a></li>';
						$header .='<li><a href="event_handler.php?logout">Log Out</a></li>';
					} else{ // sub menu yang akan tampil jika tidak ada session user (belum login)
						$header .='<li><a href="login.php">Log In</a></li>';
					}
$header .='</ul>
			</div>
		</nav>
    </div>
';

//sebagai penyimpanan template footer
$footer='
</div>
  <div class="container-fluid" style="text-align:center;">
    <div class="col col-sm-12" style="border: solid 1px #bcbcbc;background-color:#8c8c8c;margin-top:10px;margin-bottom:5px">
      &copy; 2015 - Unsika.ac.id Powered by : <a href="http://getbootstrap.com">Bootstrap</a>
    </div>
  </div>
</div> <!-- container -->
</body>
</html>';

?>
