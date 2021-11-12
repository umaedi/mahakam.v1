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
                                    <img data-src="<?= base_url(); ?>/assets/img/profile/<?= $u['user_image']; ?>" class="lazyload img-thumbnail img-preview">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">Edit profile</label>
                                    <input type="text" class="form-control <?= $validation->hasError('user_name') ? 'is-invalid' : ''; ?>" id="nama" value="<?= $u['username']; ?>" readonly>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_name'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= $validation->hasError('user_email') ? 'is-invalid' : ''; ?>" id="email" value="<?= $u['email']; ?>" readonly>
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_email'); ?>
                                    </div>
                                </div>
                                <a href="/administrator/edit_profile/<?= $u['id']; ?>" type="submit" class="btn btn-sm btn-info edit-profile">Edit profile</a>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-md-4 ml-5">
                            <form action="<?= route_to('forgot') ?>" method="post">
                                <div class="form-group">
                                    <label for="email" class="font-weight-bold">Ganti password</label>
                                    <?= view('Myth\Auth\Views\_message_block') ?>
                                    <input type="email" class="form-control <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" id="password_lama" name="email" placeholder="Masukan email">
                                    <div class="invalid-feedback">
                                        <?= session('errors.email') ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info">Kirim permintaan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>