<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header" align="center">
                                    <h3 class="card-title" style="margin-bottom: 2px;">TABEL BUKU</h3>
                                </div>

                                <div class="card-body">
                                    <?php if (session()->getFlashdata('pesan')) : ?>
                                        <div class="alert alert-success" role="alert">
                                            <?= session()->getFlashdata('pesan'); ?>
                                        </div>
                                    <?php endif; ?>
                                    <table class="table table-striped table-hover table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Kode Buku</th>
                                                <th scope="col">Judul Buku</th>
                                                <th scope="col">Tahun Terbit</th>
                                                <th scope="col">Pengarang</th>
                                                <th scope="col">Jumlah Buku</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($Buku as $b) : ?>
                                                <tr>
                                                    <th scope="row"><?= $b['kode_buku']; ?></th>
                                                    <td><?= $b['judul']; ?></td>
                                                    <td><?= $b['tahun']; ?></td>
                                                    <td><?= $b['pengarang']; ?></td>
                                                    <td><?= $b['jumlah']; ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>