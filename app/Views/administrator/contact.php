<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h5 class="h5 mb-0 text-gray-800">Pesan masuk</h5>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Email</th>
                                <th scope="col">Subjek</th>
                                <th scope="col">Pesan</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($contact as $c) : ?>
                                <tr>
                                    <th scope="row"><?= $i++; ?></th>
                                    <td><?= $c['name']; ?></td>
                                    <td><?= $c['email']; ?></td>
                                    <td><?= $c['subject']; ?></td>
                                    <td><a href="<?= base_url(); ?>/administrator/replay_msg/<?= $c['id']; ?>" class="btn btn-sm btn-info"><i class="far fa-eye"></i></i></a></td>
                                    <td>
                                        <a href="<?= base_url(); ?>/administrator/delete_msg/<?= $c['id']; ?>" type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus pesan ini ?')"><i class="far fa-trash-alt"></i></a>
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