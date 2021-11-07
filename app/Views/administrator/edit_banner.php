<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="<?= base_url(); ?>/administrator/update_banner/<?= $banner['id']; ?>" method="post" enctype="multipart/form-data">
        <input type="hidden" name="imgLama1" value="<?= $banner['bupati']; ?>">
        <input type="hidden" name="imgLama2" value="<?= $banner['wakil']; ?>">
        <input type="hidden" name="imgLama3" value="<?= $banner['img_banner']; ?>">
        <input type="hidden" name="id" value="<?= $banner['id']; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Banner bupati</h1>
                            <a href="<?= base_url(); ?>/administrator/banner" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_bupati" value="<?= $banner['url_bupati']; ?>">
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('bupati') ? 'is-invalid' : ''; ?>" id="customFile" onchange="previewImg()" name="bupati">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('bupati'); ?>
                                    </div>
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info mt-3">Simpan perubahan</button>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $banner['bupati']; ?>" class="lazyload img-thumbnail img-preview2">
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
                            <a href="<?= base_url(); ?>/administrator/banner" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_wakil" value="<?= $banner['url_wakil']; ?>">
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('wakil') ? 'is-invalid' : ''; ?>" id="customFile2" onchange="previewImg2()" name="wakil">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('wakil'); ?>
                                    </div>
                                    <label class="custom-file-label label2" for="customFile">Pilih file</label>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info mt-3">Simpan perubahan</button>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $banner['wakil']; ?>" class="lazyload img-thumbnail img-preview2">
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
                            <a href="<?= base_url(); ?>/administrator/banner" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL Banner</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="url_banner" value="<?= $banner['url_banner']; ?>">
                                    <small id="emailHelp" class="form-text text-muted">Tambahkan url banner. URL akan mengarah ke alamat tujuan ketika di klik</small>
                                </div>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input <?= $validation->hasError('img_banner') ? 'is-invalid' : ''; ?>" id="customFile3" onchange="previewImg3()" name="img_banner">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('img_banner'); ?>
                                    </div>
                                    <label class="custom-file-label label3" for="customFile">Pilih file</label>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info mt-3">Simpan perubahan</button>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Preview banner</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/banner/<?= $banner['img_banner']; ?>" class="lazyload img-thumbnail img-preview2">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <?= $this->endSection(); ?>