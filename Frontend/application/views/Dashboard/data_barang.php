<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Data Barang</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"></h6>
        <a href="" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</a>
    </div>
    <div class="card-body">
    <?= $this->session->flashdata('massage');?>
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Kode Barang</th>
                        <th>Nama Barang</th>
                        <th>Satuan</th>
                        <th>Harga Beli</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;?>
                <?php foreach ($barang as $m) : ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= $m['kodebrg']?> </td>
                        <td><?= $m['namabrg']?> </td>
                        <td><?= $m['satuan']?> </td>
                        <td><?= $m['hargabeli']?> </td>
                        <td>
                            <a href="editBarang/<?= $m['kodebrg']?>" class="badge badge-primary">edit</a>
                            <a href="hapusBarang/<?= $m['kodebrg']?>" onclick="return confirm('Yakin ingin menghpus?')" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->