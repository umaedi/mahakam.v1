<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <form action="/administrator/update_agenda/<?= $edit_agenda['id']; ?>" method="post">
                <?= csrf_field(); ?>
                <input type="hidden" name="id" value="<?= $edit_agenda['id']; ?>">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <div class="d-sm-flex align-items-center justify-content-between">
                            <h1 class="h3 mb-0 text-gray-800">Agenda Baru</h1>
                            <a href="<?= base_url(); ?>/administrator/agenda" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="agenda">Nama Agenda</label>
                                    <input type="text" class="form-control <?= ($validation->hasError('nama_agenda')) ? 'is-invalid' : ''; ?>" id="agenda" name="nama_agenda" value="<?= (old('nama_agenda')) ? old('nama_agenda') : $edit_agenda['nama_agenda']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('nama_agenda'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="agenda">Tanggal Agenda</label>
                                    <input type="date" class="form-control <?= ($validation->hasError('tanggal')) ? 'is-invalid' : ''; ?>" id="agenda" name="tanggal" value="<?= $edit_agenda['tanggal']; ?>">
                                    <div class="invalid-feedback">
                                        <?= $validation->getError('tanggal'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description">Deskripsi</label>
                            <textarea class="form-control" id="description" name="deskripsi" rows="7"><?= $edit_agenda['deskripsi']; ?></textarea>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-globe"></i> Publish</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>