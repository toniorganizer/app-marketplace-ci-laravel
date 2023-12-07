<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Pembelian</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>No. Transaksi</th>
                        <th>Nama Suplier</th>
                        <th>Harga Beli</th>
                        <th>QTY</th>
                        <th>Diskon</th>
                        <th>Diskon RP</th>
                        <th>Total RP</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                <?php foreach ($pembelian as $m) : ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $m['notransaksi']?> </td>
                        <td><?= $m['namaspl']?> </td>
                        <td><?= $m['hargabeli']?> </td>
                        <td><?= $m['qty']?> </td>
                        <td><?= $m['diskon']?> </td>
                        <td><?= $m['diskonrp']?> </td>
                        <td><?= $m['totalrp']?> </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->