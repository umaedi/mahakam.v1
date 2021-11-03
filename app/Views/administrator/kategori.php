<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <form action="/administrator/tambah_kategori" method="POST">
        <input type="hidden" name="id" class="id">
        <div class="row">
            <?= session()->getFlashdata('pesan'); ?>
            <div class="col-lg-6">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h3 class="h3 mb-0 text-gray-800" id="tambahKategori">Tambah kategori</h3>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nama">Nama Kategori</label>
                            <input type="text" class="form-control namaKategori <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama">
                            <div class="invalid-feedback">
                                <?= $validation->getError('nama'); ?>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info">Tambah</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
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
                                    <th scope="col">Nama Kaetgori</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($kategori as $k) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $k['nama']; ?></td>
                                        <td>
                                            <a href="#" class="btn btn-sm btn-warning btn-edit-kategori" data-id="<?= $k['id']; ?>" data-nama="<?= $k['nama']; ?>"><i class="far fa-edit"></i></a>
                                            <a href="<?= base_url(); ?>/administrator/hapus_kategori/<?= $k['id']; ?>" onclick="return confirm('Hapus kategori')" class="btn btn-sm btn-danger btn-edit"><i class="far fa-trash-alt"></i></a>
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