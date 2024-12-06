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
                                    <h3 class="card-title" style="margin-bottom: 2px;">TABLE ANGGOTA</h3>
                                </div>
                                <form method="GET" action="" class="form-group">

                                    <div class="card-body">
                                        <?php if (session()->getFlashdata('pesan')) : ?>
                                            <div class="alert alert-success" role="alert">
                                                <?= session()->getFlashdata('pesan'); ?>
                                            </div>
                                        <?php endif; ?>

                                        <div class="mb-4 row">
                                            <div class="input-group col-sm-6">
                                                <input type="text" class="form-control" name="cari" placeholder="Cari Berdasarkan Kode Anggota">
                                                <div class="input-group-append">
                                                    <button class="btn btn-warning" type="Submit">CARI DATA</button>
                                                </div>
                                            </div>
                                        </div>
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Id Anggota</th>
                                                    <th scope="col">Nama Anggota</th>
                                                    <th scope="col">Jenis Kelamin</th>
                                                    <th scope="col">Alamat</th>
                                                    <th scope="col">Nomor Handphone</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($Anggota as $a) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $a['id_anggota']; ?></th>
                                                        <td><?= $a['nama_anggota']; ?></td>
                                                        <td><?= $a['jenis_kelamin']; ?></td>
                                                        <td><?= $a['alamat']; ?></td>
                                                        <td><?= $a['nomor']; ?></td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>