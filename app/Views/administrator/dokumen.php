<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col-lg-4">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800" id="tambahData">Tambah dokumen</h1>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>/administrator/tambah_dokumen" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" class="id">
                        <input type="hidden" name="slug" class="slug">
                        <input type="hidden" name="fileLama" class="file">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="nama_file">Nama dokumen</label>
                                    <input type="text" class="form-control nama-file <?= ($validation->hasError('nama_file')) ? 'is-invalid' : ''; ?>" id="nama_file" name="nama_file" value="<?= old('nama_file'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_file'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input filePrv <?= $validation->hasError('file_dokumen') ? 'is-invalid' : ''; ?>" id="customFile" name="file_dokumen" onchange="previewImg()">
                                    <div id="validationServer03Feedback" class="invalid-feedback">
                                        <?= $validation->getError('file_dokumen'); ?>
                                    </div>
                                    <label class="custom-file-label" for="customFile">Pilih file</label>
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal input</label>
                                    <input type="date" class="form-control tanggal <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="tanggal" name="tanggal" value="<?= old('tanggal'); ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info">Publish</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-8 mt-3">
            <div class="card shadow">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800 d-sm-inline">Dokumen diupload</h1>
                        <a href="<?= base_url(); ?>/administrator/dokumen" class="d-sm-inline mt-2 btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Dokumen</th>
                                <th scope="col">Tanggal Input</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($dokumen as $d) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $d['nama_file']; ?></td>
                                    <td><?= $d['tanggal']; ?></td>
                                    <td>
                                        <a href="#" class="btn btn-sm btn-warning btn-edit" data-id="<?= $d['id']; ?>" data-nama="<?= $d['nama_file']; ?>" data-file="<?= $d['file']; ?>" data-slug="<?= $d['slug']; ?>" data-file="<?= $d['file']; ?>" data-tanggal="<?= $d['tanggal']; ?>"><i class="far fa-edit"></i></a>
                                        <form action="<?= base_url(); ?>/administrator/dokumen/<?= $d['id']; ?>" class="d-inline" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="btn btn-sm btn-danger my-2" onclick="return confirm('Hapus dokumen ini ?')"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                        <a href="<?= base_url(); ?>/dokumen/download_file/<?= $d['slug']; ?>" class="btn btn-sm btn-info"><i class="fas fa-download"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>