<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="/administrator/tambah_agenda" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Agenda Baru</h1>
                            <a href="<?= base_url(); ?>/administrator/agenda" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="agenda">Nama Agenda</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_agenda')) ? 'is-invalid' : ''; ?>" id="agenda" name="nama_agenda" value="<?= old('nama_agenda'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_agenda'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="agenda">Tanggal Agenda</label>
                                    <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="agenda" name="tanggal">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <input type="text" class="form-control <?= ($validation->hasError('tag')) ? 'is-invalid' : ''; ?>" id="tag" placeholder="Tag" name="tag">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tag'); ?>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        tag hanya satu kata
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <select class="form-control" id="exampleFormControlSelect1" name="kategori">
                                        <?php foreach ($kategori as $k) : ?>
                                            <option value="<?= $k['id']; ?>"><?= $k['nama']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Kategori
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" class="form-control <?= ($validation->hasError('lokasi')) ? 'is-invalid' : ''; ?>" id="tag" name="lokasi">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('lokasi'); ?>
                                    </div>
                                    <small id="passwordHelpBlock" class="form-text text-muted">
                                        Lokasi agenda
                                    </small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= $validation->hasError('img') ? 'is-invalid' : ''; ?>" id="customFile" name="img" onchange="previewImg()">
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('img'); ?>
                                        </div>
                                        <label class="custom-file-label" for="customFile">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="deskripsi" rows="7"><?= old('deskripsi'); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-globe"></i> Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>