<?php
include("config/config.php");
include("config/function.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Language" content="en-us">
<title>.: Your MLM Website :.</title>
<meta content=Panjianom name=Author>
<meta content="your keywords, your keywords here" name=Keywords>
<meta content="your description here." name=Description>
<meta http-equiv=robots content="index, follow">
<meta http-equiv=rating content=general>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
<link rel="stylesheet" type="text/css" href="css/AdminLTE.css">
<link rel="stylesheet" type="text/css" href="css/skins/skin-blue.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="hold-transition skin-blue layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			<a href="index.php" class="logo">
		      <span class="logo-lg"><b>Your IP: </b><?php //echo "$session_ip" ?></span><br />
		      <span class="logo-lg">Diperkenalkan: <b><?php //echo "$session_nama_sponsor" ?></b> | <b><?php //echo "$session_kota_sponsor" ?></b></span>
		     </a>
			<nav class="navbar navbar-static-top" role="navigation">
			</nav>
		</header>

		<aside class="main-sidebar">
			<section class="sidebar">
				<?php include("includes/menu.php"); ?>
			</section>
		</aside>

		<div class="content-wrapper">
			<div class="container">
			<section class="content-header">
				<h1>
				SELAMAT DATANG,
				<small>DI WEBSITE DEMO UNTUK APLIKASI MLM</small>
				</h1>
			</section>

			<section class="content">

				<p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
				<p style="margin-top: 0; margin-bottom: 0" align="justify"><b><font face="Verdana" style="font-size: 8pt">Pengunjung Yang terhormat ...</font></b></p>
				<p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
				<p style="margin-top: 0; margin-bottom: 0" align="justify"><font face="Verdana" style="font-size: 8pt">Pada website tempalate untuk aplikasi MLM ini anda bisa menjelajahi fitur-fitur yang kami tawarkan, memang walaupun sederhana tetapi kami yakin akan bisa membantu untuk mengembangkan jaringan Bisnis MLM anda secara Online.</font></p>
				<p style="margin-top: 0; margin-bottom: 0" align="justify">&nbsp;</p>
				<p style="margin-top: 0; margin-bottom: 0" align="center">&nbsp;

			</section>
			</div>
		</div>

		<footer class="main-footer">
		<div class="pull-right hidden-xs">
		Anything you want
		</div>
		<strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
		</footer>

	</div>
	<!-- ./wrapper -->

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
Both of these plugins are recommended to enhance the
user experience. Slimscroll is required when using the
fixed layout. -->
</body>
</html>