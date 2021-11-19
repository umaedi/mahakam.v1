<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h3 class="h4 mb-0 text-gray-800">Edit struktur organisasi</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="id">
                        <input type="hidden" name="imgLama" class="oldImage">
                        <div class="mb-3">
                            <label for="struktur" class="form-label">Nama struktur</label>
                            <input type="text" class="form-control strukturName <?= ($validation->hasError('nama_struktur')) ? 'is-invalid' : ''; ?>" id="struktur" name="nama_struktur">
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('nama_struktur'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Pilih file</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= ($validation->hasError('image_struktur')) ? 'is-invalid' : ''; ?>" id="customFile" name="image_struktur" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('image_struktur'); ?>
                                </div>
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-globe"></i> Publish</button>
                    </form>
                </div>
            </div>
        </div>
        <?php foreach ($struktur as $s) : ?>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="h4 mb-0 text-gray-800">Struktur organisasi</h3>
                            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-info btnStruktur" data-id="<?= $s['id']; ?>" data-name="<?= $s['name']; ?>" data-image="<?= $s['image_struktur']; ?>"><i class="far fa-edit"></i> Edit struktur organiasi</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <img src="<?= base_url(); ?>/assets/img/struktur/<?= $s['image_struktur']; ?>" width="100%">
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>