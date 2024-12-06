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
                                    <h3 class="card-title" style="margin-bottom: 2px;">DATA ANGGOTA</h3>
                                </div>

                                <div class="card-body">
                                    <form action="/anggota/simpananggota" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>

                                        <div class="mb-3 row">
                                            <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('nama_anggota')) ? 'is-invalid' : ''; ?>" id="nama_anggota" name="nama_anggota" value="<?= old('nama_anggota'); ?>">

                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label for="text" class="col-sm-2 col-form-label">Id Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('id_anggota')) ? 'is-invalid' : ''; ?>" id="id_anggota" name="id_anggota" value="<?= old('id_anggota'); ?>" placeholder="Contoh kode Anggota A000">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('id_anggota'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jenis_kelamin" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="alamat" name="alamat">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nomor" class="col-sm-2 col-form-label">Nomor Handphone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control <?= ($validation->hasError('nomor')) ? 'is-invalid' : ''; ?>" id="nomor" name="nomor" value="<?= old('nomor'); ?>">
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nomor'); ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
                                    <form action="/anggota/index" method="post">
                                        <button type="submit" class="btn btn-secondary" style="float: right;">Tabel Data Anggota</button>
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