<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="img/fav.png">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Kumpulan Sepatu</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/linearicons.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/themify-icons.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/owl.carousel.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/nice-select.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/ion.rangeSlider.css" />
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/ion.rangeSlider.skinFlat.css" />
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/magnific-popup.css">
	<link rel="stylesheet" href="<?= base_url('assets/')?>css/main.css">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="<?= base_url('index.php/HomeController')?>"><img src="img/logo.png" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="nav-item <?php if($title == 'Home') : ?> active <?php endif; ?>"><a class="nav-link" href="<?= base_url('index.php/HomeController')?>">Home</a></li>

							<?php if($this->session->userdata('namaspl')) : ?>
							<li class="nav-item <?php if($title == 'Info Pembelian') : ?> active <?php endif; ?>"><a class="nav-link" href="<?= base_url('index.php/HomeController/detailBeli')?>">Info Pembelian</a></li>
							<?php endif; ?>

							<li class="nav-item <?php if($title == 'Login') : ?> active <?php endif; ?>"><a class="nav-link" href="<?= base_url('index.php/AuthController')?>">Login</a></li>
								
							<?php if($this->session->userdata('namaspl')) : ?>
							<li class="nav-item"> <a class="nav-link" href=""><?= $this->session->userdata('namaspl')?></a></li>
							<?php endif; ?>

							<?php if($this->session->userdata('namaspl')) : ?>
							<li class="nav-item"> <a class="nav-link" href="<?= base_url('index.php/AuthController/logout') ?>">Logout</a></li>
							<?php endif; ?>
						</li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->