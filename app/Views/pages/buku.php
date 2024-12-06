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
                                    <h3 class="card-title" style="margin-bottom: 2px;">DATA BUKU</h3>
                                </div>

                                <div class="card-body">

                                    <form action="/buku/simpanbuku" method="post">
                                        <div class="mb-3 row">
                                            <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('kode_buku')) ? 'is-invalid' : ''; ?>" id="kode_buku" name="kode_buku" placeholder="Contoh kode buku B000" value="<?= old('kode_buku'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('kode_buku'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('judul')) ? 'is-invalid' : ''; ?>" id="judul" name="judul" value="<?= old('judul'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('judul'); ?>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3 row">
                                            <label for="tahun" class="col-sm-2 col-form-label">Tahun Terbit</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="tahun" name="tahun">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="pengarang" name="pengarang">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Buku</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="jumlah" name="jumlah">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
                                    <form action="/buku/index" method="post">
                                        <button type="submit" class="btn btn-secondary" style="float: right;">Tabel Data Buku</button>
                                    </form>

                                    <form method="GET" action="" class="form-group">
                                        <div class="card-body">
                                            <div class="mb-4 row">
                                                <div class="input-group col-sm-6">
                                                    <input type="text" class="form-control" name="cari" placeholder="Cari Berdasarkan Kode Buku">
                                                    <div class="input-group-append">
                                                        <button class="btn btn-warning" type="Submit">CARI DATA</button>
                                                    </div>
                                                </div>
                                            </div>
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
                                            <?= $pager->Links() ?>
                                        </div>
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