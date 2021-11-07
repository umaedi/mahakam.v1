<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Profil</h1>
                        <a href="<?= base_url(); ?>/administrator/profile" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="/administrator/update_profile/<?= $user['user_id']; ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="imgLama" value="<?= $user['img']; ?>">
                        <input type="hidden" name="user_id" value="<?= $user['user_id']; ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="pass" class="font-weight-bold">Foto profil</label>
                                    <img data-src="<?= base_url(); ?>/assets/img/profile/<?= $user['img']; ?>" class="lazyload img-thumbnail img-preview">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input <?= $validation->hasError('profile_image') ? 'is-invalid' : ''; ?>" id="customFile" name="profile_image" onchange="previewImg()">
                                        <div id="validationServer03Feedback" class="invalid-feedback">
                                            <?= $validation->getError('profile_image'); ?>
                                        </div>
                                        <label class="custom-file-label" for="customFile">Pilih file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nama" class="font-weight-bold">Ganti nama pengguna dan email</label>
                                    <input type="text" class="form-control <?= $validation->hasError('user_name') ? 'is-invalid' : ''; ?>" id="nama" value="<?= $user['user_name']; ?>" name="user_name">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_name'); ?>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control <?= $validation->hasError('user_email') ? 'is-invalid' : ''; ?>" id="email" value="<?= $user['user_email']; ?>" name="user_email">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('user_email'); ?>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-sm btn-info edit-profile">Simpan perubahan</button>
                            </div>
                    </form>
                    <div class="col-md-4 ml-5">
                        <form action="/administrator/update_password">
                            <div class="form-group">
                                <label for="password_lama" class="font-weight-bold">Ganti password</label>
                                <input type="password" class="form-control <?= $validation->hasError('password_lama') ? 'is-invalid' : ''; ?>" id="password_lama" name="password_lama" placeholder="Masukan password lama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password_lama'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password_baru">Password baru</label>
                                <input type="password" class="form-control <?= $validation->hasError('password_baru') ? 'is-invalid' : ''; ?>" id="password_baru" name="password_baru">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password_baru'); ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="konfirmasi_password">Konfirmasi password</label>
                                <input type="password" class="form-control <?= $validation->hasError('konfirmasi_password') ? 'is-invalid' : ''; ?>" id="konfirmasi_password" name="konfirmasi_password">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('konfirmasi_password'); ?>
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