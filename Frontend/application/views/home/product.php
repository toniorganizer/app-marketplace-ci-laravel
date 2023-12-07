<div class="container section_gap">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head">Filter Produk</div>
					<ul class="main-categories">
						
					</ul>
				</div>
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
							<option value="1">Default sorting</option>
						</select>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div class="row">
						
					<?php foreach($barang as $b) :?>
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
								<img class="img-fluid" src="img/product/p1.jpg" alt="">
								<div class="product-details">
									<h6><?= $b['namabrg'] ?></h6>
									<div class="price">
										<h6>Satuan : <?= $b['satuan'] ?></h6> <br>
										<h6>Rp. <?= $b['hargabeli'] ?></h6>
									</div>
									<div class="prd-bottom">
										<?php if($this->session->userdata('namaspl')) : ?>
										<a href="<?= base_url('index.php/HomeController/belibrg/') . $b['kodebrg']?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Beli</p>
										</a>
										<?php else : ?>
											<a href="<?= base_url('index.php/AuthController') ?>" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">Beli</p>
										</a>
										<?php endif; ?>

									</div>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						
					</div>
				</section>
				<!-- End Best Seller -->
				
			</div>
		</div>
	</div>