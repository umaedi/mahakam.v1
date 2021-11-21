<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col-md-6">
            <form action="#" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" class="id">
                <input type="hidden" name="logoLama" class="logoLama">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h4 mb-0 text-gray-800">Edit tugas pokok dan fungsi</h1>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="pass">Logo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= $validation->hasError('logo') ? 'is-invalid' : ''; ?>" id="customFile" name="logo" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('logo'); ?>
                                </div>
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="agenda">judul</label>
                                    <input type="text" class="judulTugas form-control <?= ($validation->hasError('nama_tugas')) ? 'is-invalid' : ''; ?>" id="agenda" name="nama_tugas" value="<?= old('judul_tugas'); ?>" disabled>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_tugas'); ?>
                                    </div>
                                    <small id="emailHelp" class="form-text text-muted">Hanya digunakan untu edit tugas pokok & fungsi</small>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tugas">Tugas dan fungsi</label>
                            <textarea class="deskripsiTugas form-control" id="tugas" name="deskripsi_tugas" rows="10"><?= old('deskripsi_tugas'); ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-globe"></i> Publish</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <?= csrf_field(); ?>
            <?php foreach ($tugas as $t) : ?>
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <!-- <h1 class="h4 mb-0 text-gray-800">Tugas pokok dan fungsi</h1> -->
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info btnTugas" data-id="<?= $t['id']; ?>" data-name="<?= $t['name']; ?>" data-logo="<?= $t['logo']; ?>" data-tugas="<?= $t['tugas_fungsi']; ?>"><i class="far fa-edit"></i> Edit</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="text-center">
                                    <img src="<?= base_url(); ?>/assets/img/logo/<?= $t['logo']; ?>" width="20%">
                                    <h3 class="mt-3"><?= $t['name']; ?></h3>
                                </div>
                                <p><?= $t['tugas_fungsi']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <?= $this->endSection(); ?>