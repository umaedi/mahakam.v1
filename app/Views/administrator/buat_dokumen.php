<?= $this->extend('layouts/template_admin'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card shadow mb-4">
                <div class="card-header">
                    <div class="d-sm-flex align-items-center justify-content-between">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Dokumen</h1>
                        <a href="<?= base_url(); ?>/administrator/dokumen" class="d-none d-sm-inline-block btn btn-sm btn-info"><i class="fas fa-arrow-left"></i> Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= base_url(); ?>/administrator/tambah_dokumen" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="nama">Nama File</label>
                                    <input type="text" class="form-control" id="nama" name="nama_file">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d'); ?>">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="tanggal">Tanggal</label>
                                    <input type="text" class="form-control" id="tanggal" name="file">
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-sm btn-info">Publish</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>