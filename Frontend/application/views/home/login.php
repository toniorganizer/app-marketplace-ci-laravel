<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Login/Register</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Login/Register</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->
<!--================Login Box Area =================-->
<section class="login_box_area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<img class="img-fluid" src="<?= base_url('assets/')?>img/login.jpg" alt="">
						<div class="hover">
							<h4>Halaman Login</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Masukan Kode & Nama</h3>
						<form class="row login_form" action="AuthController/loginPage" method="post" id="contactForm" novalidate="novalidate">
						<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="kodespl" name="kodespl" placeholder="Kode Suplier" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Kode Suplier'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="namaspl" name="namaspl" placeholder="Nama Suplier" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Suplier'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="primary-btn">Log In</button>
								<a href="#">Forgot Password?</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->