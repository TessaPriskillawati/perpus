<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <section class="content">
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-13">
                            <div class="card">
                                <div class="card-header" align="center">
                                    <h3 class="card-title" style="margin-bottom: 2px;">TABLE ANGGOTA</h3>
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
                                                <th scope="col">Nama Anggota</th>
                                                <th scope="col">Tanggal Peminjaman</th>
                                                <th scope="col">Tanggal Pengembalian</th>
                                                <th scope="col">Judul Buku</th>
                                                <th scope="col">Jumlah Buku</th>
                                                <th scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($Peminjaman as $p) : ?>
                                                <tr>
                                                    <th scope="row"><?= $p['kode_pinjam']; ?></th>
                                                    <td><?= $p['kode_buku']; ?></td>
                                                    <td><?= $p['id_anggota']; ?></td>
                                                    <td><?= $p['nama_anggota']; ?></td>
                                                    <td><?= $p['tanggal_pinjam']; ?></td>
                                                    <td><?= $p['tanggal_kembali']; ?></td>
                                                    <td><?= $p['judul']; ?></td>
                                                    <td><?= $p['jumlah']; ?></td>
                                                    <td><?= $p['status']; ?></td>
                                                    <td>
                                                        <a href="/Peminjaman/edit/<?= $p['kode_pinjam']; ?>" class="btn btn-warning">Edit</a>
                                                    </td>
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