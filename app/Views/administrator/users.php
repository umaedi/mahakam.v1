<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <?= session()->getFlashdata('pesan'); ?>
    <div class="row">
        <div class="col-md-4">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="h5 mb-0 text-gray-800">Tambah user</h5>
                    </div>
                </div>
                <div class="card-body">
                    <?= view('Myth\Auth\Views\_message_block') ?>
                    <form action="<?= route_to('register') ?>" method="post">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                            <small id="emailHelp" class="form-text text-muted">Password otomatis di generate 12345678</small>
                        </div>
                        <div class="form-group">
                            <label for="user">Username</label>
                            <input type="text" class="form-control" id="user" name="username">
                        </div>
                        <input type="hidden" name="password" value="12345678">
                        <input type="hidden" name="pass_confirm" value="12345678">
                        <input type="hidden" name="role" value="2">
                        <button type="submit" class="btn btn-sm btn-info">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="h5 mb-0 text-gray-800">User list</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Username</th>
                                <th scope="col">Email</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($users as $u) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $u['username']; ?></td>
                                    <td><?= $u['email']; ?></td>
                                    <?php if ($u == '2') { ?>
                                        <td><span class="badge badge-warning">Non Active</span></td>
                                    <?php } else { ?>
                                        <td><span class="badge badge-success">Active</span></td>
                                    <?php } ?>
                                    <td>
                                        <a href="<?= base_url(); ?>/administrator/edit_user/<?= $u['id']; ?>" class="d-inline btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                        <form action="<?= base_url(); ?>/administrator/delete_user/<?= $u['id']; ?>" class="d-inline" method="post">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <button type="submit" class="d-inline btn btn-sm btn-danger" onclick="return confirm('Hapus user ini ?')"><i class="far fa-trash-alt"></i></button>
                                        </form>
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