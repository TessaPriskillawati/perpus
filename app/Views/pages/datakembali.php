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
                                    <h3 class="card-title" style="margin-bottom: 2px;">TABLE PENGEMBALIAN</h3>
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
                                                <th scope="col">Kode Peminjaman</th>
                                                <th scope="col">Kode Buku</th>
                                                <th scope="col">Id Anggota</th>
                                                <th scope="col">Tanggal Pengembalian</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($Pengembalian as $p) : ?>
                                                <tr>
                                                    <th scope="row"><?= $p['kode_pinjam']; ?></th>
                                                    <td><?= $p['kode_buku']; ?></td>
                                                    <td><?= $p['id_anggota']; ?></td>
                                                    <td><?= $p['tgl_kembali']; ?></td>
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