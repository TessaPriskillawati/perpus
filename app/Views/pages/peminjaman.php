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
                                    <h3 class="card-title" style="margin-bottom: 2px;">DATA PEMINJAMAN</h3>
                                </div>

                                <div class="card-body">
                                    <form action="/Peminjaman/simpanpinjam" method="post">
                                        <div class="mb-3 row">
                                            <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Peminjam</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('kode_pinjam')) ? 'is-invalid' : ''; ?>" id="kode_pinjam" name="kode_pinjam" value="<?= old('kode_pinjam'); ?>" placeholder="Contoh Kode P000">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kode_pinjam'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_buku" name="kode_buku" placeholder="Contoh Kode B000">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_anggota" name="id_anggota" placeholder="Contoh Id A000">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_pinjam" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="judul" name="judul">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Buku</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="status" name="status">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
                                    <form action="/peminjaman/index" method="post">
                                        <button type="submit" class="btn btn-secondary" style="float: right;">Tabel Data Peminjaman</button>
                                    </form>
                                    <form action="" method="GET" class="form-group">
                                        <div class="card-body">
                                            <div class="mb-4 row">
                                                <div class="input-group col-sm-6">
                                                    <input type="text" class="form-control" name="cari" placeholder="Cari Berdasarkan Kode Peminjaman">
                                                    <button class="btn btn-warning" type="Submit">CARI DATA</button>
                                                </div>
                                            </div>
                                        </div>
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
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                        <?= $pager->Links() ?>
                                    </form>
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