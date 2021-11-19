<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="/administrator/tambah_kategori_dokumen" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="id" class="id">
        <input type="hidden" name="fileLama" class="fileLama">
        <input type="hidden" name="slug" class="slug">
        <div class="row">
            <?= session()->getFlashdata('pesan'); ?>
            <div class="col-lg-4">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="h3 mb-0 text-gray-800" id="tambahKategori">Tambah kategori</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Kategori Dokumen</label>
                            <input type="text" class="form-control namaKategori <?= ($validation->hasError('nama_kategori')) ? 'is-invalid' : ''; ?>" id="nama" name="nama_kategori">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama_kategori'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pass">Icon Kategori</label>
                            <img data-src="<?= base_url(); ?>/assets/img/profile/#" class="lazyload img-thumbnail img-preview">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input <?= $validation->hasError('icon_kategori') ? 'is-invalid' : ''; ?>" id="customFile" name="icon_kategori" onchange="previewImg()">
                                <div id="validationServer03Feedback" class="invalid-feedback">
                                    <?= $validation->getError('icon_kategori'); ?>
                                </div>
                                <label class="custom-file-label" for="customFile">Pilih file</label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info" id="btnTambahKategori">Tambah</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="h3 mb-0 text-gray-800">Kategori</h3>
                            <a href="<?= base_url(); ?>/administrator/kategori" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-plus"></i> Tambah</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Icon Kategori</th>
                                    <th scope="col">Nama kategori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kategori as $k) : ?>
                                    <tr>
                                        <th class="align-middle" scope="row"><?= $i++; ?></th>
                                        <td>
                                            <img src="<?= base_url(); ?>/assets/img/icon_kategori/<?= $k['icon_kategori']; ?>" width="150px">
                                        </td>
                                        <td class="align-middle"><?= $k['nama_kategori']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning btn-edit-kategori-dokumen mt-3" data-id="<?= $k['id']; ?>" data-file="<?= $k['icon_kategori']; ?>" data-nama=" <?= $k['nama_kategori']; ?>"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url(); ?>/administrator/hapus_kategori_dokumen/<?= $k['id']; ?>" onclick="return confirm('Hapus kategori')" class="btn btn-sm btn-danger btn-edit mt-3"><i class="far fa-trash-alt"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?= $this->endSection(); ?>