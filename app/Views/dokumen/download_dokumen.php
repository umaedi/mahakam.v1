<?= $this->extend('layouts/template_blog'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <section class="download">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-sm-12">
                <div class="list-download">
                    <div class="head-title">
                        <p>Download Dokumen</p>
                    </div>
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama file</th>
                                <th scope="col" class="text-center">Tanggal diupload</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><?= $dokumen['nama_file']; ?></td>
                                <td class="text-center"><?= $dokumen['tanggal']; ?></td>
                                <td><a href="<?= base_url(); ?>/dokumen/download_file/<?= $dokumen['slug']; ?> " class="btn btn-sm btn-custom"><i class="fas fa-cloud-download-alt"></i> Dwnload</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?= $this->endSection(); ?>