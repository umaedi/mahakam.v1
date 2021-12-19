<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <?= session()->getFlashdata('pesan'); ?>
    <div class="row">
        <?php foreach ($banner as $b) : ?>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Banner bupati</h1>
                            <a href="<?= base_url(); ?>/administrator" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="input-bupati" name="url_bupati" value="<?= $b['url_bupati']; ?>" readonly>
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('bupati') ? 'is-invalid' : ''; ?>" id="customFile" onchange="previewImg()" name="bupati">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('bupati'); ?>
                                    </div>
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                                <a href="<?= base_url(); ?>/administrator/edit_banner/<?= $b['id']; ?>" type="submit" id="btnBupati" class="btn btn-sm btn-info mt-3 edit-bupati">Edit banner</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $b['bupati']; ?>" class="lazyload img-thumbnail img-preview">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Banner wakil bupati</h1>
                            <a href="<?= base_url(); ?>/administrator" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['url_wakil']; ?>" readonly>
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('img_banner') ? 'is-invalid' : ''; ?>" id="customFile2" onchange="previewImg2()" name="img_banner">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('img_banner'); ?>
                                    </div>
                                    <label class="custom-file-label label2" for="customFile">Pilih file</label>
                                </div>
                                <a href="<?= base_url(); ?>/administrator/edit_banner/<?= $b['id']; ?>" type="submit" id="btnBupati" class="btn btn-sm btn-info mt-3 edit-bupati">Edit banner</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $b['wakil']; ?>" class="lazyload img-thumbnail img-preview2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Banner utama</h1>
                            <a href="<?= base_url(); ?>/administrator" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['url_banner']; ?>" readonly>
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('img_banner') ? 'is-invalid' : ''; ?>" id="customFile3" onchange="previewImg3()" name="img_banner">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('img_banner'); ?>
                                    </div>
                                    <label class="custom-file-label label3" for="customFile">Pilih file</label>
                                </div>
                                <a href="<?= base_url(); ?>/administrator/edit_banner/<?= $b['id']; ?>" type="submit" class="btn btn-sm btn-info mt-3">Edit banner</a>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $b['img_banner']; ?>" class="lazyload img-thumbnail img-preview3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <?php foreach ($settings as $b) : ?>
            <div class="col-md-12">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Pengaturan umum</h1>
                            <a href="<?= base_url(); ?>/administrator/banner" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nama website</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['website_name']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Selogan</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['slogan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Welcome msg</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" readonly><?= $b['welcome_msg']; ?> </textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Alamat</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['addres']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Contact</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['contact']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $b['email']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <a href="<?= base_url(); ?>/administrator/edit_genralSettings/<?= $b['id']; ?>" type="submit" id="btnBupati" class="btn btn-sm btn-info mt-2 edit-bupati">Edit pengaturan</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection(); ?>