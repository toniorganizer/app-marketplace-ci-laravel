<!-- Start Banner Area -->
<section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Informasi Pembelian</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Informasi pembelian</a>
					</nav>
				</div>
			</div>
		</div>
	</section>
	<!-- End Banner Area -->

	<!--================Order Details Area =================-->
    <?php foreach($detail_beli as $b) : ?>
	<section class="order_details section_gap">
        <div class="container">
            <h3 class="title_confirmation">Terima Kasih Atas Pembelian yang dilakukan.</h3>
			<div class="row order_d_inner">
				<div class="col-lg-4">
					<div class="details_item">
						<h4>Info Pembelian</h4>
						<ul class="list">
							<li><a href="#"><span>No. Transaksi</span> : <?= $b['notransaksi'] ?></a></li>
							<li><a href="#"><span>Tanggal</span> : <?=date('d F Y', strtotime($b['tglbeli']))?> </a></li>
							<li><a href="#"><span>Total Bayar</span> : Rp. <?= $b['totalrp'] ?></a></li>
						</ul>
					</div>
				</div>
				
			</div>
			<div class="order_details_table">
				<h2>Order Details</h2>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Produk</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<p><?= $b['namabrg'] ?></p>
								</td>
								<td>
									<h5>x <?= $b['qty'] ?></h5>
								</td>
								<td>
									<p>Rp. <?php $total = $b['hargabeli'] * $b['qty']; ?><?= $total  ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Diskon</h4>
								</td>
								<td>
									<h5><?= $b['diskon'] ?>%</h5>
								</td>
								<td>
									<p>Rp. <?= $b['diskonrp'] ?></p>
								</td>
							</tr>
							<tr>
								<td>
									<h4>Total Bayar</h4>
								</td>
								<td>
									<h5></h5>
								</td>
								<td>
									<p>Rp. <?= $b['totalrp'] ?></p>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</section>
    <?php endforeach; ?>
	<!--================End Order Details Area =================-->