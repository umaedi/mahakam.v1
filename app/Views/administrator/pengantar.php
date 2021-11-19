<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container">
    <?= session()->getFlashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="h4 mb-0 text-gray-800">Edit kata pengantar</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/administrator/save_pengantar" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="id">
                        <input type="hidden" name="imgLama" class="imgLogo">
                        <div class="form-group">
                            <label for="pass">Logo</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= $validation->hasError('user_image') ? 'is-invalid' : ''; ?>" id="customFile" name="logo_pengantar" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('user_image'); ?>
                                </div>
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul</label>
                            <input type="text" class="judulPengantar form-control <?= ($validation->hasError('judul_pengantar')) ? 'is-invalid' : ''; ?>" id="judul" name="judul_pengantar" disabled>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('judul_pengantar'); ?>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="kataPengantar" class="form-label">Kata pengantar</label>
                            <textarea class="kataPengantar form-control <?= ($validation->hasError('kata_pengantar')) ? 'is-invalid' : ''; ?>" id="kataPengantar" rows="7" disabled name="kata_pengantar"></textarea>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('kata_pengantar'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-globe"></i> Publish</button>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <?php foreach ($pengantar as $p) : ?>
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="h4 mb-0 text-gray-800">Kata pengantar</h3>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info btnPengantar" data-id="<?= $p['id']; ?>" data-logo="<?= $p['logo']; ?>" data-judul="<?= $p['judul']; ?>" data-pengantar="<?= $p['pengantar']; ?>"><i class="far fa-edit"></i> Edit kata pengantar</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <img src="<?= base_url(); ?>/assets/img/logo/<?= $p['logo']; ?>" width="20%">
                        </div>
                        <div class="text-center mt-3">
                            <h4><?= $p['judul']; ?></h4>
                        </div>
                        <p><?= $p['pengantar']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>