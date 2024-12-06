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
                                    <h3 class="card-title" style="margin-bottom: 2px;">UBAH PEMINJAMAN</h3>
                                </div>

                                <div class="card-body">
                                    <form action="/Peminjaman/update" method="post">
                                        <?= csrf_field(); ?>
                                        <div class="mb-3 row">
                                            <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Peminjam</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_pinjam" name="kode_pinjam" value="<?= $detail['kode_pinjam']; ?>" readonly placeholder="Contoh Kode P000">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?= $detail['kode_buku']; ?>" autofocus placeholder="Contoh Kode B000">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_anggota" name="id_anggota" value="<?= $detail['id_anggota']; ?>" placeholder="Contoh Id A000">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nama_anggota" class="col-sm-2 col-form-label">Nama Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="nama_anggota" name="nama_anggota" value="<?= $detail['nama_anggota']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_pinjam" class="col-sm-2 col-form-label">Tanggal Peminjaman</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggal_pinjam" name="tanggal_pinjam" value="<?= $detail['tanggal_pinjam']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tanggal_kembali" class="col-sm-2 col-form-label">Tanggal Kembali</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" value="<?= $detail['tanggal_kembali']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="judul" name="judul" value="<?= $detail['judul']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah Buku</label>
                                            <div class="col-sm-5">
                                                <input type="number" class="form-control" id="jumlah" name="jumlah" value="<?= $detail['jumlah']; ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="status" class="col-sm-2 col-form-label">Status</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="status" name="status" value="<?= $detail['status']; ?>">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success" style="margin-bottom: 10px;"><i class="fa fa-save"></i> Update</button>
                                        </div>
                                </div>
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