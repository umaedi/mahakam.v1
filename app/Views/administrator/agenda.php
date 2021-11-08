<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card shadow">
        <?= session()->getFlashdata('pesan'); ?>
        <div class="card-header">
            <div class="col-sm-12">
                <div class="d-sm-flex align-items-center justify-content-between">
                    <h1 class="h3 mb-0 text-gray-800">Agenda</h1>
                    <a href="<?= base_url(); ?>/administrator/buat_agenda" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-sm fa-plus"></i> Tambah</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Agenda</th>
                            <th scope="col">Tanggal</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($agenda as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $a['nama_agenda']; ?></td>
                                <td><?= $a['tanggal']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>/administrator/edit_agenda/<?= $a['slug']; ?>" class="btn btn-sm btn-warning"><i class="far fa-edit"></i></a>
                                    <form action="<?= base_url(); ?>/administrator/<?= $a['id']; ?>" class="d-inline" method="post">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus agenda ini ?')"><i class="far fa-trash-alt"></i></button>
                                    </form>
                                    <a href="<?= base_url(); ?>/agenda/p/<?= $a['slug']; ?>" target="_blank" class="btn btn-sm btn-info"><i class="fas fa-eye text-white"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>