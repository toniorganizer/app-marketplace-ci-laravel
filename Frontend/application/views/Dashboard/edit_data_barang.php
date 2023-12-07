<div class="container">
<div class="col-lg-6">
<h5>Halaman edit data barang</h5>
<form action="<?= base_url('index.php/DashboardController/updateBarang');?>" method="post">
<input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
<input type="hidden" name="kodebrg" value="<?= $editbarang['kodebrg']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Barang</label>
    <input type="text" name="namabrg" value="<?= $editbarang['namabrg']?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Harga Beli</label>
    <input type="text" name="hargabeli" value="<?= $editbarang['hargabeli']?>" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>