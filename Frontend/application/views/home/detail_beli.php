<section class="banner-area organic-breadcrumb">
        <div class="container">
            <div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
                <div class="col-first">
                    <h1>Shopping Cart</h1>
                    <nav class="d-flex align-items-center">
                        <a href="">Home<span class="lnr lnr-arrow-right"></span></a>
                        <a href="">Cart</a>
                    </nav>
                </div>
            </div>
        </div>
    </section>

<section class="cart_area">
        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Nama Barang</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Diskon</th>
                                <th scope="col">Quantity</th>
                            </tr>
                        </thead>
                        <form action="/Tes-kemampuan/Frontend/index.php/HomeController/checkout" method="post">
                        <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                        <input type="hidden" name="kodebrg" value="<?= $belibarang['kodebrg']?>">
                        <input type="hidden" name="hargabeli" value="<?= $belibarang['hargabeli']?>">
                        <input type="hidden" name="diskon" value="10">
                        <tbody>
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
                                            <p><?= $belibarang['namabrg']?></p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>Rp. <?= $belibarang['hargabeli']?></h5>
                                </td>
                                <td>
                                    <div class="media">
                                        <div class="media-body">
                                            <p>10%</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="product_count">
                                        <input type="text" name="qty" id="sst" value="1" maxlength="12" title="Quantity:"
                                            class="input-text qty">
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                            class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                        <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                            class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="out_button_area">
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="checkout_btn_inner d-flex align-items-right">
                                        <a class="gray_btn" href="#">Kembali</a>
                                        <button class="primary-btn" type="submit">Checkout</button>
                                    </div>
                                </td>
                            </form>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>