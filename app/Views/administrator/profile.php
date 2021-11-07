<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
                        <a href="<?= base_url(); ?>/administrator" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <?php foreach ($user as $u) : ?>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="pass" class="font-weight-bold">Foto profil</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/profile/<?= $u['img']; ?>" class="lazyload img-thumbnail img-preview">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">Ganti nama pengguna dan email</label>
                                    <input type="text" class="form-control <?= $validation->hasError('user_name') ? 'is-invalid' : ''; ?>" id="nama" value="<?= $u['user_name']; ?>" readonly>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_name'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= $validation->hasError('user_email') ? 'is-invalid' : ''; ?>" id="email" value="<?= $u['user_email']; ?>" readonly>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_email'); ?>
                                    </div>
                                </div>
                                <a href="/administrator/edit_profile/<?= $u['user_id']; ?>" type="submit" class="btn btn-sm btn-info edit-profile">Edit profile</a>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-md-4 ml-5">
                            <form action="/administrator/update_password" method="post">
                                <div class="form-group">
                                    <label for="password_lama" class="font-weight-bold">Ganti password</label>
                                    <input type="password" class="form-control <?= (session()->getFlashdata('msg')) ? 'is-invalid' : ''; ?>" id="password_lama" name="password_lama" placeholder="Masukan password lama">
                                    <div class="invalid-feedback">
                                        <?= session()->getFlashdata('msg'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password1">Password baru</label>
                                    <input type="password" class="form-control <?= $validation->hasError('password1') ? 'is-invalid' : ''; ?>" id="password1" name="password1">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password1'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password2">Konfirmasi password</label>
                                    <input type="password" class="form-control <?= $validation->hasError('password2') ? 'is-invalid' : ''; ?>" id="password2" name="password2">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('password2'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">Simpan perubahan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>