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
                                    <h3 class="card-title" style="margin-bottom: 2px;">DATA PENGEMBALIAN</h3>
                                </div>

                                <div class="card-body">
                                    <form action="/pengembalian/simpankembali" method="POST">
                                        <div class="mb-3 row">
                                            <label for="kode_pinjam" class="col-sm-2 col-form-label">Kode Peminjaman</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_pinjam" name="kode_pinjam">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="kode_buku" name="kode_buku">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="id_anggota" class="col-sm-2 col-form-label">ID Anggota</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="id_anggota" name="id_anggota">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tgl_kembali" class="col-sm-2 col-form-label">Tanggal Pengembalian</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" id="tgl_kembali" name="tgl_kembali">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
                                        </div>
                                    </form>
                                    <form action="/pengembalian/index" method="post">
                                        <button type="submit" class="btn btn-secondary" style="float: right;">Tabel Data Pengembalian</button>
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