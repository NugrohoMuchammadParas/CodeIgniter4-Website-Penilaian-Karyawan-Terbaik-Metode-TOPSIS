<?= $this->extend('template/admin'); ?>

<?= $this->section('content-admin'); ?>
<div class="container">
    <div class="page-inner">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Ubah Data Alternatif</div>
                    </div>
                    <div class="card-body">
                        <form action="/admin-alternatif-ubah-data/<?= $alternatif['id_alternatif']; ?>" method="POST" id="formInput" autocomplete="off">
                            <?= csrf_field() ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('nama') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="nama">Nama :</label>
                                        <select class="form-select form-control" id="nama" name="nama"
                                            value="<?= $alternatif['nama'] ?>">
                                            <option value="<?= $alternatif['nama'] ?>" class="select">
                                                <?= $alternatif['nama'] ?>
                                            </option>
                                            <option disabled>
                                                ---Pilihan---
                                            </option>
                                            <?php foreach ($karyawan as $isi) : ?>
                                                <option value="<?= $isi['nama'] ?>"><?= $isi['nama'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <small id="nama" class="form-text text-muted <?= ($validation->getError('nama') ? 'text-danger' : ''); ?>"><?= $validation->getError('nama') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('kinerja') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="kinerja">Kinerja :</label>
                                        <input
                                            type="number"
                                            value="<?= $alternatif['kinerja']; ?>"
                                            name="kinerja"
                                            class="form-control"
                                            id="kinerja"
                                            placeholder="Input data......" />
                                        <small id="kinerja" class="form-text text-muted <?= ($validation->getError('kinerja') ? 'text-danger' : ''); ?>"><?= $validation->getError('kinerja') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('komunikasi') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="komunikasi">Komunikasi :</label>
                                        <input
                                            type="number"
                                            value="<?= $alternatif['komunikasi']; ?>"
                                            name="komunikasi"
                                            class="form-control"
                                            id="komunikasi"
                                            placeholder="Input data......" />
                                        <small id="komunikasi" class="form-text text-muted <?= ($validation->getError('komunikasi') ? 'text-danger' : ''); ?>"><?= $validation->getError('komunikasi') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('kerjasama') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="kerjasama">Kerjasama :</label>
                                        <input
                                            type="number"
                                            value="<?= $alternatif['kerjasama']; ?>"
                                            name="kerjasama"
                                            class="form-control"
                                            id="kerjasama"
                                            placeholder="Input data......" />
                                        <small id="kerjasama" class="form-text text-muted <?= ($validation->getError('kerjasama') ? 'text-danger' : ''); ?>"><?= $validation->getError('kerjasama') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('kreativitas') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="kreativitas">Kreativitas :</label>
                                        <input
                                            type="number"
                                            value="<?= $alternatif['kreativitas']; ?>"
                                            name="kreativitas"
                                            class="form-control"
                                            id="kreativitas"
                                            placeholder="Input data......" />
                                        <small id="kreativitas" class="form-text text-muted <?= ($validation->getError('kreativitas') ? 'text-danger' : ''); ?>"><?= $validation->getError('kreativitas') ?></small>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group <?= ($validation->hasError('disiplin') ? 'has-error has-feedback' : ''); ?>">
                                        <label for="disiplin">Disiplin :</label>
                                        <input
                                            type="number"
                                            value="<?= $alternatif['disiplin']; ?>"
                                            name="disiplin"
                                            class="form-control"
                                            id="disiplin"
                                            placeholder="Input data......" />
                                        <small id="disiplin" class="form-text text-muted <?= ($validation->getError('disiplin') ? 'text-danger' : ''); ?>"><?= $validation->getError('disiplin') ?></small>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <a type="button" class="btn btn-rounded btn-sm btn-black mx-2" id="kembali" data-pages="<?= $kembali; ?>"><i class="fas fa-arrow-circle-left"></i> Kembali</a>
                                    <button type="button" class="btn btn-rounded btn-sm btn-black mx-2" id="simpan_ubah"><i class="fas fa-download"></i> Simpan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>